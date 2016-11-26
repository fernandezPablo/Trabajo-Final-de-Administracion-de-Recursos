<?php 
class Prioridad{

	private $_idPrioridad;
	private $_nombrePrioridad;


	function __construct($idPrioridad,$nombrePrioridad)
	{
		$this->_idPrioridad = $idPrioridad;
		$this->_nombrePrioridad = $nombrePrioridad;
	}

	public function getIdPrioridad(){
		return $this->_idPrioridad;
	}

	public function setIdPrioridad($idPrioridad){
		$this->_idPrioridad = $idPrioridad;
	}

	public function getNombrePrioridad(){
		return $this->_nombrePrioridad;
	}

	public function setNombrePrioridad($nombrePrioridad){
		$this->_nombrePrioridad = $nombrePrioridad;
	}

}

 ?>