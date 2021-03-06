/**
 * cool.modalWidget
 * @author: Paris Theofanidis (ptheofan@gmail.com)
 * @source: git@github.com:ptheofan/cool.modalWidget.git
 *
 * Will convert a div to modal popup (but it's not a dialog).
 * This is based on the CSS facebook (which appearently 'borrowed' it from google)
 * uses to render the modal popups which show case photos, etc.
 *
 * Currently tested with Chrome and Firefox. If you happen to have IE and try it
 * let me know if it worked. Should you apply any IE patches also send 'em over
 * to publish them (under your name of course) with the widget
 *
 * It beats jDialog because
 *   1. It's hellable lighter
 *   2. Aligns itself at screen center ALWAYS (with pure css!) (unline my jDialog extension that uses js)
 *   3. Will prevent the user from scrolling the contents behind the modal (really neat)
 *   4. Allows the user to scroll over the modal if it's larger than his screen
 *   5. Allows you to easily modify its content after it has been initialized (similar to my jDialog extension)
 *   6. Allows you to easily modify ANY css attribute of the elements that will wrap your div
 *   7. Can be configured to automaticall destroy your element on close
 *   8. Has an event for pretty much everything :D
 *   9. Does NOT restrict your modal layout in any way (no title, no X button, no nothing!) :)
 *  10. It can mimic the layout of jDialog allowing you use the most important aspects of it for styling
 *
 *  Configuration Options
 *    autoOpen: false
 *    if true will launch your modal the moment you create it
 *
 *    removeElementOnDestroy: false
 *    if true will REMOVE your element from DOM when modal is destroyed
 *
 *    closeOnEscape: false
 *    if true will close the modal when ESC is pressed (actually code borrowed from jDialog ;)
 *
 *    destroyOnClose: false
 *    if true will destroy the widget automagically when modal closes
 *    FYI: if removeElementOnDestroy is set to true it will also destroy your element! :)
 *
 *    css: {blocker: {...}, hoder: {...}, alignment: {...}, container: {...}}
 *    contains the CSS that is applied to the divs that wrap your element.
 *    FYI: z-index and transparency level of the blocker can be easily adjusted
 *    from the css.blocker['z-index'] and css.blocker['background-color'].
 *    [HINT] You can even add a png bg with your logo, cool right? ;)
 *
 *
 *  Functions (methods)
 *    open (events: beforeOpen, afterOpen)
 *    will launch the modal
 *
 *    close (events: beforeClose, afterClose)
 *    will close the modal
 *
 *    destroy (events: beforeDestroy)
 *    will destroy the widget
 *
 *    content (events: beforeContentChange, afterContentChange)
 *    1st argument: HTML or jQuery element
 *    will swap the current content with the provided content (accepts one argument)
 */
(function($){
    $.widget('cool.modalWidget', {

        options: {
            // Open the moment plugin binds to element
            autoOpen: false,

            // Destroy the element when modal closes
            removeElementOnDestroy: false,

            // Dismiss modal on escape
            closeOnEscape: false,

            // Dismiss modal if user clicks outside it
            closeOnClickOutside: false,

            // Destroy the widget when modal is closed (will chain with closeOnEscape and destroyElement)
            destroyOnClose: false,

            // Mimic the jDialog divs layout
            mimicJDialog: false,


            // Classes to attach to the respective div
            classes: {
                blocker: null,
                positioner: null,
                holder: null,
                alignment: null,
                container: null,

                jDialogDialog: 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable',
                jDialogTitle: 'ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix',
                jDialogTitleSpan: 'ui-dialog-title',
                jDialogTitleClose: 'ui-dialog-titlebar-close ui-corner-all',
                jDialogTitleCloseSpan: 'ui-icon ui-icon-closethick'
            },

            // The CSS that is applied to the divs that will contain the element
            css: {
                blocker: {
                    'position': 'fixed',
                    'top': '0px',
                    'left': '0px',
                    'bottom': '0px',
                    'right': '0px',
                    'overflow': 'hidden',
                    'z-index': '1200',
                    'background-color': 'black',
                    'opacity': 0.75,
                    '-ms-filter': '"progid:DXImageTransform.Microsoft.Alpha(Opacity=84)"',
                    'filter': 'alpha(opacity=75)',
                    '-moz-opacity': 0.75,
                    '-khtml-opacity': 0.75,
                    'display': 'none'
                },

                positioner: {
                    'position': 'fixed',
                    'top': '0px',
                    'left': '0px',
                    'bottom': '0px',
                    'right': '0px',
                    'overflow': 'hidden',
                    'z-index': '1200',
                    'background-color': 'transparent',
                    'overflow-y': 'scroll',
                    'display': 'none'
                },

                holder: {
                    'display': 'table',
                    'height': '100%',
                    'width': '100%',
                    'table-layout': 'fixed'
                },

                alignment: {
                    'display': 'table-cell',
                    'text-align': 'center',
                    'vertical-align': 'middle',
                    'width': '100%',
                    'height': '100%'
                },

                container: {
                    'position': 'relative',
                    'display': 'inline-block',
                    'outline': 'none',
                    'z-index': '1201',
                    'text-align': 'left'
                }
            }
        },

        // Divs we wrap around element
        _blocker: null,
        _positioner: null,
        _holder: null,
        _alignment: null,
        _container: null,
        _dialogFakeTitle: null,
        _bodyOldOverflowX: null,
        _bodyOldOverflowY: null,


        _create: function() {
            this._self = this;
            this._blocker = $('<div>').css(this.options.css.blocker).addClass(this.options.classes.blocker);
            this._positioner = $('<div>').css(this.options.css.positioner).addClass(this.options.classes.positioner);
            this._holder = $('<div>').css(this.options.css.holder).addClass(this.options.classes.holder);
            this._alignment = $('<div>').css(this.options.css.alignment).addClass(this.options.classes.alignment).addClass('outside-click-capture');
            this._container = $('<div>').css(this.options.css.container).addClass(this.options.classes.container).addClass('inside-click-capture');

            if (this._blocker.closeOnClickOutside == true) {
                this._alignment.addClass('outside-click-capture');
                this._container.addClass('inside-click-capture');
            }

            // Nest the divs and grab the element
            this._positioner.append(this._holder.append(this._alignment.append(this._container.wrapInner(this.element))));

            // Add the divs and classes needed to make this modal appear as jDialog modal
            if (this.options.mimicJDialog) {
                this._container.addClass(this.options.classes.jDialogDialog).attr({
                    role: 'dialog',
                    tabIndex: -1,
                    'aria-labelledby': 'ui-dialog-title-modalContent'
                });
                this._dialogFakeTitle = $('<div>')
                    .addClass(this.options.classes.jDialogTitle)
                    .append($('<span>')
                        .addClass(this.options.classes.jDialogTitleSpan)
                        .html(this.element.attr('title'))
                    )
                    .append($('<a href="#" role="button">')
                        .addClass(this.options.classes.jDialogTitleClose)
                        .append($('<span>close</span>')
                            .addClass(this.options.classes.jDialogTitleCloseSpan)
                        )
                        .on('click', $.proxy(this.close, this))
                        .hover(function(evt){
                            $(this).addClass('ui-state-hover');
                        }, function(evt){
                            $(this).removeClass('ui-state-hover');
                        })
                    );

                this._container.prepend(this._dialogFakeTitle);
            }


            // Append to body
            $('body').append(this._blocker);
            $('body').append(this._positioner);

            // Handle click outside case
            if (this.options.closeOnClickOutside == true) {
                $('.outside-click-capture').click($.proxy(function(evt) {
                    if (this.insideClickCaptured === true) {
                        this.insideClickCaptured = false;
                    } else {
                        this._clickedOutside();
                    }
                }, this));
                $('.inside-click-capture').click($.proxy(function(evt) {
                    this.insideClickCaptured = true;
                }, this));
            }
        },

        _clickedOutside: function() {
            this.close();
        },


        _init: function() {
            if (this.options.autoOpen === true) {
                this.open();
            }
        },


        /**
         * Open the modal
         */
        open: function() {
            if (this._trigger('beforeOpen')) {
                this._positioner.css({'display': 'block'});
                this._blocker.css({'display': 'block'});
                this._bodyOldOverflowX = $('body').css('overflow-x');
                this._bodyOldOverflowY = $('body').css('overflow-y');
                $('body').css({'overflow': 'hidden'});
                if (this.options.closeOnEscape === true) {
                    var self = this;
                    this._positioner.attr('tabIndex', -1).css('outline', 0).keydown(function(evt) {
                        if (self.options.closeOnEscape && !evt.isDefaultPrevented() && evt.keyCode && evt.keyCode === $.ui.keyCode.ESCAPE) {
                            self.close(evt);
                            evt.preventDefault();
                        }
                    });
                }
                this._trigger('afterOpen');
            }
        },


        /**
         * Close the modal
         */
        close: function(evt) {
            if (this._trigger('beforeClose', evt)) {
                $('body').css({'overflow-x': this._bodyOldOverflowX, 'overflow-y': this._bodyOldOverflowY});
                this._trigger('afterClose');

                if (this.options.closeOnEscape === true) {
                    this._positioner.unbind('keypress');
                }
                if (this.options.destroyOnClose === true) {
                    this._positioner.remove();
                    this._blocker.remove();

                    // Restore elemet on DOM (if destroyOnHide = false)
                    if (this.options.removeElementOnDestroy === false) {
                        $('body').append(this.element);
                    } else {
                        this.element.remove();
                    }
                } else {
                    this._positioner.css({'display': 'none'});
                    this._blocker.css({'display': 'none'});
                }
            }
        },


        /**
         * Replace the contents of the modal with whatever you want.
         * FYI: Your associated element will loose all its previous
         */
        content: function(elem) {
            if (this._trigger('beforeContentChange')) {
                this.element.html($(elem));
                this._trigger('afterContentChange');
            }
        }
    });
})(jQuery);
