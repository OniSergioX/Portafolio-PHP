<?php 
require_once "dao.php";
require_once "../modelo/Cuenta.php";


class CuentaDao implements dao{
	
	private $conexion;
	const SQL_INSERT = "SELECT crear_cuenta(?, ?, ?, 1, 1)"; //=> Mysqli /PDO
	const SQL_SELECT = "CALL obtener_cuenta(?,?)";
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
		$statement->bind_result($resultado);
		return $resultado;
	}

	function buscar($_registro){

		$datos = array("username"=>$_registro->getUsername(), "clave"=>$_registro->getPassword());
		$statement = $this->conexion->prepare(self::SQL_SELECT);
		$statement->bind_param("ss",$datos["username"], $datos["clave"]);
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

	/**
	* Metodo Para Cerrar el statement Existente y la conexion
	* @param conexion
	* @param statement
	*/
	function CerrarConexionMysqli($conexion, $statement){
		$statement->close();
		$conexion->close();
	}

}

?>