<?php 

class Perfil{

	private $_idPerfil;
	private $_nombrePerfil;

	function __construct($idPerfil,$nombrePerfil){
		$this->_idPerfil = $idPerfil;
		$this->_nombrePerfil = $nombrePerfil;
	}

	public function getIdPerfil(){
		return $this->_idPerfil;
	}

	public function setIdPerfil($idPerfil){
		$this->_idPerfil = $idPerfil;
	}

	public function getNombrePerfil(){
		return $this->_nombrePerfil;	
	}

	public function setNombrePerfil($nombrePerfil){
		$this->_nombrePerfil = $nombrePerfil;
	}

}

 ?>