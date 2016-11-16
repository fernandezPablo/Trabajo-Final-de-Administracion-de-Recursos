<?php 
class Estado{

	private $idEstado;
	private $nombreEstado;


	function __construct($idEstado,$nombreEstado)
	{
		$this->idEstado = $idEstado;
		$this->nombreEstado = $nombreEstado;
	}

	public function getIdEstado(){
		return $this->idEstado;
	}

	public function setIdEstado($idEstado){
		$this->idEstado = $idEstado;
	}

	public function getNombreEstado(){
		return $this->nombreEstado;
	}

	public function setNombreEstado($nombreEstado){
		$this->nombreEstado = $nombreEstado;
	}

}


 ?>