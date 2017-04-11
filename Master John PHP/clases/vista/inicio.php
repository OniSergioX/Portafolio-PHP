<?php  
// la clase : row col-sm-8 se agregara al div principal, si es que se desea poner navegadores laterales!
?>
<div class="container"> 
	
	<div class="carousel slide" data-ride="carousel" id="slider">

		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active"></li>
			<li data-target="#slider" data-slide-to="1"></li>
			<li data-target="#slider" data-slide-to="2"></li>
			<li data-target="#slider" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/1.jpg" alt="1">
			</div>

			<div class="item">
				<img src="img/2.jpg" alt="2">
			</div>

			<div class="item">
				<img src="img/3.jpg" alt="3">
			</div>

			<div class="item">
				<img src="img/4.jpg" alt="4">
			</div>
		</div>

		<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#slider" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>


	<br>

	<div id="promociones">

		<hr><h2 class=" Aclonica">PROMOCIONES DE LA SEMANA</h2><hr>

		<div class="col-sm-4 col-md-4">			
			<div class="thumbnail">
				<img src="img/p9.jpg" alt="Foto Sandwich" class="img-rounded">
				<div class="caption">
					<h4 class="text-info"><b>Sandwich</b></h4><hr>
					<h3 class="text-info"><b>Campero Master John</b></h3>
					<p><b>Deliciosa Carne Doble Con Queso, Tocino y Salsa Barbeque</b></p>
					<h3 class="precio"><b>$3.500</b></h3>
					<p><button class="btn btn-primary">La quiero!</button></p>
				</div>
			</div>
		</div>

		<div class="col-sm-4 col-md-4">			
			<div class="thumbnail">
				<img src="img/p10.jpg" alt="Foto Hot-Dog" class="img-rounded">
				<div class="caption">
					<h4 class="text-warning"><b>Hot-Dog</b></h4><hr>
					<h3 class="text-warning"><b>Cl&aacute;sico Master John</b></h3>
					<p><b>Delicioso Hot-Dog Asado con Palta y Salsa Verde </b></p>
					<h3 class="precio"><b>$2.500</b></h3>
					<p><button class="btn btn-warning">La quiero!</button></p>
				</div>
			</div>
		</div>

		<div class="col-sm-4 col-md-4">			
			<div class="thumbnail">
				<img src="img/p11.jpg" alt="Foto Vegetariano" class="img-rounded">
				<div class="caption">
					<h4 class="text-success"><b>Vegetariano</b></h4><hr>
					<h3 class="text-success"><b>Wrap Master John</b></h3>
					<p><b>Deliciosa seleccion de vegetales envueltos en tortilla Master John</b></p>
					<h3 class="precio"><b>$1.500</b></h3>
					<p><button class="btn btn-success">La quiero!</button></p>
				</div>
			</div>
		</div>

	</div>



</div>





