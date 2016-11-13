<?php 
	if(isset($_GET['estado'])){
		switch ($_GET['estado']) {
			case 'aceptado':
				echo "<p id='title' name='aceptado'>CAMBIOS ACEPTADOS</p>";
				break;
			case 'aprobado':
				echo "<p id='title' name='aprobado'>CAMBIOS APROBADOS</p>";
				break;
			case 'planificado':
				echo "<p id='title' name='planificado'>CAMBIOS PLANIFICADOS</p>";
				break;
			case 'realizado':
				echo "<p id='title' name='realizado'>CAMBIOS REALIZADOS</p>";
				break;
			case 'cerrado':
				echo "<p id='title' name='cerrado'>CAMBIOS CERRADOS</p>";
				break;
			default:
				echo "<p id='title' name='aceptado'>CAMBIOS ACEPTADOS</p>";
				break;
		}
	}

 ?>

<table class="table table-hover panel-default panel">
	<thead>
		<tr>
			<th class="text-center small">ID</th>
			<th class="small">FECHA DE SOLICITUD</th>
			<th class="small">FECHA DE VENCIMIENTO</th>
			<th class="small">SOLICITANTE</th>
			<th class="small">ORIGEN</th>
			<th class="small">CATEGORIA</th>
			<th class="small">PRIORIDAD</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>
				<a href="#myModal" data-toggle="modal">Detalles</a>
			</td>
		</tr>

		<tr>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>Probando</td>
			<td>
				<a href="#myModal" data-toggle="modal">Detalles</a>
			</td>
		</tr>				
	</tbody>
</table>

<?php 
	include("./modalDialog.php");
 ?>
