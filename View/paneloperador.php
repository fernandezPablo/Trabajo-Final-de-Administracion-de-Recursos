<?php 
	require "../Controller/UsuarioController.php";
	require "../Controller/CommonController.php";

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
			require "../Controller/OperadorController.php";
			include("./commonHeader.php");
		 ?>
		
		<div class="container-fluid paddingLateral">
			<br>
			<div class="row"> <!--FILA2-->
			<?php 
				$arrayCambios= OperadorController::getListadoCambiosPeticion();
				if(count($arrayCambios)>0):
			?>
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
											<!--<th class="text-center">Categoria</th>-->
										</tr>
									</thead>
									<tbody>
										<?php 
										foreach($arrayCambios as $cambio){
											echo "<tr class='fila'>";
											echo "<td>".$cambio->getIdCambio()."</td>";
											echo "<td>".$cambio->getSysExterno()->getNombreSysExterno()."</td>";
											echo "<td>".$cambio->getNombreSolicitante()."</td>";
											echo "<td>".$cambio->getFechaDeVencimiento()."</td>";
											echo "<td>".$cambio->getPrioridad()->getNombrePrioridad()."</td>";
											//echo "<td>".$cambio->getCategoria()->getNombreCategoria()."</td>";

										}
							echo "</tbody></table></div>";
										?>
				</div>
				<div class="col-md-6">
					<?php 
						if(isset($_GET['cambio'])){
							$cambio = OperadorController::getDetalleCambio($_GET['cambio'],$arrayCambios);
						}
						else{
							$cambio = $arrayCambios[0];
						}

						if($cambio):
					 ?>

					<div class="row">
						<div class="col-md-6">
							<h4>Información de Cambio</h4>
						</div>
						<div class="col-md-6">
							<a class="pull-right textvertical" href=
							<?php 
								if(isset($_GET['cambio']) && isset($_GET['edit'])){
									echo "paneloperador.php?cambio=".$cambio->getIdCambio();
								}
								else if(!isset($_GET['cambio']) && isset($_GET['edit'])){
									echo "paneloperador.php";
								} 
								else{
									echo "paneloperador.php?cambio=".$cambio->getIdCambio()."&edit=1";	
								}
							?>>
								<?php 
									if(isset($_GET['cambio']) && isset($_GET['edit'])){
										echo "Salir de la edicion";
									}
									else{
										echo "Editar";
									}
								 ?>
							</a>
						</div>
					</div>

					<div class="panel panel-default">

						<div class="panel-body">
							
							<div class="row"> <!--FILA2-->
								<div class="col-md-12">
									
									<?php
											echo "<p class='text-info'><b>DESCRIPCION</b></p>";
											echo "<p>".$cambio->getDescripcion()."</p>";
											echo "<br><p class='text-info'><b>MOTIVO</b></p>";
											echo "<p>".$cambio->getMotivo()."</p>";
											echo "<br><p class='text-info'><b>PROPOSITO</b></p>";
											echo "<p>".$cambio->getProposito()."</p><br>";
									?>
								</div>							
							</div>
								

							<div class="row">

								<div class="col-md-6">
									<p class="text-info"><b>SOLICITANTE</b></p>
									<p class="text-info"><b>TIEMPO ESTIMADO</b></p>
									<p class="text-info"><b>VENCIMIENTO</b></p>
									<p class="text-info"><b>EQUIPO</b></p>
									<p class="text-info"><b>IMPACTO</b></p>
									<p class="text-info"><b>PRIORIDAD</b></p>
									<p class="text-info"><b>CATEGORIA</b></p>
								</div>

								<div class="col-md-6 ">
									<?php 
										 	echo "<p class='text-right'>".$cambio->getNombreSolicitante()."</p>";
											echo "<p class='text-right'>".$cambio->getTiempoEstimado()."</p>";
											echo "<p class='text-right'>".$cambio->getFechaDeVencimiento()."</p>";
											echo "<p class='text-right'>".$cambio->getEquipo()."</p>";

											echo "<form id='formDetalle' action='paneloperador.php' method='post'>";
											echo "<input name='idCambio' type='hidden' value='".$cambio->getIdCambio()."'>";
											echo "<input id='estado' name='estado' type='hidden' value='aceptado'>";
											if(!isset($_GET['edit'])){
												echo "<p name='txtImpacto' class='text-right'>".$cambio->getImpacto()->getNombreImpacto()."</p>";
												echo "<input type='hidden' name='impacto' value='".$cambio->getImpacto()->getIdImpacto()."'>";
												echo "<p class='text-right'>".$cambio->getPrioridad()->getNombrePrioridad()."</p>";
												echo "<input type='hidden' name='prioridad' value='".$cambio->getPrioridad()->getIdPrioridad()."'>";
												//echo "<p class='text-right'>".$cambio->getCategoria()->getNombreCategoria()."</p>";
												//echo "<input type='hidden' name='categoria' value='".$cambio->getCategoria()->getIdCategoria()."'>";
											}
											else{
												$impactos = CommonController::obtenerDatosPara('impacto');
												echo "<select name='impacto' id='impacto' class='form-control'>";
												foreach($impactos as $impacto){
													if($impacto->getIdImpacto() == $cambio->getImpacto()->getIdImpacto()){
														echo "<option selected value=".$impacto->getIdImpacto().">";	
													}
													else{
														echo "<option value=".$impacto->getIdImpacto().">";
													}
													echo $impacto->getNombreImpacto();
													echo "</option>";
												}
												echo "</select>";
												$prioridades = CommonController::obtenerDatosPara('prioridad');
												echo "<select name='prioridad' id='prioridad' class='form-control'>";
												foreach($prioridades as $prioridad){
													if($prioridad->getIdPrioridad() == $cambio->getPrioridad()->getIdPrioridad()){
														echo "<option selected value=".$prioridad->getIdPrioridad().">";
													}
													else{
														echo "<option value=".$prioridad->getIdPrioridad().">";
													}
													echo $prioridad->getNombrePrioridad();
													echo "</option>";
												}
												echo "</select>";
												$categorias = CommonController::obtenerDatosPara('categoria');
												echo "<select name='categoria' id='categoria' class='form-control'>";
												foreach($categorias as $categoria){
													//if($categoria->getIdCategoria() != $cambio->getCategoria()->getIdCategoria()){
													//	echo "<option selected value=".$categoria->getIdCategoria().">";
													//}
													//else{
													//	echo "<option value=".$categoria->getIdCategoria().">";
													//}
													echo "<option value=".$categoria->getIdCategoria().">";
													echo $categoria->getNombreCategoria();
													echo "</option>";
												}
												echo "</select>";
											}
									
									 ?>
								</div>
								
							</div>

								<div class="row">
									<br>
									<div class="col-md-12">
										<?php if(isset($_GET['edit'])):  ?>
											<button type="submit" name="btnAceptar" class="btn btn-default pull-right buttonMargin">ACEPTAR</button>
											<button type="submit" id="btnRechazar" name="btnRechazar" class="btn btn-primary pull-right">RECHAZAR</button>
										<?php else:
										 ?>
										 	<button type="submit" name="btnAceptar" class="btn btn-default pull-right buttonMargin" disabled>ACEPTAR</button>
											<button type="submit" id="btnRechazar" name="btnRechazar" class="btn btn-primary pull-right" disabled>RECHAZAR</button>
										<?php endif ?>
									</div>
								</div>
							</form>
						</div>
					</div>					
					<?php else: 
							echo "<br><br><div class='text-center alert alert-danger'>Cambio no encontrado</div>";
							endif
					?>
					<?php
							if(isset($_POST['idCambio']) && isset($_POST['impacto']) && isset($_POST['prioridad']) && isset($_POST['categoria']) && isset($_POST['estado'])){
								if($_POST['estado'] == 'aceptado'){
									if(!OperadorController::aceptarCambio($_POST['idCambio'],$_POST['impacto'],$_POST['prioridad'],$_POST['categoria'],$nombreUsuario)){
										echo "<div class='text-center alert alert-danger'>ERROR NO SE PUDO ACEPTAR EL CAMBIO</div>";
									}
									else{
										UsuarioController::redirect("OPERADOR");
									}
								}
								else if($_POST['estado'] == 'rechazado'){
									if(!OperadorController::rechazarCambio($_POST['idCambio'])){
										echo "<div class='text-center alert alert-danger'>ERROR NO SE PUDO RECHAZAR EL CAMBIO</div>";
									}
									else{
										UsuarioController::redirect("OPERADOR");
									}
								}
							}
					?>
				</div>
			<?php 	else:
						echo "<div class='text-center alert alert-info'>NO HAY CAMBIOS</div>";
						endif
					?>
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