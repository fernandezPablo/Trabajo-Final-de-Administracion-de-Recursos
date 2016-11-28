<?php 
	require "../Controller/UsuarioController.php";

	if(isset($_GET['page']) && $_GET['page'] === 'logout'){
		UsuarioController::logout();
	}

	if(isset($_COOKIE['user']) && isset($_COOKIE['hash']) && isset($_COOKIE['perfil'])){
		if(UsuarioController::verificarUsuario($_COOKIE['user'],$_COOKIE['hash'],'OPERADOR')){
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
		<title>Panel Operador</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">

	</head>
	<body>
		
		<?php 
			require_once("../Controller/OperadorController.php");
			include("./commonHeader.php");
		 ?>
		
		<div class="container-fluid paddingLateral">
			<br>

			<div class="row"> <!--FILA2-->
				<div class="col-md-6">

					<h4>Solicitudes de Cambio</h4>
					
					<div class="table-striped table-responsive panel panel-default">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Id Cambio</th>
									<th class="text-center">Origen</th>
									<th class="text-center">Solicitante</th>
									<th class="text-center">Vencmiento</th>
									<th class="text-center">Prioridad</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								$arrayCambios= OperadorController::getListadoCambiosPeticion();
								for($i=0;$i<count($arrayCambios);$i++){
									echo "<tr class='fila'>";
									echo "<td>".$arrayCambios[$i]->getIdCambio()."</td>";
									echo "<td>".$arrayCambios[$i]->getSysExterno()->getNombreSysExterno()."</td>";
									echo "<td>".$arrayCambios[$i]->getNombreSolicitante()."</td>";
									echo "<td>".$arrayCambios[$i]->getFechaDeVencimiento()."</td>";
									echo "<td>".$arrayCambios[$i]->getPrioridad()->getNombrePrioridad()."</td>";
									echo "</tr>";
								}
							 ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">

					<div class="row">
						<div class="col-md-6">
							<h4>Información de Cambio</h4>
						</div>
						<div class="col-md-6">
							<a href="" class="pull-right textvertical">Editar</a>
						</div>
					</div>

					<div class="panel panel-default">

						<div class="panel-body">
							
							<?php 
								if(isset($_GET['cambio'])){
									$cambio = OperadorController::getDetalleCambio($_GET['cambio'])[0];
								}
							 ?>
							<div class="row"> <!--FILA2-->
								<div class="col-md-12">
									
									<?php 									 
										if(isset($_GET['cambio'])){
											echo "<p class='text-info'>DESCRIPCION</p>";
											echo "<p>".$cambio->getDescripcion()."</p>";
											echo "<br><p class='text-info'>MOTIVO</p>";
											echo "<p>".$cambio->getMotivo()."</p>";
											echo "<br><p class='text-info'>PROPOSITO</p>";
											echo "<p>".$cambio->getProposito()."</p><br>";	
										}
									?>
								</div>							
							</div>
								

							<div class="row">

								<div class="col-md-6">
									<p class="text-info">SOLICITANTE</p>
									<p class="text-info">TIEMPO ESTIMADO</p>
									<p class="text-info">VENCIMIENTO</p>
									<p class="text-info">EQUIPO</p>
									<p class="text-info">IMPACTO</p>
									<p class="text-info">PRIORIDAD</p>
								</div>

								<div class="col-md-6 ">
									<?php 
									if(isset($_GET['cambio'])){
										echo "<p class='text-right'>".$cambio->getNombreSolicitante()."</p>";
										echo "<p class='text-right'>".$cambio->getTiempoEstimado()."</p>";
										echo "<p class='text-right'>".$cambio->getFechaDeVencimiento()."</p>";
										echo "<p class='text-right'>---</p>";
										echo "<p class='text-right'>".$cambio->getImpacto()->getNombreImpacto()."</p>";
										echo "<p class='text-right'>".$cambio->getPrioridad()->getNombrePrioridad()."</p>";
									}
									 ?>
								</div>
								
							</div>

							<div class="row">
								<br>
								<div class="col-md-12">

									<button type="button" class="btn btn-default pull-right buttonMargin">ACEPTAR</button>
									<button type="button" class="btn btn-primary pull-right">RECHAZAR</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="./assets/js/jquery.min.js"></script>
		<!--Custom Script-->
		<script src="./assets/js/paneloperador.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="./assets/js/bootstrap.min.js" ></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>