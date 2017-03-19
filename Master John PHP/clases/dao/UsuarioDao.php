<?php  
require_once "dao.php";
require_once "../modelo/Usuario.php";

class UsuarioDao implements dao
{
	private $conexion
	const SQL_INSERT = "CALL {nombre procedimiento almacenado} ({parametros})"; 
	const SQL_SELECT = "SELECT * FROM USUARIO WHERE rut = ?";
	const SQL_UPDATE = "CALL {nombre procedimiento almacenado} ({parametros})";
	const SQL_DELETE = "CALL {nombre procedimiento almacenado} ({parametros})";

	function __construct($_conexion)
	{
		$this->conexion = $_conexion;
	}


	function crear($registro){
		$datos = array("rut"=>$registro->getRut(),"nombre"=>$registro->getNombre(),"apellidoP"=>$registro->getApellidoP(),"apellidoM"=>$registro->getApellidoM());
		$statement = $this->conexion->prepare(self::SQL_INSERT);
		$statement->bind_param("isss",$datos["rut"],$datos["nombre"],$datos["apellidoP"],$datos["apellidoM"]);
		$statement->execute();
		$statement->close();
		$this->conexion->close();
	}

	function buscar($registro){}
	function actualizar($registro){}
	function eliminar($registro){} 
}



?>