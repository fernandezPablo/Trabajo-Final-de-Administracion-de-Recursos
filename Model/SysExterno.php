<?php 
class SysExterno{

	private $idSysExterno;
	private $nombreSysExterno;


	function __construct($idSysExterno,$nombreSysExterno)
	{
		$this->idSysExterno = $idSysExterno;
		$this->nombreSysExterno = $nombreSysExterno;
	}

	public function getIdSysExterno(){
		return $this->idSysExterno;
	}

	public function setIdSysExterno($idSysExterno){
		$this->idSysExterno = $idSysExterno;
	}

	public function getNombreSysExterno(){
		return $this->nombreSysExterno;
	}

	public function setNombreSysExterno($nombreSysExterno){
		$this->nombreSysExterno = $nombreSysExterno;
	}

}


 ?>