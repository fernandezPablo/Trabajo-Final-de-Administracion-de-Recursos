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
		//$cambio = AdministradorController::getCambios($_POST['buscar']);
?>
		<div class="row"> <!--RESULTADOS-->
			<div class="col-md-12">
				<div class="panel panel-default paddingLateral ">
					<div class="panel-body">
						<?php //echo "<p>SOLICITANTE:</p>$cambio->getSysExterno()->getNombre()" ?>
						
						<p>ORIGEN:</p>
						<p>PRIORIDAD:</p>
												
						<br>

						<table class="table table-hover table-condensed table-bordered ">
							<thead>
								<tr>
									<th class="text-center small"	</th>
									<th class="text-center small">ESTADO</th>

								</tr>
							</thead>
							<tbody>				
								<tr>
									<td class="text-center">30/10/16</td>
									<td class="text-center">APROBADO</td>
								</tr>
								<tr>
									<td class="text-center">30/10/16</td>
									<td class="text-center">APROBADO</td>
								</tr>
								<tr>
									<td class="text-center">30/10/16</td>
									<td class="text-center">APROBADO</td>
								</tr>
								<tr>
									<td class="text-center">30/10/16</td>
									<td class="text-center">APROBADO</td>
								</tr>
								<tr>
									<td class="text-center">30/10/16</td>
									<td class="text-center">APROBADO</td>
								</tr>
								<tr>
									<td class="text-center">30/10/16</td>
									<td class="text-center">APROBADO</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

<?php 
	}	 
?>