<?php
require_once "../dao/Conexion.php";
require_once "../dao/DAO.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if (count($_POST) > 0) {
		$_POST["salt"] = bin2hex(random_bytes(30));
		$respuesta = 0;

		// echo "<pre>";
		// var_dump($_POST);
		// echo "</pre>";exit();


		foreach ($_POST as $key => $value) {
			if ($value == "") {
				$respuesta++;
			}
		}


		if ($respuesta == 0) {
			$conexion = Conexion::getConexionPDO();
			$dao = new DAO($conexion);
			
			echo "<pre>";
			var_dump($dao->Procedimiento("CREAR_USUARIO", $_POST));
			echo "</pre>";
		}
		else{
			echo 0;
		}
		
	}
}

?>	