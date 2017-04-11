<?php
require_once "../dao/Conexion.php";
require_once "../dao/CuentaDao.php";
require_once "SessionController.php";

//BLOQUE PETICIONES GET. 
if ($_SERVER["REQUEST_METHOD"] === "GET") {

	if (isset($_GET["rut"]) && isset($_GET["clave"])) {

		$rut = trim($_GET["rut"]);
		$clave = trim($_GET["clave"]);

		if ($rut === "" || $clave === "") {
			echo "0";
		}
		else{

			$conexion = Conexion::getConexion();
			$cuentaDao = new CuentaDao();
			$cuenta = new Cuenta(trim($_POST["rut"], "", trim($_POST["clave"]), ""));
			$cuentaDao = $cuentaDao->buscar($cuenta);
			echo ($cuenta === "")? "1" : $cuentaDao ;			
		}

	}
	else{
		echo "0";
	}
}



//BLOQUE PETICIONES POST.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	
}
?>