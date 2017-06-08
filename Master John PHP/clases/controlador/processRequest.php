<?php
require_once "../dao/Conexion.php";
require_once "../dao/CuentaDao.php";
// require_once "SessionController.php";

//BLOQUE PETICIONES GET. 
if ($_SERVER["REQUEST_METHOD"] === "GET") {

	if (isset($_GET["username"]) && isset($_GET["clave"])) {

		$username = trim($_GET["username"]);
		$clave = trim($_GET["clave"]);

		if ($username === "" || $clave === "") {
			echo "0";
		}
		else{
			$conexion = Conexion::getConexion();
			$cuentaDao = new CuentaDao($conexion);
			$cuenta = new Cuenta("",$username, $clave,"");
			$cuentaDao = $cuentaDao->buscar($cuenta);

			if ($cuentaDao === "") {
				echo "1";				
			}
			else{
				print_r(json_encode($cuentaDao));
			}			
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