<?php  
require_once "/clases/modelo/Usuario.php";

class SessionController{
	
	private $esCliente = false;
	private $esAdministrador = false;
	private $tiempoSesion = 30; // minutos
	private $fechaInicio = "";
	
	function __construct()	{

		if (session_status() != PHP_SESSION_ACTIVE) { 
			session_start(); 
		}

		$this->verificarUsuario();	
	}

	function verificarUsuario(){

		if (isset($_SESSION['perfil'])) {
			
			if ($_SESSION['perfil'] === "cliente") {
				$this->$esCliente = true;				
			}
			else if ($_SESSION['perfil'] === "administrador") {
				$this->$esAdministrador = true;				
			}
		}
	}

	function esCliente(){
		return $this->esCliente;
	}

	function esAdministrador(){
		return $this->esAdministrador;
	}


	function iniciarSession($usuario,$perfil){
		$_SESSION["perfil"] = $perfil;
		$_SESSION["usuario"] = $usuario;
		$this->fechaInicio = date("d/m/Y H:i:s");
		$this->verificarUsuario();
	} 

	function terminarSession(){
		session_unset();
		session_destroy();
		$this->fechaInicio = "";
		header("Location: index.php?vista=inicio");
	}

	function expirarSession(){
		if (session_status() === PHP_SESSION_DISABLED) {
			if ( (calcularTiempoSesion($this->fechaInicio)) > $this->tiempoSesion ) {	
				$this->terminarSession();
			}
		}
	}

	function calcularTiempoSesion($fechaInicio){
		return round((strtotime(date("d/m/Y H:i:s")) - strtotime($fechaInicio)) / 60 );
	}

}
?>