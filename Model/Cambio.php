<?php 

class Cambio{

	private $idCambio;
	private $descripcion;
	private $motivo;
	private $proposito;
	private $tiempoEstimado;
	private $nombreSolicitante;
	private $fechaDeVencimiento;
	private $fechaDeImplementacion;
	private $asignadoA;
	private $observacion;
	private $categoria;
	private $impacto;
	private $estado;
	private $prioridad;
	private $sysExterno;
	private $usuario;


	function __construct()
	{
	}

	/*
		Sirve para crear objetos de esta clase con asignacion 
		de solo algunos atributos. Para esto se hace un 
		encadenado de metodos setters.
	*/
	public static function create(){
		$instance = new self();
		return $instance;
	}

	public function getIdCambio(){
		return $this->idCambio;
	}

	public function setIdCambio($idCambio){
		$this->idCambio = $idCambio;
		return $this;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
		return $this;
	}

	public function getMotivo(){
		return $this->motivo;
	}

	public function setMotivo($motivo){
		$this->motivo = $motivo;
		return $this;
	}

	public function getProposito(){
		return $this->proposito;
	}

	public function setProposito($proposito){
		$this->proposito = $proposito;
		return $this;
	}

	public function getTiempoEstimado(){
		return $this->tiempoEstimado;
	}

	public function setTiempoEstimado($tiempoEstimado){
		$this->tiempoEstimado = $tiempoEstimado;
		return $this;
	}

	public function getNombreSolicitante(){
		return $this->nombreSolicitante;
	}

	public function setNombreSolicitante($nombreSolicitante){
		$this->nombreSolicitante = $nombreSolicitante;
		return $this;
	}

	public function getFechaDeVencimiento(){
		return $this->fechaDeVencimiento;
	}

	public function setFechaDeVencimiento($fechaDeVencimiento){
		$this->fechaDeVencimiento = $fechaDeVencimiento;
		return $this;
	}

	public function getFechaDeImplementacion(){
		return $this->fechaDeImplementacion;
	}

	public function setFechaDeImplementacion($fechaDeImplementacion){
		$this->fechaDeImplementacion = $fechaDeImplementacion;
		return $this;
	}

	public function getAsignadoA(){
		return $this->asignadoA;
	}

	public function setAsignadoA($asignadoA){
		$this->asignadoA = $asignadoA;
		return $this;
	}

	public function getObservacion(){
		return $this->observacion;
	}

	public function setObservacion($observacion){
		$this->observacion = $observacion;
		return $this;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria($categoria){
		$this->categoria = $categoria;
		return $this;
	}

	public function getImpacto(){
		return $this->impacto;
	}

	public function setImpacto($impacto){
		$this->impacto = $impacto;
		return $this;
	}	

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
		return $this;
	}

	public function getPrioridad(){
		return $this->prioridad;
	}

	public function setPrioridad($prioridad){
		$this->prioridad = $prioridad;
		return $this;
	}

	public function getSysExterno(){
		return $this->sysExterno;
	}

	public function setSysExterno($sysExterno){
		$this->sysExterno = $sysExterno;
		return $this;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
		return $this;
	}
}
?>