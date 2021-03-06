<?php 
require_once "dao.php";
require_once "../modelo/Usuario.php";

class UsuarioDao implements dao{

	private $conexion;
	const SQL_INSERT = "CALL crear_usuario(?,?,?,?,?,?)"; 
	const SQL_SELECT = "SELECT * FROM USUARIO WHERE rut = ?";
	const SQL_UPDATE = "CALL {nombre procedimiento almacenado} ({parametros})";
	const SQL_DELETE = "CALL {nombre procedimiento almacenado} ({parametros})";

	function __construct($_conexion){		
		$this->conexion = $_conexion;
	}

	function crear($_registro){

		$datos = array("rut"=>$_registro->getRut(),
					   "nombre"=>$_registro->getNombre(),
					   "apellidoP"=>$_registro->getApellidoP(),
					   "apellidoM"=>$_registro->getApellidoM(),
					   "direccion"=>$_registro->getDireccion(),
					   "email"=>$_registro->getEmail());

		$statement = $this->conexion->prepare(self::SQL_INSERT);
		$statement->bind_param("sssss",$datos["rut"],$datos["nombre"],$datos["apellidoP"],$datos["apellidoM"],$datos["direccion"],$datos["email"]);
		$statement->execute();
		$statement->close();
		$this->conexion->close();
	}

	function buscar($_registro){}
	function actualizar($_registro){}
	function eliminar($_registro){} 
}



?>