<?php 
	require "../Controller/AdministradorController.php";
	
	if(isset($_POST['estado'])){
		switch ($_POST['estado']) {
			case 'aprobado':
				AdministradorController::aprobarCambio($_POST['idCambio']);
				break;
			case 'anulado':
				AdministradorController::anularCambio($_POST['idCambio'],$_POST['observacion']);
				break;
			case 'cerrado':
				AdministradorController::cerrarCambio($_POST['idCambio']);
				break;
			case 'planificado':
				if(isset($_POST['fechaDeImplementacion']) && isset($_POST['asignadoA'])){
					AdministradorController::planificarCambio($_POST['idCambio'],$_POST['fechaDeImplementacion'],$_POST['asignadoA']);
				}
				break;
			default:
				break;
		}
		UsuarioController::redirect('ADMINISTRADOR');
	}

	if(isset($_GET['id'])):
		if($cambio = AdministradorController::getDetalleCambio($_GET['id'])):
?>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered">
			<thead>
				<tr>
					<h4>CAMBIO #<?php echo $cambio->getIdCambio();  ?> </h4> 
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-info">SOLICITANTE</td>
					<td><?php echo $cambio->getNombreSolicitante(); ?></td>
				</tr>	
				<tr>
					<td class="text-info">TIEMPO ESTIMADO</td>
					<td> <?php echo $cambio->getTiempoEstimado(); ?> </td>
				</tr>
				<tr>	
					<td class="text-info">VENCIMIENTO</td>
					<td> <?php echo $cambio->getFechaDeVencimiento(); ?> </td>
				</tr>
				<tr>
					<td class="text-info">EQUIPO</td>
					<td> <?php echo $cambio->getEquipo(); ?> </td>
				</tr>
				<tr>
					<td class="text-info">IMPACTO</td>
					<td> <?php echo $cambio->getImpacto()->getNombreImpacto(); ?> </td>
				</tr>
				<tr>
					<td class="text-info">PRIORIDAD</td>
					<td> <?php echo $cambio->getPrioridad()->getNombrePrioridad(); ?> </td>
				</tr>
				<tr>
					<td class="text-info">CATEGORIA</td>
					<td> <?php echo $cambio->getCategoria()->getNombreCategoria(); ?> </td>
				</tr>
			</tbody>
		</table>

	</div>		
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<br>
		<p  class="text-info">DESCRIPCION</p>
		<?php echo "<p>".$cambio->getDescripcion()."</p>"?>
		<p class="text-info">MOTIVO</p>
		<?php echo "<p>".$cambio->getMotivo()."</p>"?>
		<p class="text-info">PROPOSITO</p>
		<?php echo "<p>".$cambio->getProposito()."</p>"?>
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<?php 
			switch ($cambio->getEstado()->getNombreEstado()) {
				case 'ACEPTADO':
					include("./modalObservacion.php");
					echo "<form action=panelAdministrador.php?page=detalle method='post'>";
					echo "<input type='hidden' id='estado' name='estado' value='aprobado'>";
					echo "<input type='hidden' id='idCambio' name='idCambio' value=".$cambio->getIdCambio().">";
					#echo "<button type='submit' id='btnAnular' class='btn btn-default pull-right buttonMargin' >ANULAR</button>";
					echo "<button type='button' id='btnAnular' class='btn btn-default pull-right buttonMargin' data-toggle='modal' data-target='#myModal' data-id=".$cambio->getIdCambio().">ANULAR</button>";
					echo "<button type='submit' class='btn btn-primary pull-right'>APROBAR</button>";
					echo "</form>";
					break;
				case 'APROBADO':
					echo "<form action=panelAdministrador.php?page=detalle method='post'>";
					echo "<input type='hidden' id='estado' name='estado' value='planificado'>";
					echo "<input type='hidden' id='idCambio' name='idCambio' value=".$cambio->getIdCambio().">";
					echo "<div class='input-group'><span class='input-group-addon'><i class='fa fa-user-circle' aria-hidden='true'></i></span>";
			    	echo "<input type='text' name='asignadoA' placeholder='Encargado...' class='form-control'>";
			    	echo "</div><br>";
			    	echo "<div class='input-group'><span class='input-group-addon'><i class='fa fa-calendar' aria-hidden='true'></i></span>";
			    	echo "<input type='date' name='fechaDeImplementacion' class='form-control'>";
			    	echo "</div>";
			    	echo "<br><button type='submit' class='btn btn-primary pull-right'>CONFIRMAR</button>";
					echo "</form>";
					break;
				case 'PLANIFICADO':
					echo "<button type='button' id='btnPlanificado' class='btn btn-primary pull-right'>VOLVER</button>";
					break;
				case 'REALIZADO':
					echo "<form action=panelAdministrador.php?page=detalle method='post'>";
					echo "<input type='hidden' id='estado' name='estado' value='cerrado'>";
					echo "<input type='hidden' id='idCambio' name='idCambio' value=".$cambio->getIdCambio().">";
					echo "<button type='submit' id='btnRePlanificar' class='btn btn-default pull-right buttonMargin'>REPLANIFICAR</button>";
					echo "<button type='submit' class='btn btn-primary pull-right'>CERRAR CAMBIO</button>";
					echo "</form>";
					break;
				case 'CERRADO':
					echo "<button type='button' id='btnCerrado' class='btn btn-primary pull-right' data-dismiss='modal'>VOLVER</button>";
					break;
				default:
					break;
			}
		 ?>
	</div>
</div>
	<?php else:
	?>
	 <div class="row">
	 	<div class="col-md-10">
	 		<div class="alert alert-danger text-center">NO SE PUDO OBTENER EL CAMBIO</div>
		</div>
	</div>
	<?php endif ?>
<?php else: ?>
	<div class="row">
	 	<div class="col-md-10">
	 		<div class="alert alert-danger text-center">NO SE PUDO OBTENER EL CAMBIO</div>
		</div>
	</div>
<?php endif ?>