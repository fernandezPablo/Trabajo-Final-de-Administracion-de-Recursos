<?php 
	require_once "../Controller/AdministradorController.php";

	const ESTADO_CERRADO = "8";
	const ESTADO_APROBADO = "4";
 ?>

<div class="container-fluid">

				<div class="row">
					<p id="title" name="informe"><b>INFORME</b></p>
					<p>Seleccione un mes para obtener información acerca de los cambios </p>
					<form action="./panelAdministrador.php?page=informe" method="POST" role="form" class="form-horizontal">
					
						<div class="form-group">
							
							<div class="col-md-4">
								<select name="lista" id="input" class="form-control" required="required">
									<option value"">--Seleccione un mes--</option>
									<option value="01">Enero</option>
									<option value="02">Febrero</option>
									<option value="03">Marzo</option>
									<option value="04">Abril</option>
									<option value="05">Mayo</option>
									<option value="06">Junio</option>
									<option value="07">Julio</option>
									<option value="08">Agosto</option>
									<option value="09">Septiembre</option>
									<option value="10">Octubre</option>
									<option value="11">Noviembre</option>
									<option value="12">Diciembre</option>
								</select>
							</div>

							<div class="col-md-2">
								<button type="submit" class="btn btn-primary">GENERAR</button>
							</div>
						</div>	
					</form>

				</div>
				<hr>

				<?php if(isset($_POST['lista'])) { 

					$arrayCambiosCerrados = AdministradorController::historial($_POST['lista'], ESTADO_CERRADO);
					$arrayCambiosAprobados = AdministradorController::historial($_POST['lista'], ESTADO_APROBADO);
				?>

				<div class="row">
				  	
					<p><b>CAMBIOS CERRADOS:</b> <?php echo count($arrayCambiosCerrados); ?></p>

					<div class="panel panel-default">
							<table class="table  table-condensed">
								<thead>
									<tr>
										<th class="small">ID</th>
										
										<th class="small">SOLICITANTE</th>
										<th class="small">ORIGEN</th>
										<th class="small">PRIORIDAD</th>
										<th class="small">IMPACTO</th>
										<th class="small">FECHA CERRADO</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($arrayCambiosCerrados as $seguimiento) { ?>
									<tr>
										<td><?php echo $seguimiento->getCambio()->getIdCambio();?></td>
										
										<td><?php echo $seguimiento->getCambio()->getNombreSolicitante(); ?></td>
										<td><?php echo $seguimiento->getCambio()->getSysExterno()->getNombreSysExterno();?></td>
										<td><?php echo $seguimiento->getCambio()->getPrioridad()->getNombrePrioridad(); ?></td>
										<td><?php echo $seguimiento->getCambio()->getImpacto()->getNombreImpacto(); ?></td>
										<td><?php echo $seguimiento->getFechaCambioEstado(); ?></td>
									</tr>

									<?php } ?>
							</table>
					</div>
				</div>

				<div class="row">

					<p><b>CAMBIOS APROBADOS:</b> <?php echo count($arrayCambiosAprobados); ?></p>

					<div class="panel panel-default">
							<table class="table  table-condensed">
								<thead>
									<tr>
										<th class="small">ID</th>
										
										<th class="small">SOLICITANTE</th>
										<th class="small">ORIGEN</th>
										<th class="small">PRIORIDAD</th>
										<th class="small">IMPACTO</th>
										<th class="small">FECHA APROBADO</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($arrayCambiosAprobados as $seguimiento) { ?>
									<tr>
										<td><?php echo $seguimiento->getCambio()->getIdCambio();?></td>
										
										<td><?php echo $seguimiento->getCambio()->getNombreSolicitante(); ?></td>
										<td><?php echo $seguimiento->getCambio()->getSysExterno()->getNombreSysExterno();?></td>
										<td><?php echo $seguimiento->getCambio()->getPrioridad()->getNombrePrioridad(); ?></td>
										<td><?php echo $seguimiento->getCambio()->getImpacto()->getNombreImpacto(); ?></td>
										<td><?php echo $seguimiento->getFechaCambioEstado(); ?></td>
									</tr>

									<?php } ?>
									
							</table>
					</div>
				</div>
				<?php } ?>

</div>