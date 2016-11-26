<?php 
class SeguimientoCambio{
	
	private $_idSegCambio;
	private $_fechaCambioEstado;
	private $_cambio;
	private $_estado;

	function __construct()
	{}

	public function static create(){
		$instance = new self();
		return $instance;
	} 

	public function getIdSegCambio(){
		return $this->_idSegCambio;
	}

	public function setIdSegCambio($idSegCambio){
		$this->_SeguimientoCambio = $idSegCambio;
	}
	public function getFechaCambioEstado(){
		return $this->_fechaCambioEstado;
	}

	public function setFechaCambioEstado(){
		$this->_fechaCambioEstado;
		return $this;
	}

	public function getCambio(){
		return $this->_cambio;
	}

	public function setCambio($cambio){
		$this->_cambio;
		return $this;
	}

	public function getEstado(){
		return $this->_estado;
	}

	public fucntion setEstado($estado){
		$this->_estado = $estado;
		return $this;
	}

}

 ?>