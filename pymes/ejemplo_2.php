<?php
include("../config.php");
include("../conexion.php");
include("../carrito.php");
include("../template/header_pyme.php");
?>

<head>
  <title> Pyme 2 - PYMEHELP</title>
  <link rel="stylesheet" href="css/css_op2.css">
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


  <div id="preloader"></div>

  <header>

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
              <!-- </h1>
                    <p class="text-white link-nav">
                        <a href="index.html">Home </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="about.html"> About Me</a>
                    </p> -->
          </div>
        </div>
      </div>

    </section>
    <!-- End Slider -->

    <!-- Start About area -->
    <section class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About eBusiness</h2>
            </div><br>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <h1>INSERTAR IMAGEN RELACIONADA
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, eum! Culpa voluptas omnis consectetur veniam esse fuga dolor, facilis assumenda eveniet necessitatibus est laboriosam, sapiente aut laudantium itaque harum earum!</h1>
                  <img src="img/about/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">project Maintenance</h4>
                </a>
                <p>
                  Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
                </p>
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Interior design Package
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Building House
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Reparing of Residentail Roof
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Renovaion of Commercial Office
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Make Quality Products
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </section>
    <!-- End About area -->

    <!-- Start Service area -->
    <section class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2><br>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="services-grid">
            <!-- Start Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-code"></i>
                    </a>
                    <h4>Expert Coder</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-camera-retro"></i>
                    </a>
                    <h4>Creative Designer</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-wordpress"></i>
                    </a>
                    <h4>Wordpress Developer</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-camera-retro"></i>
                    </a>
                    <h4>Social Marketer </h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <!-- End Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-bar-chart"></i>
                    </a>
                    <h4>Seo Expart</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <!-- End Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-ticket"></i>
                    </a>
                    <h4>24/7 Support</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service area -->

    <!-- Start team Area -->
    <section class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our special Team</h2><br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="team-top">
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a>
                    <img src="../images/team/1.jpg" alt="" width="100%">
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <span class="fab fa-facebook-f"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-twitter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-instagram"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Jhon Mickel</h4>
                  <p>Seo</p>
                </div>
              </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a>
                    <img src="../images/team/2.jpg" alt="" width="100%">
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <span class="fab fa-facebook-f"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-twitter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-instagram"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Andrew Arnold</h4>
                  <p>Web Developer</p>
                </div>
              </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a>
                    <img src="../images/team/3.jpg" alt="" width="100%">
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <span class="fab fa-facebook-f"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-twitter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-instagram"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Lellien Linda</h4>
                  <p>Web Design</p>
                </div>
              </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-team-member">
                <div class="team-img">
                  <a>
                    <img src="../images/team/4.jpg" alt="" width="100%">
                  </a>
                  <div class="team-social-icon text-center">
                    <ul>
                      <li>
                        <a href="#">
                          <span class="fab fa-facebook-f"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-twitter"></span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="fab fa-instagram"></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="team-content text-center">
                  <h4>Jhon Powel</h4>
                  <p>Seo Expert</p>
                </div>
              </div>
            </div>
            <!-- End column -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Area -->

    <!-- Start reviews Area -->
    <section class="reviews-area hidden-xs">
      <div class="work-us">
        <div class="work-left-text">
          <img src="../images/2.jpg" alt="" width="100%">
        </div>
        <div class="work-right-text text-center">
          <h2>working with us</h2>
          <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
          <a href="#contact" class="ready-btn">Contact us</a>
        </div>
      </div>
    </section>
    <!-- End reviews Area -->

    <!-- Start Blog Area -->
    <section class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="img/blog/1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Assumenda repud eum veniam</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="img/blog/2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Explicabo magnam quibusdam.</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="img/blog/3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Lorem ipsum dolor sit amet</a>
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog -->

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


    <!-- Start contact Area -->
    <section id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contáctanos</h2>
              </div><br>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fas fa-mobile"></i>
                  <p>
                    Call: +1 5589 55488 55<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fas fa-envelope"></i>
                  <p>
                    Email: info@example.com<br>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fas fa-map-marker"></i>
                  <p>
                    Location: A108 Adam Street<br>
                    <span>NY 535022, USA</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form contact-form">
                <!-- NOMBRE -->
                <div class="col-md-12 mb-12">
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom02" value="" placeholder="Nombre Completo" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <!-- EMAIL -->
                <div class="col-md-12 mb-12">
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <!-- NÚMERO -->
                <div class="col-md-12 mb-12">
                  <div class="input-group">
                    <input type="number" class="form-control" id="validationCustom02" value="" placeholder="Número Teléfono" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div><br>
                <div class="col-sm-12">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="required" data-error="Ingresar mensaje."></textarea>
                </div><br>
                <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Area -->

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