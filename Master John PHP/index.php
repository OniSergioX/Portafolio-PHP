<?php
$vista = "inicio.php";

if (isset($_GET["vista"])) {
	$vista = $_GET["vista"];	
	switch ($vista) {
		case "inicio": $vista = "inicio.php"; break;		
		default: $vista = "404.php"; break;
	}
}
?>
<!DOCTYPE html>
<html lang="esp">

<head>
	<?php include dirname( __FILE__ )."/clases/vista/base/meta.php"; ?>	
</head>	

<body data-spy="scroll" data-target=".navbar" data-offset="50">	

	<?php include dirname( __FILE__ )."/clases/vista/base/header.php"; ?>

	<div class="row content text-center" id="centro">
		<?php 
			// include dirname( __FILE__ )."/clases/vista/base/left-sidenav.php";
			include dirname( __FILE__ )."/clases/vista/".$vista;
			// include dirname( __FILE__ )."/clases/vista/base/right-sidenav.php";
		?>
	</div>

	<br><br><br>	
	<?php include dirname( __FILE__ )."/clases/vista/base/footer.php"; ?>	
</body>
</html>