<?php 
class SeguimientoCambio{
	
	private $idSegCambio;
	private $fechaCambioEstado;
	private $cambio;
	private $estado;

	function __construct()
	{}

	public function static create(){
		$instance = new self();
		return $instance;
	} 

	public function getIdSegCambio(){
		return $this->idSegCambio;
	}

	public function setIdSegCambio($idSegCambio){
		$this->SeguimientoCambio = $idSegCambio;
	}
	public function getFechaCambioEstado(){
		return $this->fechaCambioEstado;
	}

	public function setFechaCambioEstado(){
		$this->fechaCambioEstado;
		return $this;
	}

	public function getCambio(){
		return $this->cambio;
	}

	public function setCambio($cambio){
		$this->getCambio;
		return $this;
	}

	public function getEstado(){
		return $this->estado;
	}

	public fucntion setEstado($estado){
		$this->estado = $estado;
		return $this;
	}

}

 ?>