<?php 

class Cambio{

	private $_idCambio;
	private $_descripcion;
	private $_motivo;
	private $_proposito;
	private $_tiempoEstimado;
	private $_nombreSolicitante;
	private $_fechaDeVencimiento;
	private $_fechaDeImplementacion;
	private $_asignadoA;
	private $_equipo;
	private $_observacion;
	private $_categoria;
	private $_impacto;
	private $_estado;
	private $_prioridad;
	private $_sysExterno;
	private $_usuario;


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
		return $this->_idCambio;
	}

	public function setIdCambio($idCambio){
		$this->_idCambio = $idCambio;
		return $this;
	}

	public function getDescripcion(){
		return $this->_descripcion;
	}

	public function setDescripcion($descripcion){
		$this->_descripcion = $descripcion;
		return $this;
	}

	public function getMotivo(){
		return $this->_motivo;
	}

	public function setMotivo($motivo){
		$this->_motivo = $motivo;
		return $this;
	}

	public function getProposito(){
		return $this->_proposito;
	}

	public function setProposito($proposito){
		$this->_proposito = $proposito;
		return $this;
	}

	public function getTiempoEstimado(){
		return $this->_tiempoEstimado;
	}

	public function setTiempoEstimado($tiempoEstimado){
		$this->_tiempoEstimado = $tiempoEstimado;
		return $this;
	}

	public function getNombreSolicitante(){
		return $this->_nombreSolicitante;
	}

	public function setNombreSolicitante($nombreSolicitante){
		$this->_nombreSolicitante = $nombreSolicitante;
		return $this;
	}

	public function getFechaDeVencimiento(){
		return $this->_fechaDeVencimiento;
	}

	public function setFechaDeVencimiento($fechaDeVencimiento){
		$this->_fechaDeVencimiento = $fechaDeVencimiento;
		return $this;
	}

	public function getFechaDeImplementacion(){
		return $this->_fechaDeImplementacion;
	}

	public function setFechaDeImplementacion($fechaDeImplementacion){
		$this->_fechaDeImplementacion = $fechaDeImplementacion;
		return $this;
	}

	public function getAsignadoA(){
		return $this->_asignadoA;
	}

	public function setAsignadoA($asignadoA){
		$this->_asignadoA = $asignadoA;
		return $this;
	}

	public function getEquipo(){
		return $this->_equipo;
	}

	public function setEquipo($equipo){
		$this->_equipo = $equipo;
		return $this;
	}

	public function getObservacion(){
		return $this->_observacion;
	}

	public function setObservacion($observacion){
		$this->_observacion = $observacion;
		return $this;
	}

	public function getCategoria(){
		return $this->_categoria;
	}

	public function setCategoria($categoria){
		$this->_categoria = $categoria;
		return $this;
	}

	public function getImpacto(){
		return $this->_impacto;
	}

	public function setImpacto($impacto){
		$this->_impacto = $impacto;
		return $this;
	}	

	public function getEstado(){
		return $this->_estado;
	}

	public function setEstado($estado){
		$this->_estado = $estado;
		return $this;
	}

	public function getPrioridad(){
		return $this->_prioridad;
	}

	public function setPrioridad($prioridad){
		$this->_prioridad = $prioridad;
		return $this;
	}

	public function getSysExterno(){
		return $this->_sysExterno;
	}

	public function setSysExterno($sysExterno){
		$this->_sysExterno = $sysExterno;
		return $this;
	}

	public function getUsuario(){
		return $this->_usuario;
	}

	public function setUsuario($usuario){
		$this->_usuario = $usuario;
		return $this;
	}
}
?>