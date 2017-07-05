<?php
/**
* Clase que realiza todas las tareas dao
*/
class DAO 
{
	
	private $conexion;

	// ===================== DEFINICION DE FUNCIONES Y PROCEDIMIENTOS ========================
	// =======================================================================================
	// const SQL_INSERT = "SELECT crear_cuenta(?, ?, ?, 1, 1)"; //=> Mysqli /PDO
	// const SQL_SELECT = "SELECT * FROM cuentas";
	const BUSCAR_COMUNAS = "SELECT * FROM comunas WHERE provincia_id BETWEEN 21 and 26";
	// const SQL_UPDATE = "CALL {nombre procedimiento} ({parametros})";
	// const SQL_DELETE = "CALL {nombre procedimiento} ({parametros})";
	const CREAR_USUARIO = "SELECT crear_usuario(?, ?, ?, 1, 1, ?, ?, ?, ?, ?, ?, ?, ?)";
	// =======================================================================================	

	function __construct($conexion)
	{
		$this->conexion = $conexion;
	}


	function Procedimiento($_nombre_procedimiento, $_registro){

		try {
			
			switch ($_nombre_procedimiento) {
				// case "BUSCAR_COMUNAS": $statement = $this->conexion->prepare(self::BUSCAR_COMUNAS); break;
				case "CREAR_USUARIO": $statement = $this->conexion->prepare(self::CREAR_USUARIO); break;
				default: $statement = $this->conexion->prepare(self::BUSCAR_COMUNAS); break;
			}

			$contador = 1; // RELACION DEL CONTADOR CON LOS MARCADORES ANONIMOS!
			if (count($_registro) > 0) {
				foreach ($_registro as $key => $value) { 
					$statement->bindValue($contador++, $value);					
				}
			}

			$statement->execute();
			$this->CerrarConexionPDO($this->conexion, $statement);
			return $statement->fetchAll();
			
		} catch (Exception $e) {
			exit("HUBO UN ERROR AL OPERAR LA BASE DE DATOS : ".$e->getMessage());
		}


	}

	/**
	*Metodo Para Cerrar El statement Existente y La conexion
	* @param conexion
	* @param statement
	*/
	function CerrarConexionPDO($conexion, $statement){
		$conexion = null;
		$statement = null;
	}

}


//==========TESTING========================
// require_once "Conexion.php";
// $conexion = Conexion::getConexionPDO();
// $dao = new DAO($conexion);

// $registro = array("usuario1",bin2hex(random_bytes(30)),"pass",12345678, "nom", "ap", "am", "dir", "email", 98765432, 82);

// $registro = array("username"=>"usuario1","salt"=>bin2hex(random_bytes(30)),"password"=>"pass","rut"=>12345678,"nombre"=>"nom","apellidoP"=>"ap","apellidoM"=>"am","direccion"=>"dir","e-mail"=>"email","telefono"=>98765432,"comuna"=>82);


// echo "<pre>";
// print_r($dao->Procedimiento("CREAR_USUARIO", $registro));
// echo "</pre>";
?>