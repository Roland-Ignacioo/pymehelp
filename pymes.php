<?php
include 'config.php';
include 'conexion.php';
include 'template/header.php';
?>

<head>
	<title> PYMES - PYMEHELP</title>
</head>

<!-- Nav -->
<nav id="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="nosotros.php">NOSOTROS</a></li>
		<li class="current"><a href="pymes.php">PYMEs</a></li>
		<li><a href="productos.php">PRODUCTOS</a></li>
	</ul>

</nav>
<!-- Main -->
<section id="main">
	<div class="container"><br>
		<div class="row">
			<div class="col-sm-12">
				<div class="content">

					<!-- Content -->

					<article class="box page-content">

						<br>
						<header>
							<h2>ELLOS CONFIARON EN NOSOTROS</h2>
							<p></p>
						</header>

						<section id="section-pyme">
							<span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
							<p>
								<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
									Nuestra historia...
								</button>
							</p>
							<div class="collapse" id="collapseExample">
								<div class="card card-body">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
									richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
									anderson cred nesciunt sapiente ea proident.</p>
									
										<a href="pymes/ejemplo_1.php" class="btn btn-primary" type="submit">Ejemplo 1</a><br>
										<a href="pymes/ejemplo_2.php" class="btn btn-primary" type="submit">Ejemplo 2</a><br>
										<a href="pymes/ejemplo_3.php" class="btn btn-primary" type="submit">Ejemplo 3</a><br>
										<a href="pymes/ejemplo_4.php" class="btn btn-primary" type="submit">Ejemplo 4</a><br>
										<a href="pymes/ejemplo_5.php" class="btn btn-primary" type="submit">Ejemplo 5</a><br>
										<a href="pymes/ejemplo_6.php" class="btn btn-primary" type="submit">Ejemplo 6</a><br>
										<a href="pymes/ejemplo_7.php" class="btn btn-primary" type="submit">Ejemplo 7</a><br>
										<a href="pymes/ejemplo_8.php" class="btn btn-primary" type="submit">Ejemplo 8</a><br>
										<a href="pymes/ejemplo_9.php" class="btn btn-primary" type="submit">Ejemplo 9</a><br>
										<a href="pymes/ejemplo_10.php" class="btn btn-primary" type="submit">Ejemplo 10</a><br>
								</div>
							</div>

							<!-- <div class="contaniner">
										<a href="#seccion" class="btn btn-prymary"
											data-toggle="collapse">Nuestra historia...</a>
									</div>
									<div class="collpase">
										<div class="well" id="seccion">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio iure unde
												debitis quasi numquam assumenda enim ipsum, vel laboriosam porro saepe
												deleniti voluptatum voluptatem reiciendis ullam architecto optio
												cupiditate ipsa!
											</p>
										</div>
									</div> -->

						</section>

						<!-- <section id="section-pyme">
							<span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
							<p>
								<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
									Mi historia...
								</button>
							</p>
							<div class="collapse" id="collapseExample1">
								<div class="card card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
									richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
									anderson cred nesciunt sapiente ea proident.
								</div>
							</div>

						</section> -->
						<!--  
								<section>
									<span class="image featured"><img src="images/pic05.jpg" alt="" /></span>
									<p>
										Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
										Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
										Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
										consequat etiam lorem ipsum dolor sit amet nullam.
									</p>
								</section>-->
					</article>
				</div>
			</div>
		</div>
	</div>

	<!-- Contacto -->
	<?php include 'template/contacto.php' ?>


</section><br>


</div>


<?php
include 'template/footer_productos.php';
?>