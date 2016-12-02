<?php 
	require_once "../Controller/AdministradorController.php";
 ?>

<p id="title" name="historial">HISTORIAL</p>
<hr>
<div class="row">
	<div class="col-md-12">

		<form class="form-horizontal" action="./panelAdministrador.php?page=historial" method="POST" role="form">

			<div class="form-group">

				<div class="col-md-4">
					<input type="text" name="buscar" class="form-control" id="buscar" placeholder="Introducir id de cambio">
				</div>

				<div class="col-md-2">
					<button type="submit" class="btn btn-primary ">BUSCAR</button>
				</div>
			</div>
									
		</form>

	</div>
</div> <!--ROW-->
					
<?php  
	if(isset($_POST['buscar'])) {
		if ($cambio = AdministradorController::infoDeCambio($_POST['buscar'])) {
		
			$seguimientoCambio = AdministradorController::seguimientoCambio($_POST['buscar']);
		
		
?>
		<div class="row"> <!--RESULTADOS-->
			<div class="col-md-12">
				<div class="panel panel-default paddingLateral ">
					<div class="panel-body">
						<?php echo "<p> <b>SOLICITANTE:</b> ".$cambio[0]->getNombreSolicitante()."</p>"; ?>
						
						<?php  echo "<p> <b>ORIGEN: </b> ".$cambio[0]->getSysExterno()->getNombreSysExterno()."</p>";?>
						
						<?php echo "<p><b>PRIORIDAD: </b>".$cambio[0]->getPrioridad()->getNombrePrioridad()."</p>"; ?>
												
						<br>

						<table class="table table-hover table-condensed table-bordered ">
							<thead>
								<tr>
									<th class="text-center small">FECHA	</th>
									<th class="text-center small">ESTADO</th>

								</tr>
							</thead>
							<tbody>	

							<?php foreach ($seguimientoCambio as $seguimiento) { ?>			
								<tr>
									<td class="text-center"><?php echo $seguimiento->getFechaCambioEstado(); ?></td>
									<td class="text-center"><?php echo $seguimiento->getEstado()->getNombreEstado(); ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

<?php 
		}
	}	 
?>