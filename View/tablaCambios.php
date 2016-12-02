<?php 
	require_once "../Controller/AdministradorController.php";

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
				AdministradorController::comprobarPlanificados();
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
	else{
		echo "<p id='title' name='aceptado'>CAMBIOS ACEPTADOS</p>";
		$arrayCambios = AdministradorController::getCambios(AdministradorController::CAMBIOS_ACEPTADOS);
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
			foreach($arrayCambios as $cambio){
				echo "<tr class='fila'>";
				echo "<td>".$cambio->getIdCambio()."</td>";
				echo "<td>".$cambio->getFechaDeVencimiento()."</td>";
				echo "<td>".$cambio->getNombreSolicitante()."</td>";
				echo "<td>".$cambio->getSysExterno()->getNombreSysExterno()."</td>";
				echo "<td>".$cambio->getCategoria()->getNombreCategoria()."</td>";
				echo "<td>".$cambio->getPrioridad()->getNombrePrioridad()."</td>";
				echo "<td><a href='panelAdministrador.php?page=detalle&id=".$cambio->getIdCambio()."'>Detalles</a></td>";		
				
				echo "</tr>";
			}
			echo "</tbody></table>";
	}
	else{
		echo "<div class='text-center alert alert-info'>NO HAY CAMBIOS</div>";
		}
?>
<?php 
	#include("./modalDialog.php");
 ?>
