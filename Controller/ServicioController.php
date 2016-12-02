<?php 
	
require_once "../Service/GestionDB.php";
require_once "../Model/Cambio.php";
require_once "../Model/Impacto.php";
require_once "../Model/Prioridad.php";
require_once "../Model/Estado.php";

class ServicioController {

	public static function insertarPeticion($peticion) {
		switch ($peticion['idPrioridad']) {
			case '1':
				$nombrePrioridad = "BAJA";
				break;
			case '2':
				$nombrePrioridad = "MEDIA";
				break;
			case '3':
				$nombrePrioridad = "ALTA";
				break;
			case '4':
				$nombrePrioridad = "URGENTE";
				break;
		}

		switch ($peticion['idImpacto']) {
			case '1':
				$nombreImpacto = "BAJO";
				break;
			case '2':
				$nombreImpacto = "MEDIO";
				break;
			case '3':
				$nombreImpacto = "ALTO";
				break;
		}


		$cambio = Cambio::create()
					->setDescripcion($peticion['descripcion'])
					->setMotivo($peticion['motivo'])
					->setProposito($peticion['proposito'])
					->setTiempoEstimado($peticion['tiempoEstimado'])
					->setNombreSolicitante($peticion['nombreSolicitante'])
					->setFechaDeVencimiento($peticion['fechaDeVencimiento'])
					->setEquipo($peticion['equipo'])
					->setImpacto(new Impacto($peticion['idImpacto'], $nombreImpacto))
					->setPrioridad(new Prioridad($peticion['idPrioridad'], $nombrePrioridad))
					->setEstado(new Estado("1", "PETICION"))
					->setSysExterno(new SysExterno("1", "PROYECTOS"));

		$db = GestionDB::getInstance();
		
		return $db->altaCambio($cambio);
	}
}
?>