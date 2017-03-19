<?php  
class Producto
{
	private $id,$nombre,$descripcion,$tipo,$ruta;
	
	function __construct($_id,$_nombre,$_descripcion,$_tipo,$_ruta)
	{
		$this->id = $_id;
		$this->nombre = $_nombre;
		$this->descripcion = $_descripcion;
		$this->tipo = $_tipo;
		$this->ruta = $_ruta;
	}

	function getId(){
		return $this->id;
	}

	function setId($_id){
		$this->id = $_id;
	}

	function getNombre(){
		return $this->nombre;
	}

	function setNombre($_nombre){
		$this->nombre = $_nombre;
	}

	function getDescripcion(){
		return $this->descripcion;
	}

	function setDescripcion($_descripcion){
		$this->descripcion = $_descripcion;
	}

	function getTipo(){
		return $this->tipo;
	}

	function setTipo($_tipo){
		$this->tipo = $_tipo;
	}

	function getRuta(){
		return $this->ruta;
	}

	function setRuta($_ruta){
		$this->ruta = $_ruta;
	}

}
?>