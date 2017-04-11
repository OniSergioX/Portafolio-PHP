<?php 
require_once "dao.php";
require_once "../modelo/Cuenta.php";

class CuentaDao implements dao{
	
	private $conexion;
	const SQL_INSERT = "CALL crear_cuenta(?,?,?,?)";
	const SQL_SELECT = "CALL obtener_usuario(?,?)";
	const SQL_UPDATE = "CALL {nombre procedimiento} ({parametros})";
	const SQL_DELETE = "CALL {nombre procedimiento} ({parametros})";

	function __construct($_conexion){
		$this->conexion = $_conexion;		
	}

	function crear($_registro){

		$datos = array("rut"=>$_registro->getRut(),
					   "username"=>$_registro->getUsername(),
					   "password"=>$_registro->getPassword(),
					   "nivel"=>$_registro->getNivel());

		$statement = $this->conexion->prepare(self::SQL_INSERT);
		$statement->bind_param("isss",$datos["rut"],$datos["username"],$datos["password"],$datos["nivel"]);
		$statement->execute();
		$statement->close();
		$this->conexion->close();
		return $statement->affected_rows ==1;
	}

	function buscar($_registro){

		$datos = array("rut"=>$registro->getRut(), "clave"=>$registro->getClave());
		$statement = $this->conexion->prepare(self::SQL_SELECT);
		$statement->bind_param("is",$datos["rut"], $datos["clave"]);
		$statement->execute();
		$statement->bind_result($rut, $username, $pass, $nivel);
		// $cuenta = "";
		while ($statement->fetch()) {
			$cuenta = new Cuenta($rut, $username, $pass, $nivel);
		}
		$statement->close();
		$this->conexion->close();
		return $cuenta;
	}

	function actualizar($_registro){}
	function eliminar($_registro){} 
}



?>