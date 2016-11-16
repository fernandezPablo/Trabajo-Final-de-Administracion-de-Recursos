<?php 

class Perfil{

	private $idPerfil;
	private $nombrePerfil;

	function __construct($idPerfil,$nombrePerfil){
		$this->idPerfil = $idPerfil;
		$this->nombrePerfil = $nombrePerfil;
	}

	public function getIdPerfil(){
		return $this->idPerfil;
	}

	public function setIdPerfil($idPerfil){
		$this->idPerfil = $idPerfil;
	}

	public function getNombrePerfil(){
		return $this->nombrePerfil;	
	}

	public function setNombrePerfil($nombrePerfil){
		$this->nombrePerfil = $nombrePerfil;
	}

}

 ?>