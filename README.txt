/**
 * cool.modalWidget
 * @author: Paris Theofanidis (ptheofan@gmail.com)
 * @source: git@github.com:ptheofan/cool.modal.widget.git
 *
 * Load the demo.php page (not php really :), and see the look and feel.
 * It has been tested with Chrome and Firefox (don't have IE handy). The demo
 * page is way too crappy (someday I might create a nicer demo page), but you
 * get the point ;)
 * Try resizing the window after you have opened the popup and see how cool it looks :D
 *
 * __IMPORTANT__
 * As always, should you find a bug, make a fix don't hesitate to contact me
 * or make a pull request with the fix. :)
 * And remember, what is OPEN SOURCE stays OPEN SOURCE!
 *
 * p.s. Please do NOT remove the comments in the beginning of the js file
 * or if you do be kind enough to reference me :)
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
 *  1. It's hellable lighter
 *  2. Aligns itself at screen center ALWAYS (with pure css!) (unline my jDialog extension that uses js)
 *  3. Will prevent the user from scrolling the contents behind the modal (really neat)
 *  4. Allows the user to scroll over the modal if it's larger than his screen
 *  5. Allows you to easily modify its content after it has been initialized (similar to my jDialog extension)
 *  6. Allows you to easily modify ANY css attribute of the elements that will wrap your div
 *  7. Can be configured to automaticall destroy your element on close
 *  8. Has an event for pretty much everything :D
 *  9. Does NOT restrict your modal layout in any way (no title, no X button, no nothing!) :)
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