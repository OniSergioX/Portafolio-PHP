<?php
require_once "../dao/Conexion.php";
require_once "../dao/CuentaDao.php";

class UserController
{
	private $usuario,$metodo,$conexion,$dao;

	function __construct(){
		$usuario = "";
		$metodo = "";
		$conexion = Conexion::getConexionPDO();
		$dao = new DAO($conexion);
	}

	function Inicializar(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			if (count($_POST) > 0) {
				$respuesta = 0;

				foreach ($_POST as $key => $value) {
					if ($value == "") {
						$respuesta++;
					}
				}

				if ($respuesta == 0) {

					switch ($this->metodo) {
						case "agregar": return $this->CrearCuenta($_POST); break;
						case "actualizar": return $this->ActualizarCuenta($_POST); break;
						default: return $this->EliminarCuenta($_POST);	break;
					}					
				}
				else{
					return 0;
				}				
			}
		}

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {			
			return $this->ObtenerCuentas();
		}

	}

	function ObtenerCuentas(){
		return true;
	}

	function CrearCuenta($registro){
		return $dao->Procedimiento("CREAR_USUARIO", $_registro)[0][0][0];
	}

	function ActualizarCuenta($registro){
		return true;
	}

	function EliminarCuenta($registro){
		return true;
	}


}
?>