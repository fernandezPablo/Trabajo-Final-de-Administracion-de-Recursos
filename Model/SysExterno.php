<?php 
class SysExterno{

	private $_idSysExterno;
	private $_nombreSysExterno;


	function __construct($idSysExterno,$nombreSysExterno)
	{
		$this->_idSysExterno = $idSysExterno;
		$this->_nombreSysExterno = $nombreSysExterno;
	}

	public function getIdSysExterno(){
		return $this->_idSysExterno;
	}

	public function setIdSysExterno($idSysExterno){
		$this->_idSysExterno = $idSysExterno;
	}

	public function getNombreSysExterno(){
		return $this->_nombreSysExterno;
	}

	public function setNombreSysExterno($nombreSysExterno){
		$this->_nombreSysExterno = $nombreSysExterno;
	}

}


 ?>