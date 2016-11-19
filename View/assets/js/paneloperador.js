$(document).ready(function(){

	$("tr.fila").click(function(){
		console.log("item clickeado...");
		$(this).addClass("active");
		window.location = "./paneloperador.php?cambio="+$(this).children()[0].innerHTML;
	})
});