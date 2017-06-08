<?php  

class Cuenta 
{
	
	private $rut,$username,$password,$nivel;

	function __construct($_rut,$_username,$_password,$_nivel)
	{
		$this->rut = $_rut;
		$this->username = $_username;
		$this->password = $_password;
		$this->nivel = $_nivel;
	}

	public function getRut(){
		return $this->rut;
	} 

	public function setRut($_rut){
		$this->rut = $_rut;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($_username){
		$this->username = $_username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($_password){
		$this->password = $_password;
	}

	public function getNivel(){
		return $this->nivel;
	}

	public function setNivel($_nivel){
		$this->nivel = $_nivel;
	}
}

?>	