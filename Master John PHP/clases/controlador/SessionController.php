<?php  
require_once "clases/modelo/Usuario.php"; // -> PHP 7.1
// require_once "/clases/modelo/Usuario.php"; // -> PHP 5.6.25

print_r(dirname( __FILE__ )) ;

class SessionController{
	
	private $esCliente = false;
	private $esAdministrador = false;
	private $tiempoSesion = 30; // minutos
	private $fechaInicio ="";
	private $maximoTiempoVida = 3600; //Una hora
		
	function __construct()	{

		if (session_status() != PHP_SESSION_ACTIVE) { 
			// session_set_cookie_params($this->maximoTiempoVida);
			session_start(); 
		}
		$this->verificarUsuario();	
	}


	function esCliente(){
		return $this->esCliente;
	}

	function esAdministrador(){
		return $this->esAdministrador;
	}

	function verificarUsuario(){

		if (isset($_SESSION['perfil'])) {
			
			$_SESSION["token"] = bin2hex(random_bytes(20));

			if ($_SESSION['perfil'] === "cliente") {
				$this->$esCliente = true;				
			}
			else if ($_SESSION['perfil'] === "administrador") {
				$this->$esAdministrador = true;				
			}
		}
	}


	function iniciarSesion($usuario,$perfil){
		$_SESSION["perfil"] = $perfil;
		$_SESSION["usuario"] = $usuario;
		$this->fechaInicio = date("d/m/Y H:i:s");
		$this->verificarUsuario();
	} 

	function expirarSesion(){
		if ($this->calcularTiempoSesion($this->fechaInicio) > $this->tiempoSesion) {
			$this->terminarSesion();
			// echo "minutos : ".$this->calcularTiempoSesion($this->fechaInicio);
		}
		else{
			if (isset($_SESSION["token"])) {
				print_r($_SESSION["token"]);
			}
			
			$this->fechaInicio =  date("d/m/Y H:i:s");
		}
	}

	function calcularTiempoSesion($fechaInicio){
		return round((strtotime(date("d/m/Y H:i:s")) - strtotime($fechaInicio)) / 60 );
	}	

	function terminarSesion(){
		session_unset();
		session_destroy();
		$this->fechaInicio = "";
		header("Location: index.php?vista=inicio");
	}

}
?>