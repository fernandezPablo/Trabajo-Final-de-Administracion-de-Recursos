$(document).ready(function(){
	var $items = $(".estado");
	console.log($items);
	$items.click(activeItem);
});

function activeItem(){
	$(".active").removeClass('active');
	$(this).addClass('active');
	console.log($(this)[0].id);
	var $title = $("#title");
	switch($(this)[0].id){
		case 'aceptado':
			$title[0].innerHTML = 'CAMBIOS ACEPTADOS';
			break;
		case 'aprobado':
			$title[0].innerHTML = 'CAMBIOS APROBADOS';
			break;
		case 'planificado':
			$title[0].innerHTML = 'CAMBIOS PLANIFICADOS';
			break;
		case 'realizado':
			$title[0].innerHTML = 'CAMBIOS REALIZADOS';
			break;
		case 'cerrado':
				$title[0].innerHTML = 'CAMBIOS CERRADOS';
				break;
	}
}