<?php  

echo dirname( __FILE__ )."<br>";

$fechaInicio = "31-03-2017 23:33:00";

echo "<pre>";

echo "<table border = '1'>

		<tr>
			<td>LEYENDA</td>			
			<td>VALORES</td>						
		</tr>

		<tr>
			<td>FECHA ESTATICA</td>
			<td>".$fechaInicio."</td>
		<tr>

		<tr>
			<td>FECHA PHP</td>
			<td>".date("d-m-Y H:i:s")."</td>
		</tr>

		<tr>
			<td>DIFERENCIA DE SEGUNDOS</td>
			<td colspan='3'>".floor( (strtotime(date("d-m-Y H:i:s")) - strtotime($fechaInicio))  )."</td>
		</tr>

		<tr>
			<td>DIFERENCIA DE MINUTOS</td>
			<td colspan='3'>".floor( (strtotime(date("d-m-Y H:i:s")) - strtotime($fechaInicio)) / 60   )."</td>
		</tr>

	</table>";

echo "</pre>";

?>
