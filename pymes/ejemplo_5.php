<?php
include("../config.php");
include("../conexion.php");
include("../carrito.php");
include("../template/header_pyme.php");
?>

<head>
    <title> Pyme 5 - PYMEHELP</title>
    <link rel="stylesheet" href="css/css_op5.css">
</head>

<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../nosotros.php">NOSOTROS</a></li>
        <li class="current"><a href="../pymes.php">PYMEs</a></li>
        <li><a href="../productos.php">PRODUCTOS</a></li>
    </ul>
</nav>


<!-- Main -->
<section id="main">

    <!-- Slider -->
    <section id="banner">
        <div class="content about-content">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/pucon2.png" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/PuertoVaras2.png" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/RivieraMaya2.png" class="d-block w-100" width="100%">
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
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-banner col-lg-12"><br>
                    <h1 class="text-white">
                        MOSTRAR LOGO O NOMBRE DE LA PYME Y/O BANNER CON 3 IMÁGENES
                    </h1>
                    <!-- <p class="text-white link-nav">
                        <a href="index.html">Home </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="about.html"> About Me</a>
                    </p> -->
                </div>
            </div>
        </div>

    </section>
    <!-- End Slider -->

    <!--about us-->
    <section class="aboutus" id="aboutus">
        <div class="container">
            <div class="heading text-center">
                <h2>About Me</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros. Etiam ullamcorper sed lectus sit amet mattis. Morbi justo sem, cursus nec convallis a, pellentesque eu mi. Morbi hendrerit ultricies ligula </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="papers text-center">
                        <img src="../images/team/3.jpg" alt=""><br />
                        <a href="#"><b>Download my resume</b></a>
                        <h4 class="">My Teacher John Vandeley</h4>
                        <p>
                            Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its
                            content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="papers text-center">
                        <img src="../images/team/4.jpg" alt=""><br />
                        <a href="#"><b>Download my resume</b></a>
                        <h4 class="">My Teacher Stephanie Hellen</h4>
                        <p>
                            Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader's eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its
                            content more readable. The time signature in sheet music visually depicts a song's rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!--Skills-->
    <section class="specialties" id="specialties">
        <div class="container">
            <div class="heading text-center">
                <h2>Our Skills</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi quis dolor sit amet lacus ultricies rutrum. Curabitur vitae fringilla elit. Sed at nunc congue, cursus erat ac, pellentesque eros. Etiam ullamcorper sed lectus sit amet mattis. Morbi justo sem, cursus nec convallis a, pellentesque eu mi. Morbi hendrerit ultricies ligula </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s" ">
					<div class=" skill ">
						<div class=" progress-wrap ">
							<h3>Graphic Design</h3>
							<div class=" progress ">
							  <div class=" progress-bar color1 " role=" progressbar " aria-valuenow=" 40 " aria-valuemin=" 0 " aria-valuemax=" 100 " style=" width: 85% ">
								<span class=" bar-width ">85%</span>
							  </div>

							</div>
						</div>

						<div class=" progress-wrap ">
							<h3>HTML</h3>
							<div class=" progress ">
							  <div class=" progress-bar color2 " role=" progressbar " aria-valuenow=" 20 " aria-valuemin=" 0 " aria-valuemax=" 100 " style=" width: 95% ">
							   <span class=" bar-width ">95%</span>
							  </div>
							</div>
						</div>

						<div class=" progress-wrap ">
							<h3>CSS</h3>
							<div class=" progress ">
							  <div class=" progress-bar color3 " role=" progressbar " aria-valuenow=" 60 " aria-valuemin=" 0 " aria-valuemax=" 100 " style=" width: 80% ">
								<span class=" bar-width ">80%</span>
							  </div>
							</div>
						</div>

						<div class=" progress-wrap ">
							<h3>Wordpress</h3>
							<div class=" progress ">
							  <div class=" progress-bar color4 " role=" progressbar " aria-valuenow=" 80 " aria-valuemin=" 0 " aria-valuemax=" 100 " style=" width: 90% ">
								<span class=" bar-width ">90%</span>
							  </div>
							</div>
						</div>
					</div>
				</div>

				<div class=" col-md-6 wow fadeInRight " data-wow-offset=" 0 " data-wow-delay=" 0.6s "">
                    <img src="../images/pic01.jpg" class="img-responsive">
                </div>
            </div>
        </div>


    </section>
    <!-- End Skills -->

    <!-- Education -->
    <section class="feedback" id="feedback">
        <div class="container">
            <div class="heading">
                <h2>Education</h2>
                <p>Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.<br>
                    Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed sollcitudin.</p>
            </div>
        </div>

        <div class="container cont-1">
            <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h4>MASTER OF COMPUTER SCIENCE</h4>
                        <h5>FEB 2012 - DEC 2014</h5>
                        <i class="fa fa-laptop"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h4>MASTER OF COMPUTER SCIENCE</h4>
                        <h5>FEB 2012 - DEC 2014</h5>
                        <i class="fa fa-book"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.9s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h4>MASTER OF COMPUTER SCIENCE</h4>
                        <h5>FEB 2012 - DEC 2014</h5>
                        <i class="fa fa-gear"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages." <cite>Jogn De, Programming<br /><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
                <blockquote>Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader’s eye through the content. Good vertical rhythm makes a layout more balanced and beautiful
                    and its content more readable. The time signature in sheet music visually depicts a song’s rhythm, while for us, the lines of the baseline grid depict the rhythm of our content and give us guidelines. <cite>Marta Kay, Business Development<br /><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
            </div>
        </div>
    </section>
    <!-- End Education -->

    <!-- Start Show Product -->
    <section class="viewed" style="background: -moz-linear-gradient(0deg, #8490ff 0%, #62bdfc 100%);
    background: -webkit-linear-gradient(0deg, #8490ff 0%, #62bdfc 100%);
    background: -ms-linear-gradient(0deg, #8490ff 0%, #62bdfc 100%);">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center text-white">
                                <h2 class="mb-10 text-black">PRODUCTOS</h2>
                                <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title"></h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=1");
                            $sentencia->execute();
                            $producto_normal = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            /* print_r($lista_productos); */
                            ?>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=2");
                            $sentencia->execute();
                            $producto_nuevo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=3");
                            $sentencia->execute();
                            $producto_dscto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>


                            <!-- 1 = Normal / 2 = Nuevo / 3 = Con descuento -->


                            <!-- PRODUCTO NORMAL -->
                            <?php foreach ($producto_normal as $producto) { ?>
                                <div class="owl-item">
                                    <div class="viewed_item product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image product_image d-flex flex-column align-items-center justify-content-center">
                                            <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" src="<?php echo $producto['Img']; ?>">
                                        </div><br>
                                        <div class="product_content">
                                            <div class="product_price">$<?php echo number_format($producto['Precio'], 0, ',', '.'); ?></div>
                                            <div class="viewed_name product_name">
                                                <div><a href="#" tabindex="0"><?php echo $producto['Nombre']; ?></a></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Cantidad</label>
                                            <input type="number" name="Cant" value="1" min="1" max="50" step="1">
                                        </div>

                                        <form action="" method="post">
                                            <input type="hidden" name="Id" id="Id" value="<?php echo openssl_encrypt($producto['Id'], COD, KEY); ?>">
                                            <input type="hidden" name="Nombre" id="Nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
                                            <input type="hidden" name="Precio" id="Precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                                            <input type="hidden" name="Cantidad" id="Cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                                                Comprar
                                            </button>
                                        </form>

                                        <!-- <div class="product_fav"><i class="fas fa-heart"></i></div> -->
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">-25%</li>
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- PRODUCTOS NUEVOS -->
                            <?php foreach ($producto_nuevo as $producto) { ?>
                                <div class="owl-item">
                                    <div class="viewed_item product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="viewed_image product_image d-flex flex-column align-items-center justify-content-center">
                                            <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" src="<?php echo $producto['Img']; ?>">
                                        </div><br>
                                        <div class="product_content">
                                            <div class="product_price">$<?php echo number_format($producto['Precio'], 0, ',', '.'); ?></div>
                                            <div class="viewed_name product_name">
                                                <div><a href="#" tabindex="0"><?php echo $producto['Nombre']; ?></a></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Cantidad</label>
                                            <input type="number" name="Cantidad" value="1" min="1" max="50" step="1">
                                        </div>

                                        <form action="" method="post">
                                            <input type="hidden" name="Id" id="Id" value="<?php echo openssl_encrypt($producto['Id'], COD, KEY); ?>">
                                            <input type="hidden" name="Nombre" id="Nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
                                            <input type="hidden" name="Precio" id="Precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                                            <input type="hidden" name="Cantidad" id="Cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                                                Comprar
                                            </button>
                                        </form>

                                        <!-- <div class="product_fav"><i class="fas fa-heart"></i></div> -->
                                        <ul class="product_marks">
                                            <li class="product_mark product_new">new</li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- PRODUCTOS CON DESCUENTOS -->
                            <?php foreach ($producto_dscto as $producto) { ?>
                                <div class="owl-item">
                                    <div class="viewed_item product_item discount d-flex flex-column align-items-center justify-content-center text-center">

                                        <div class="viewed_image product_image d-flex flex-column align-items-center justify-content-center">
                                            <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" src="<?php echo $producto['Img']; ?>">
                                        </div><br>
                                        <div class="product_content">
                                            <div class="product_price">$<?php echo number_format($producto['Precio'], 0, ',', '.'); ?></div>
                                            <div class="viewed_name product_name">
                                                <div><a href="#" tabindex="0"><?php echo $producto['Nombre']; ?></a></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Cantidad</label>
                                            <input type="number" name="Cantidad" value="1" min="1" max="50" step="1">
                                        </div>

                                        <form action="" method="post">
                                            <input type="hidden" name="Id" id="Id" value="<?php echo openssl_encrypt($producto['Id'], COD, KEY); ?>">
                                            <input type="hidden" name="Nombre" id="Nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
                                            <input type="hidden" name="Precio" id="Precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                                            <input type="hidden" name="Cantidad" id="Cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                                                Comprar
                                            </button>
                                        </form>

                                        <!-- <div class="product_fav"><i class="fas fa-heart"></i></div> -->
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount">
                                                -<?php echo $producto['Descuento']; ?>%
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- PRODUCTOS CON DESCUENTOS -->

                            <div class="owl-item">
                                <div class="viewed_item product_item  d-flex flex-column align-items-center justify-content-center text-center">

                                    <div class="viewed_image product_image d-flex flex-column align-items-center justify-content-center">
                                        <img title="Carrito de compras" alt="Carrito de compras" src="../assets/css/images/cart.png">
                                    </div><br>
                                    <div class="product_content">
                                        <div class="product_price">Ir al</div>
                                        <div class="viewed_name product_name">
                                            <div><a href="../productos/ver_carrito.php" tabindex="0">Carrito de Compras</a></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="exampleFormControlSelect1">Cantidad</label>
                                            <input type="number" name="Cantidad" value="1" min="1" max="50" step="1"> -->
                                    </div>

                                    <form action="../productos/ver_carrito.php" method="post">
                                        <button class="btn btn-primary" type="submit">
                                            Ir...
                                        </button>
                                    </form>

                                    <!-- <div class="product_fav"><i class="fas fa-heart"></i></div> -->

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- End Show Product -->

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="heading">
                <h2>Contact</h2>
                <h3>Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat.<br>
                    Cras dictum tellus dui, vitae sollicitudin ipsum tincidunt in. Sed tincidunt tristique enim sed sollcitudin.</h3>
            </div>
        </div><br>

        <div class="container cont-1">
            <div class="row">
                <!-- <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div> -->

                <div class="contact-info cont-1">
                    <div class="col-md-5">
                        <h4>My Contact Info</h4>
                        <h5>Nullam elementum tellus pretium feugiat</h5>
                        <p>Fusce fermen tum neque a rutrum varius odio pede ullamcorp-er tellus ut dignissim nisi risus non tortor</p>
                        <ul>
                            <li><i class="fa fa-home fa-2x"></i> Home # 38, Suite 54 Elizebth Street</li>
                            <li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li>
                            <li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
                            <li><i class="fa fa-download fa-2x"></i> Download My Resume</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-2">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="contact submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>
    <!-- End Contact -->


</section>

<!-- NO BORRAR -->
<div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
    <div class="header_search_content">
        <div class="custom_dropdown_list">
            <span class="custom_dropdown_placeholder clc"> </span>
            <ul class="custom_list clc">
                <li><a class="clc" href="#"></a></li>
            </ul>
        </div>
    </div>
</div>


<?php
include('../template/footer_sub1.php')
?>