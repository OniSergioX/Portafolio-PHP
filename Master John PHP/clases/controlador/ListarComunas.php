<?php  
require_once "../dao/Conexion.php";
require_once "../dao/DAO.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {

	$conexion = Conexion::getConexionPDO();
	$dao = new DAO($conexion);
	$comunas = $dao->Procedimiento("BUSCAR_COMUNAS", array());
	return print_r(json_encode($comunas));
}
?>