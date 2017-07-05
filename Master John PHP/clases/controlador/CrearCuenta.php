<?php
require_once "../dao/Conexion.php";
require_once "../dao/DAO.php";
require_once "FiltroEntrada.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if (count($_POST) > 0) {
		$valorVacio = false;
		$xss = false;
		
		foreach ($_POST as $key => $value) {
			if ($value == "") { $valorVacio = true; break; 	}
			if (FiltroEntrada::DetectarXss($value)) { $xss = true; break; 	}
		}

		if (!$valorVacio) {
			if (!$xss) {
				$_POST["salt"] = bin2hex(random_bytes(30));  
				$_POST["pass"] = password_hash($_POST["salt"].$_POST["pass"], PASSWORD_DEFAULT);
				$conexion = Conexion::getConexionPDO();
				$dao = new DAO($conexion);			
				echo $dao->Procedimiento("CREAR_USUARIO", $_POST)[0][0][0];
			}
			else{
				echo 4;  /*INTENTO FALLIDO DE XSS*/				
			}
		}
		else{
			echo 0; /*VALOR DE ENTRADA VACIO!*/
		}
		
	}
}

// //CREAR FUNCION FILTRO DE XSS

// function DetectarXss($valor){
// 	$valor = strip_tags($valor);
// 	$cadenaXss = array("(",")","function",";",",",".","\"","'","!","?","#","$","%","&","=");
// 	$respuesta = false;
// 	foreach ($cadenaXss as $valorXss) {
// 		$entrada = explode($valorXss, $valor);
// 		if (count($entrada) > 1 ) {
// 			$respuesta = true;
// 			break;			
// 		}
// 	}
// 	return $respuesta;
// }
?>	