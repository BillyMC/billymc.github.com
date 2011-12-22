$(document).ready(function() {
    $("h2,h3").each(function(i) {
        var current = $(this);
        current.attr("id", "title" + i);
	current.attr("onclick", "window.scrollTo(0,0);");
        $("#toc").append("\n<a id='link" + i + "' href='#title" + i + "' title='" + current.get(0).tagName + "'>" + current.html() + "</a>");
    });
});

// $(document).ready(
//     function(){
// 	$('<span><a href="#topofpage" class="topofpage">Top</a></span>').insertBefore('h2');
// 	$('<a id="topofpage" name="topofpage"></a>').prependTo('body');
//     });

$(document).ready(
    function(){
	$('h2,h3').hover(
	    function(){
		$(this).addClass('hover');},
	    function(){
		$(this).removeClass('hover');}
	);
    });
