$(document).ready(function(){
	var $title = $("p#title");
	var $item = $("li#"+ $title.attr('name'));
	$item.addClass('active');

	$("p#title_cambios").click(function(){
		hiddenList("1",$(this));
	});
	$("p#title_usuarios").click(function(){hiddenList("2",$(this));
	});

	$("form#altaUsuario").submit(function(){
		if(!verifyData()){ 
			return false;
		}
	});

	/*$("button#btnAnular").click(function(){
		$inputHidden = $("input#estado");
		$inputHidden.val('anulado');	
	});*/

	$("button#btnAnular").click(function(){
		$inputHidden = $("input#idCambio");
		console.log($(this).data('id'));
		$inputHidden.val($(this).data('id'));	
	});

	$("button#btnRePlanificar").click(function(){
		$inputHidden = $("input#estado");
		$inputHidden.val('aprobado');	
	});

	$("button#btnPlanificado").click(function(){
		window.location.href = "panelAdministrador.php";	
	});

	$("button#btnCerrado").click(function(){
		window.location.href = "panelAdministrador.php";	
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

function verifyData(){
	var $nomyape = $("input#ayn");
	var $usuario = $("input#user");
	var $pass = $("input#pass");
	var $passConfirm = $("input#pass_confirm");
	var $idPerfil = $("select#perfil");
	if($nomyape.val() != "" 
		&& $usuario.val() != "" 
		&& $pass.val() != "" 
		&& $passConfirm.val() != ""
		&& $idPerfil[0].selectedIndex != "0"
		){
		if($pass.val() === $passConfirm.val()){
			console.log("DATOS VALIDADOS");
			return true;
		}
		else{
			console.log("LAS CONTRASEÑAS NO COINCIDEN!");
			$alerta = $("div#alerta");	
			$alerta.addClass("alert-danger");
			$alerta.text("LAS CONTRASEÑAS NO COINCIDEN!");
			return false;
		}
		
	}
	else{
		$alerta = $("div#alerta");	
		$alerta.addClass("alert-danger");
		$alerta.text("FALTAN COMPLETAR CAMPOS OBLIGATORIOS!");		
		return false;
	}
}