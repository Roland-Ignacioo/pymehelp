<?php
include 'config.php';
include 'conexion.php';
include 'template/header.php';
?>

<head>
    <title> Home - PYMEHELP</title>
</head>

<!-- Nav -->
<nav id="nav">
    <ul>
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="nosotros.php">NOSOTROS</a></li>
        <li><a href="pymes.php">PYMEs</a></li>
        <li><a href="productos.php">PRODUCTOS</a></li>
        <!-- <li><a href="no-sidebar.html">No Sidebar</a></li> -->
    </ul>

</nav>

<!-- Banner -->


<!-- Main -->
<section id="main">

    <section id="banner">
        <div class="content">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/pucon2.png" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/PuertoVaras2.png" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/RivieraMaya2.png" class="d-block w-100" width="100%">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- <h2>MOSTRAR FOTOS (SLIDER)</h2> -->
            <!-- <p>A free responsive site template built on HTML5, CSS3, and some other stuff</p>
				<a href="#main" class="button scrolly">Alright let's go</a> -->
        </div>
    </section>

    <div class="container">
        <div class="row gtr-200">

            <!-- Historia -->
            <div class="col-sm-12">
                <section class="box highlight">
                    <!-- <ul class="special">
								<li><a href="#" class="solid fab fa-facebook-f"><span class="label"></span></a>
								</li>
								<li><a href="#" class="solid fab fa-instagram"><span class="label"></span></a>
								</li>
								<li><a href="#" class="icon solid fa-flask"><span class="label">Flask</span></a></li>
								<li><a href="#" class="icon solid fa-cog"><span class="label">Cog?</span></a></li>
							</ul> -->
                    <header>
                        <h2>¿QUÉ ES PYMEHELP?</h2>
                        <p>Que pongo aquí???
                        </p>
                    </header>
                    <p>
                        Contar un poco de que se trata.<br /> Por si se cuenta un poco más.<br />
                    </p>
                </section>
            </div>

            <!-- PYMES Y PRODUCTOS -->
            <div class="col-sm-12">
                <section class="box blog">
                    <h2 class="major"><span> MOSTRAR PRODUCTOS MÁS VENDIDOS Y ALGUNAS PYMES?</span></h2>
                    <div class="wrapper style3">

                        <div class="inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm col-lg-7">
                                        <!-- Article list -->
                                        <section class="box article-list">
                                            <h2><span class="fas fa-puzzle-piece"></span> Pymes asociadas recientemente
                                            </h2>

                                            <!-- Excerpt -->
                                            <article class="box excerpt">
                                                <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                                                <div>
                                                    <header>
                                                        <span class="date">July 24</span>
                                                        <h3><a href="#">Repairing a hyperspace window</a></h3>
                                                    </header>
                                                    <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis, feugiat et sit amet ornare in, hendrerit in lectus
                                                        semper mod quis eget mi dolore.</p>
                                                </div>
                                            </article>

                                            <!-- Excerpt -->
                                            <article class="box excerpt">
                                                <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                                                <div>
                                                    <header>
                                                        <span class="date">July 18</span>
                                                        <h3><a href="#">Adventuring with a knee injury</a></h3>
                                                    </header>
                                                    <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis, feugiat et sit amet ornare in, hendrerit in lectus
                                                        semper mod quis eget mi dolore.</p>
                                                </div>
                                            </article>

                                            <!-- Excerpt -->
                                            <article class="box excerpt">
                                                <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                                                <div>
                                                    <header>
                                                        <span class="date">July 14</span>
                                                        <h3><a href="#">Preparing for Y2K38</a></h3>
                                                    </header>
                                                    <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod quisturpis nisi consequat etiam lorem. Phasellus quam turpis, feugiat et sit amet ornare in, hendrerit in lectus
                                                        semper mod quis eget mi dolore.</p>
                                                </div>
                                            </article>

                                            <footer>
                                                <a href="pymes.html" class="button alt icon solid">
                                                    <span class="fas fa-plus-circle"></span> VER MÁS PYMES
                                                </a>
                                            </footer>
                                        </section>
                                    </div>
                                    <br>

                                    <div class=" col-sm col-lg-4">
                                        <!-- Spotlight -->
                                        <section class="box spotlight">
                                            <h2><span class="fas fa-users"></span> Comentarios</h2>
                                            <article>
                                                <a href="#" class="image featured"><img src="images/pic05.jpg" alt=""></a>
                                                <header>
                                                    <h3><a href="#">Neural Implants</a></h3>
                                                    <p>The pros and cons. Mostly cons.</p>
                                                </header>
                                                <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper modquisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam lorem. Phasellus quam
                                                    turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed et tempus consequat etiam.
                                                </p>
                                                <p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod quisturpis nisi consequat etiam lorem sed amet quam turpis.
                                                </p>
                                                <footer>
                                                    <a href="#" class="button alt icon solid fa-file-alt">
                                                        Continue Reading
                                                    </a>
                                                </footer>
                                            </article>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div>
								<div class="row">
									<div class="col-9 col-12-medium">
										<div class="content">

											<!- Featured Post ->
											<article class="box post">
												<header>
													<h3><a href="#">Here's a really big heading</a></h3>
													<p>With a smaller subtitle that attempts to elaborate</p>
													<ul class="meta">
														<li class="icon fa-clock">15 minutes ago</li>
														<li class="icon fa-comments"><a href="#">8</a></li>
													</ul>
												</header>
												<a href="#" class="image featured"><img src="images/pic05.jpg"
														alt="" /></a>
												<p>
													Phasellus quam turpis, feugiat sit amet ornare in, a hendrerit in
													lectus. Praesent
													semper mod quis eget mi. Etiam sed ante risus aliquam erat et
													volutpat. Praesent a
													dapibus velit. Curabitur sed nisi nunc, accumsan vestibulum lectus.
													Lorem ipsum
													dolor sit non aliquet sed, tempor et dolor. Praesent a dapibus
													velit. Curabitur
													accumsan.
												</p>
												<a href="#" class="button">Continue Reading</a>
											</article>

										</div>
									</div>
									<div class="col-3 col-12-medium">
										<div class="sidebar">

											<!- Archives ->
											<ul class="divided">
												<li>
													<article class="box post-summary">
														<h3><a href="#">A Subheading</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">6 hours ago</li>
															<li class="icon fa-comments"><a href="#">34</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">Another Subheading</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">9 hours ago</li>
															<li class="icon fa-comments"><a href="#">27</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">And Another</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">Yesterday</li>
															<li class="icon fa-comments"><a href="#">184</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">And Another</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">2 days ago</li>
															<li class="icon fa-comments"><a href="#">286</a></li>
														</ul>
													</article>
												</li>
												<li>
													<article class="box post-summary">
														<h3><a href="#">And One More</a></h3>
														<ul class="meta">
															<li class="icon fa-clock">3 days ago</li>
															<li class="icon fa-comments"><a href="#">8,086</a></li>
														</ul>
													</article>
												</li>
											</ul>
											<a href="#" class="button alt">Archives</a>

										</div>
									</div>
								</div>
							</div> -->
                </section>

            </div>

            <!-- Contacto -->
            <?php include 'template/contacto.php' ?>
        </div><br>



        <!-- Redes Sociales -->
        <div class="col-sm-12"><br>

            <section class="box features"><br>
                <h2 class="major"><span>Nuestras Redes Sociales???</span></h2>
            </section>

            <section class="box highlight">
                <ul class="special">
                    <li><a href="#" class="icon solid fab fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon solid fab fa-instagram"><span class="label">Instagram</span></a></li>
                </ul>
            </section>
        </div>

    </div>
    </div>
</section>

<?php
include 'template/footer_productos.php'
?>