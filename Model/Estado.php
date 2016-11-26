<?php 
class Estado{

	private $_idEstado;
	private $_nombreEstado;


	function __construct($idEstado,$nombreEstado)
	{
		$this->_idEstado = $idEstado;
		$this->_nombreEstado = $nombreEstado;
	}

	public function getIdEstado(){
		return $this->_idEstado;
	}

	public function setIdEstado($idEstado){
		$this->_idEstado = $idEstado;
	}

	public function getNombreEstado(){
		return $this->_nombreEstado;
	}

	public function setNombreEstado($nombreEstado){
		$this->_nombreEstado = $nombreEstado;
	}

}


 ?>