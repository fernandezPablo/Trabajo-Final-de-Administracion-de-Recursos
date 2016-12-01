<?php 
	require_once "../Controller/AdministradorController.php";
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

					$arrayCambiosCerrados = AdministradorController::cambiosCerrados($_POST['lista']);
				?>

				<div class="row">
				  	
					<p>CAMBIOS CERRADOS:XX </p>

					<div class="panel panel-default">
							<table class="table  table-condensed">
								<thead>
									<tr>
										<th>ID</th>
										<th>FECHA SOLICITUD</th>
										<th>SOLICITANTE</th>
										<th>ORIGEN</th>
										<th>PRIORIDAD</th>
										<th>IMPACTO</th>
										<th>FECHA CERRADO</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($arrayCambiosCerrados as $seguimiento) { ?>
									<tr>
										<td><?php echo $seguimiento->getCambio()->getIdCambio();?></td>
										<td>dato1</td>
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
					<p>CAMBIOS APROBADOS: XX</p>

					<div class="panel panel-default">
							<table class="table  table-condensed">
								<thead>
									<tr>
										<th>ID</th>
										<th>FECHA SOLICITUD</th>
										<th>SOLICITANTE</th>
										<th>ORIGEN</th>
										<th>PRIORIDAD</th>
										<th>IMPACTO</th>
										<th>APROBADO POR</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
									</tr>
									<tr>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
										<td>dato1</td>
									</tr>
							</table>
					</div>
				</div>
				<?php } ?>

</div>