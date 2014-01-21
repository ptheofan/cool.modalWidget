<html>
<head>
	<link type="text/css" href="css/smoothness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>
	<script type="text/javascript" src="jquery.cool.modalWidget.js"></script>
</head>
<body>
    <style type="text/css">
        /*
         *   Some basic CSS to make things less ugly
         */
        html, body {font-family: 'Monaco', 'Calibri', 'Arial'; font-size: 12px;}
        li.title {font-weight: bold; text-decoration: underline;}
        ul, li { list-style-type: none; padding: 0;}
        input[type=text] {
            outline: none;
            padding: 4px; border: 1px solid #0099ff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        
        input[type=text]:hover, input[type=text]:active, input[type=text]:focus { border-color: #003399; }
    </style>

    <div id="runModal">Run Modal</div>
    <div id="runJDialog">Run jDialog</div>
    
    <div style="display:none">
        <div title="This is some title" style="background-color: white; min-width: 400px; min-height: 280px; padding: 15px; -webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px;" id="modalContent">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus tellus, elementum vitae scelerisque a, venenatis ut sapien. Ut nisi nulla, fringilla at eleifend quis, venenatis sit amet quam. Morbi consectetur vehicula placerat. Donec et elit vel magna volutpat pulvinar feugiat nec dolor. Maecenas faucibus gravida enim, nec blandit magna dignissim nec. Phasellus erat risus, lobortis eget molestie vitae, sodales at nisi. Cras rhoncus massa eget tellus elementum tempor. Vivamus sit amet mauris sed elit tristique luctus. Mauris tincidunt suscipit turpis, non laoreet ante tempor vitae. Phasellus eget nisl ut metus mollis tristique. Proin ac justo sem. Vivamus sed dapibus lacus. In hac habitasse platea dictumst.
			</p>
			<p>
			Morbi a lectus velit. Proin nec turpis a nisl dignissim adipiscing. Fusce justo tortor, hendrerit in elementum ultricies, posuere nec ipsum. Sed justo tellus, scelerisque ac congue a, malesuada ac ante. Maecenas congue, nunc eget vulputate semper, eros ligula dignissim mauris, nec mollis diam nibh ut massa. Phasellus aliquam, justo et luctus molestie, augue magna adipiscing mi, vitae tempus tellus dui id turpis. Phasellus nec augue et magna ultrices sagittis. Aliquam erat volutpat. Sed facilisis pulvinar sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis pulvinar convallis velit, nec bibendum orci luctus ut. In iaculis quam tristique nisi ullamcorper iaculis. Vivamus neque lectus, dapibus at scelerisque sed, condimentum ut purus. Nunc ut lobortis est. Pellentesque eget magna vitae odio molestie mattis id vitae tellus. Proin ultricies laoreet nisl, eu sollicitudin lacus pretium at.
			</p>
        </div>
    </div>
<script type="text/javascript">
$(function(){    
    $('#runJDialog').button().click(function(){
        $('#modalContent').dialog({
            autoOpen: true,
            modal: true
        });
    });
    
    // Launch the modal
    $('#runModal').button().click(function(){
        $('#modalContent').modalWidget({
            autoOpen: true,
            closeOnEscape: true,
            mimicJDialog: true
        });
    });
});
</script>


<div id="lipsum">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus tellus, elementum vitae scelerisque a, venenatis ut sapien. Ut nisi nulla, fringilla at eleifend quis, venenatis sit amet quam. Morbi consectetur vehicula placerat. Donec et elit vel magna volutpat pulvinar feugiat nec dolor. Maecenas faucibus gravida enim, nec blandit magna dignissim nec. Phasellus erat risus, lobortis eget molestie vitae, sodales at nisi. Cras rhoncus massa eget tellus elementum tempor. Vivamus sit amet mauris sed elit tristique luctus. Mauris tincidunt suscipit turpis, non laoreet ante tempor vitae. Phasellus eget nisl ut metus mollis tristique. Proin ac justo sem. Vivamus sed dapibus lacus. In hac habitasse platea dictumst.
</p>
<p>
Morbi a lectus velit. Proin nec turpis a nisl dignissim adipiscing. Fusce justo tortor, hendrerit in elementum ultricies, posuere nec ipsum. Sed justo tellus, scelerisque ac congue a, malesuada ac ante. Maecenas congue, nunc eget vulputate semper, eros ligula dignissim mauris, nec mollis diam nibh ut massa. Phasellus aliquam, justo et luctus molestie, augue magna adipiscing mi, vitae tempus tellus dui id turpis. Phasellus nec augue et magna ultrices sagittis. Aliquam erat volutpat. Sed facilisis pulvinar sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis pulvinar convallis velit, nec bibendum orci luctus ut. In iaculis quam tristique nisi ullamcorper iaculis. Vivamus neque lectus, dapibus at scelerisque sed, condimentum ut purus. Nunc ut lobortis est. Pellentesque eget magna vitae odio molestie mattis id vitae tellus. Proin ultricies laoreet nisl, eu sollicitudin lacus pretium at.
</p>
<p>
Vivamus pretium euismod cursus. Suspendisse posuere massa nec ipsum accumsan facilisis. Integer ligula elit, auctor eu aliquet non, vestibulum id turpis. Vestibulum ac leo nec nisi cursus congue. Quisque ac metus urna. Duis vestibulum consequat leo, eu ornare erat venenatis posuere. Nunc magna sapien, consectetur luctus tincidunt a, egestas sed urna. Nullam a orci eros, eget sollicitudin velit. Fusce adipiscing, velit at vestibulum scelerisque, tortor libero pulvinar lectus, nec semper est nisl a massa. Nam non accumsan urna. Sed elit eros, posuere a consectetur non, varius ut ligula.
</p>
<p>
Nam iaculis porta volutpat. Curabitur quis nunc nisi, sed pellentesque leo. Nam hendrerit luctus sapien, quis tincidunt nulla pulvinar at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus vitae tellus at magna adipiscing pretium rhoncus at urna. Nam consectetur nulla sed erat gravida pulvinar. Nulla mollis semper neque quis tristique. Donec pellentesque pretium blandit. Mauris lacinia, augue at imperdiet commodo, urna ligula posuere elit, ut adipiscing elit leo ac justo. Cras eget turpis et sem volutpat sodales ac laoreet metus. Integer ut erat sagittis libero luctus pretium tempor a orci. Praesent at purus tortor. Sed sit amet consectetur nibh. Aenean at quam a sem sollicitudin aliquam.
</p>
<p>
Aliquam eros ipsum, sagittis ac sodales in, eleifend et risus. Vestibulum gravida elementum nulla, sit amet consequat nunc vestibulum et. Donec vulputate facilisis elit sed ullamcorper. Suspendisse vitae orci ut nibh sagittis ultricies non ac nisl. Praesent facilisis, nibh nec malesuada consequat, lorem orci porta nibh, in laoreet urna turpis et enim. Pellentesque scelerisque, lorem ac tincidunt fringilla, ligula elit luctus tortor, non aliquam quam nunc nec libero. Maecenas viverra neque in risus hendrerit et suscipit felis commodo. Vivamus sit amet mauris erat, eu aliquam mauris. Mauris eleifend nibh eu nunc vestibulum vitae aliquam urna ultrices. In hac habitasse platea dictumst. Praesent imperdiet, odio nec malesuada vestibulum, augue ante euismod sapien, ut semper augue lacus sed dui. Integer nec massa enim. Aliquam egestas, quam eu blandit euismod, felis est mollis tellus, ut suscipit mauris orci vel nisi.
</p>
<p>
Cras egestas laoreet dapibus. Praesent felis diam, pretium suscipit ornare at, ultrices id nunc. Sed vehicula felis nec magna semper mattis. Nulla at leo id turpis feugiat feugiat id ullamcorper quam. Quisque et augue sed leo faucibus adipiscing non sed nibh. Morbi nibh orci, fringilla ut vehicula sed, laoreet quis sem. Ut tempor varius blandit.
</p>
<p>
Curabitur ornare velit id ante porttitor tincidunt. Cras est elit, laoreet in sagittis et, euismod at massa. Sed eu metus justo. Vivamus orci magna, feugiat eget egestas vitae, elementum id neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris mollis arcu a sapien accumsan varius. Etiam posuere neque in nibh eleifend fermentum. Aliquam luctus massa magna. Duis sodales lacinia mi, ut adipiscing leo consectetur quis. Donec interdum varius arcu, ut varius sem lobortis vel. Ut id nulla lectus. Etiam pharetra elementum risus, at aliquet tortor hendrerit nec.
</p>
<p>
Nam vitae ipsum quam. Ut ultricies gravida suscipit. Donec urna lectus, pretium at dictum quis, pharetra non ligula. Quisque vel mauris ipsum. Sed cursus justo sed quam vehicula pulvinar. Fusce id libero libero. Quisque sagittis erat et justo placerat ac cursus lacus adipiscing. Nulla accumsan risus sit amet lacus interdum ullamcorper. Nam eget tellus arcu. Aliquam erat volutpat. Donec justo lectus, ultricies eu laoreet vel, blandit hendrerit felis.
</p>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis accumsan lectus. Curabitur et consectetur felis. Mauris mollis elit at sem mollis sed laoreet tortor imperdiet. Praesent eget ante ante, vitae lacinia ipsum. Duis libero nibh, euismod ut semper vel, aliquet non felis. Suspendisse potenti. Curabitur in justo vitae ante tristique condimentum a vitae augue. Vivamus ac leo eu leo euismod interdum sit amet ac urna. Nulla non rutrum ligula. Donec orci diam, auctor eu blandit nec, hendrerit ac dolor. Duis at condimentum nisl. Praesent nibh arcu, pellentesque sed condimentum id, condimentum tristique nunc. Nullam lorem ante, molestie vitae accumsan a, pellentesque id leo. Proin lobortis hendrerit libero ac iaculis.
</p>
<p>
Donec at purus nisi. Mauris nec commodo tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut tempus, metus eu dictum iaculis, leo erat convallis augue, hendrerit molestie odio leo in enim. Nulla tempus, orci vel faucibus egestas, felis augue aliquet magna, consectetur facilisis dolor sem a arcu. Vestibulum lorem orci, vehicula blandit suscipit a, pellentesque vitae sem. Phasellus sed orci nisi. Donec dui velit, euismod a iaculis vel, vestibulum a velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur lacinia posuere aliquam. Nunc et nisi nulla.
</p>
<p>
Sed dolor tellus, pellentesque nec varius sit amet, rutrum vitae nibh. Etiam fermentum malesuada ultrices. Sed molestie venenatis ligula, eget gravida lorem aliquet non. Nulla sapien orci, pulvinar vel rhoncus sed, pretium sed nisl. Integer id erat tortor, ac laoreet nisi. Fusce a enim elit, in faucibus eros. Mauris ut neque in neque malesuada vulputate sed quis nunc. Mauris pulvinar scelerisque metus, nec porttitor tellus dignissim eu. Integer faucibus leo ac mauris semper porttitor. Etiam pharetra blandit viverra. Vivamus at condimentum est. Duis fermentum malesuada orci, sed dictum est pharetra accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at odio orci. Fusce ipsum diam, viverra eget aliquam in, sodales vitae neque.
</p>
<p>
Nunc feugiat euismod erat id molestie. Ut in tortor nisi, in venenatis nibh. Donec rutrum tempor mattis. Nunc ut mauris turpis. Cras tempus eleifend facilisis. Morbi ut nisl sit amet nunc egestas placerat vel ac nibh. Curabitur quam nisi, imperdiet a aliquam id, laoreet nec purus. Donec ut est sed nisi laoreet blandit at sit amet nulla. Integer adipiscing faucibus risus at suscipit. Fusce dapibus venenatis turpis nec lobortis. Curabitur nec nisl risus, sit amet condimentum quam. Nullam purus nisl, laoreet sed lobortis ut, auctor sit amet mi. Pellentesque facilisis nisi pharetra ante molestie vestibulum.
</p>
<p>
Vestibulum et nibh nibh, vel fermentum nulla. Curabitur sit amet nulla ipsum. Vivamus tincidunt mauris non est tincidunt consectetur quis non nisl. In dapibus luctus nibh, egestas congue velit dapibus in. Sed non eros nunc, in sagittis odio. Nam id libero ac felis auctor hendrerit a nec libero. In eu ligula libero.
</p>
<p>
Pellentesque dapibus, ante at fringilla iaculis, tortor sapien ullamcorper est, in vehicula lorem sapien tristique sem. Integer et nibh sit amet metus ornare mollis vel fringilla dui. Curabitur enim felis, consequat posuere fermentum ac, euismod at ante. Nunc ullamcorper, metus fringilla hendrerit consectetur, nisi massa consequat ipsum, a imperdiet dui eros et turpis. Donec adipiscing erat non est mattis dapibus. Pellentesque posuere, magna eget convallis sagittis, mauris purus tincidunt metus, nec rhoncus sapien leo id enim. Nunc porta semper tellus in consequat. Donec non congue enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris pulvinar tellus condimentum arcu sagittis eget porta metus blandit. Donec porta porta nisl ut rutrum. Pellentesque justo urna, consequat eu facilisis a, ornare ullamcorper quam.
</p>
<p>
Vestibulum tincidunt ultrices nisi, ac aliquam nisl lacinia sed. Suspendisse quis eros tempus arcu tempus consequat. Vivamus leo dolor, pharetra sed malesuada vel, fermentum vel turpis. Maecenas interdum nisi a ante fringilla eget accumsan metus ultrices. Curabitur quis lectus id nisi cursus scelerisque rutrum sed lorem. Mauris aliquet dolor ut purus tempor non vestibulum nisl sollicitudin. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque nec lorem augue. Sed sit amet urna eget nunc rhoncus dapibus. Nullam sagittis lobortis metus, quis venenatis odio pharetra et. Aenean cursus odio eget quam viverra quis feugiat lorem pharetra.
</p></div>
</body>
</html>
