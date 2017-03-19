<?php  

/**
* 
*/
class Usuario 
{
	private $rut,$nombre,$apellidoP,$apellidoM; 
	
	function __construct($_rut,$_nombre,$_apellidoP,$_apellidoM){
		$this->rut = $_rut;
		$this->nombre = $_nombre;
		$this->apellidoP = $_apellidoP;
		$this->apellidoM = $_apellidoM;		
	}

	function getRut(){
		return $this->rut;
	}

	function setRut($_rut){
		$this->rut = $_rut;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setNombre($_nombre){
		$this->nombre = $_nombre;
	}

	function setApellidoP($_apellidoP){
		$this->apellidoP = $_apellidoP;
	} 

	function getApellidoM(){
		return $this->apellidoP;
	}

	function setApellidoM($_apellidoM){
		$this->apellidoM = $_apellidoM;
	}
}


?>