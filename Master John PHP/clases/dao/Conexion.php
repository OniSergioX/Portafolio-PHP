<?php  
class Conexion{

	/**
	 * @var mysqli
	 */
	private static $conexion; 
	private static $host = "localhost";
	private static $user = "root";
	private static $password = "";
	private static $database = "master_john";
	
	public static function getConexion(){
		if (Conexion::$conexion == null || !Conexion::$conexion->ping()) {
			Conexion::$conexion = new mysqli(Conexion::$host, Conexion::$user, Conexion::$password, Conexion::$database);
			mysqli_set_charset(Conexion::$conexion,"utf8");
		}
		return Conexion::$conexion;
	}
}
?>	