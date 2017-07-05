<?php  
class FiltroEntrada
{
	private $cadenaXss;
	
	function __construct(){
		$this->cadenaXss = 
		array("|","°","¬","!","\"","#","$","%","&","/","(",")","=","'","?","\\","¿","¡","¨","´","+","*","~","{","}","[","]","^","`",",",";",".",":","-","_","<",">","function");
	}


	function static DetectarVacio($entrada){
		$respuesta = false;
		if (is_array($entrada)) {
			foreach ($entrada as $valor) {
				if ($valor == "" ) { $respuesta = true; break; }
			}
		}
		else{
			if ($entrada == "") { $respuesta = true; }
		}
		return $respuesta;
	}

	function static DetectarXss($valor){
		$valor = strip_tags($valor);
		$respuesta = false;
		foreach ($this->cadenaXss as $valorXss) {
			$entrada = explode($valorXss, $valor);
			if (count($entrada) > 1 ) {
				$respuesta = true;
				break;			
			}
		}
		return $respuesta;
	}

}

?>