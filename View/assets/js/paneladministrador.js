$(document).ready(function(){
	var $title = $("p#title");
	var $item = $("#"+ $title.attr('name'));
	$item.addClass('active');

	$("p#title_cambios").click(function(){
		hiddenList("1",$(this));
	});
	$("p#title_usuarios").click(function(){hiddenList("2",$(this));
	});
});

function hiddenList(area,$item){
	console.log($item.children());
	$("ul#hidden_area_"+area).slideToggle(250,function(){
		if($item.children().attr("class").includes("fa-chevron-up")){
			$item.children().removeClass("fa-chevron-up");
			$item.children().addClass("fa-chevron-down");
		}
		else{
			$item.children().removeClass("fa-chevron-down");
			$item.children().addClass("fa-chevron-up");
		}
	});
}