<?php 
	require("../Controller/AdministradorController.php");

	if(isset($_GET['estado'])){
		switch ($_GET['estado']) {
			case 'aceptado':
				echo "<p id='title' name='aceptado'>CAMBIOS ACEPTADOS</p>";
				$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_ACEPTADOS);
				break;
			case 'aprobado':
				echo "<p id='title' name='aprobado'>CAMBIOS APROBADOS</p>";
				$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_APROBADOS);
				break;
			case 'planificado':
				echo "<p id='title' name='planificado'>CAMBIOS PLANIFICADOS</p>";
				$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_PLANIFICADOS);
				break;
			case 'realizado':
				echo "<p id='title' name='realizado'>CAMBIOS REALIZADOS</p>";
				$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_REALIZADOS);
				break;
			case 'cerrado':
				echo "<p id='title' name='cerrado'>CAMBIOS CERRADOS</p>";
				$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_CERRADOS);
				break;
			default:
				echo "<p id='title' name='aceptado'>CAMBIOS ACEPTADOS</p>";
				$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_ACEPTADOS);
				break;
		}
	}
	if(count($arrayCambios)>0){

 ?>
		<table class="table table-hover panel-default panel">
			<thead>
				<tr>
					<th class="text-center small">ID</th>
					<th class="small">FECHA DE VENCIMIENTO</th>
					<th class="small">SOLICITANTE</th>
					<th class="small">ORIGEN</th>
					<th class="small">CATEGORIA</th>
					<th class="small">PRIORIDAD</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

<?php 	
			$arraySize = count($arrayCambios);
			for($i=0;$i<$arraySize;$i++){
				echo "<tr class='fila'>";
				echo "<td>".$arrayCambios[$i]->getIdCambio()."</td>";
				echo "<td>".$arrayCambios[$i]->getFechaDeVencimiento()."</td>";
				echo "<td>".$arrayCambios[$i]->getNombreSolicitante()."</td>";
				echo "<td>".$arrayCambios[$i]->getSysExterno()->getNombreSysExterno()."</td>";
				echo "<td>".$arrayCambios[$i]->getCategoria()->getNombreCategoria()."</td>";
				echo "<td>".$arrayCambios[$i]->getPrioridad()->getNombrePrioridad()."</td>";
				echo "<td><a href='#myModal' data-toggle='modal'>Detalles</a></td>";		
				echo "</tr>";
			}
			echo "</tbody></table>";
	}
	else{
		echo "<div class='text-center alert alert-info'>NO HAY CAMBIOS</div>";
		}
?>
<?php 
	include("./modalDialog.php");
 ?>
