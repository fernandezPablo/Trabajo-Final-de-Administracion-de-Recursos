<?php 
class SeguimientoCambio{
	
	private $_idSegCambio;
	private $_fechaCambioEstado;
	private $_cambio;
	private $_estado;

	function __construct()
	{}

	public static function create(){
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

	public function setFechaCambioEstado($fechaCambioEstado){
		$this->_fechaCambioEstado = $fechaCambioEstado;
		return $this;
	}

	public function getCambio(){
		return $this->_cambio;
	}

	public function setCambio($cambio){
		$this->_cambio = $cambio;
		return $this;
	}

	public function getEstado(){
		return $this->_estado;
	}

	public function setEstado($estado){
		$this->_estado = $estado;
		return $this;
	}

}

 ?>