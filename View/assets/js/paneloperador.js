$(document).ready(function(){

	$("button#btnRechazar").click(function(){
		$inputHidden = $("input#estado");
		$inputHidden.val('rechazado');	
	});

	$("tr.fila").click(function(){
		console.log("item clickeado...");
		$(this).addClass("info");
		window.location = "./paneloperador.php?cambio="+$(this).children()[0].innerHTML;
	});

	

});
