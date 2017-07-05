<?php  
class Conexion{

	/**
	 * @var mysqli
	 */
	private static $conexion; 
	private static $server = "localhost";
	private static $user = "root";
	private static $password = "";
	private static $database = "master_john";

	
	
	public static function getConexionPDO(){

		if (Conexion::$conexion == null ) {
			try {
				Conexion::$conexion = new PDO("mysql:host=".Conexion::$server.";dbname=".Conexion::$database.";port=3307;charset=utf8", Conexion::$user, Conexion::$password);    			
				Conexion::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception
				// exit("Connected successfully"); 
			}
			catch(PDOException $e)
			{
				exit("Connection failed: " . $e->getMessage());
			}
		}

		return Conexion::$conexion;
	}



	public static function getConexionMysqli(){

		if (Conexion::$conexion == null || !Conexion::$conexion->ping()) {
			Conexion::$conexion = new mysqli(Conexion::$server, Conexion::$user, Conexion::$password, Conexion::$database);
			mysqli_set_charset(Conexion::$conexion,"utf8");
		}

		return Conexion::$conexion;
	}



}
?>	