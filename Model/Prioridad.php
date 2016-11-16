<?php 
class Prioridad{

	private $idPrioridad;
	private $nombrePrioridad;


	function __construct($idPrioridad,$nombrePrioridad)
	{
		$this->idPrioridad = $idPrioridad;
		$this->nombrePrioridad = $nombrePrioridad;
	}

	public function getIdPrioridad(){
		return $this->idPrioridad;
	}

	public function setIdPrioridad($idPrioridad){
		$this->idPrioridad = $idPrioridad;
	}

	public function getNombrePrioridad(){
		return $this->nombrePrioridad;
	}

	public function setNombrePrioridad($nombrePrioridad){
		$this->nombrePrioridad = $nombrePrioridad;
	}

}

 ?>