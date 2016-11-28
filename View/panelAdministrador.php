<?php
	require "../Controller/UsuarioController.php";

	if(isset($_COOKIE['user']) && isset($_COOKIE['hash']) && isset($_COOKIE['perfil'])){
		if(UsuarioController::verificarUsuario($_COOKIE['user'],$_COOKIE['hash'],'ADMINISTRADOR')){
			$nombreUsuario = $_COOKIE['user'];
			$nombrePerfil = $_COOKIE['perfil'];		
		}
	}
	else{
		UsuarioController::redirect("LOGIN");
	}

 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Panel Administrador</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">

	</head>
	<body>
		
		<?php 
			include("./commonHeader.php");
		 ?>

		<div class="container-fluid paddingLateral" >
			<div class="row">
				<div class="col-md-2">
				
				<?php 
					include("./sidebarAdmin.php");
				 ?>

				</div>

				<div class="col-md-10">
					<?php 
					#
					#	ATENCION! PARA QUE EL SITIO FUNCIONE:	
					#	Las url's se deben cambiar de acuerdo al servidor donde
					#	se ejecutrará.
					#
					if(isset($_GET['page'])){
						switch ($_GET['page']) {
							case 'cambios':
								if(isset($_GET['estado'])){
									
									include ("http://localhost/mis_sitios/tfar/View/tablaCambios.php?estado=".$_GET['estado']);

									#include("http://localhost/proyFinal/View/tablaCambios.php?estado=".$_GET['estado']);
								}
								else{
									include("http://localhost/mis_sitios/tfar/View/tablaCambios.php?estado=aceptado");
									#include("http://localhost/proyFinal/View/tablaCambios.php?estado=aceptado");
								}
								break;
							case 'historial':
								
								include("./historial.php");
								break;

							case 'informe':
								include("./informe.php");
								break;
							
							case 'nuevousuario':
						
								include("./AltaUsuario.php");
								break;
								
							case 'eliminarusuario':
									
								include("./BajaUsuario.php");
								break;
							case 'logout':
								UsuarioController::logout();
								break;
							default:
								include("http://localhost/tfar/View/tablaCambios.php?estado=aceptado");
								#include("http://localhost/proyFinal/View/tablaCambios.php?estado=aceptado");
								break;
						}
					}
					else{
						include("http://localhost/mis_sitios/tfar/View/tablaCambios.php?estado=aceptado");
						#include("http://localhost/mis_sitios/proyFinal/View/tablaCambios.php?estado=aceptado");
					}
					 ?>
				</div>
			</div>
		</div>
		

		<!-- jQuery -->
		<script src="./assets/js/jquery.min.js"></script>
		<!-- Custom script en construccion-->
		<script src="./assets/js/paneladministrador.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="./assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>