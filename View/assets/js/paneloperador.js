$(document).ready(function(){

	$("tr.fila").click(function(){
		console.log("item clickeado...");
		//ESTA LINEA NOS ESTA DEVOLVIENDO EL VALOR QUE NECESITAMOS!
		console.log($(this).children()[0].innerHTML);
		window.location = "./paneloperador.php?cambio=1";
	})
});