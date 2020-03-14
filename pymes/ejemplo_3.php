<?php
include("../config.php");
include("../conexion.php");
include("../carrito.php");
include("../template/header_pyme.php");
?>

<head>
    <title> Pyme 3 - PYMEHELP</title>
    <link rel="stylesheet" href="css/css_op3.css">
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

    <!-- about section -->
    <section class="about_section layout_padding">
        <div class="container">
            <h2>
                INFO DE LA PYME
            </h2>
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at
                its layout. The point of using Lorem
            </p>
        </div>

        <div class="container">
            <div class="about_card-container">
                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src="images/card-img-1.png" alt="">
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                10 YEARS EXPERIENCE
                            </h4>
                            <p>
                                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                                vehicula ut id elit. Morbi leo risus.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="" class="about_btn">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src="images/card-img-2.png" alt="">
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                A PRO ARCHITECTS TEAM
                            </h4>
                            <p>
                                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                                vehicula ut id elit. Morbi leo risus.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="" class="about_btn">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="about_card">
                    <div class="about-detail">
                        <div class="about_img-box">
                            <img src="images/card-img-3.png" alt="">
                        </div>
                        <div class="card_detail-ox">
                            <h4>
                                1000+ HAPPY CUSTOMERS
                            </h4>
                            <p>
                                Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                                vehicula ut id elit. Morbi leo risus.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="" class="about_btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- portfolio section -->
    <section class="portfolio_section layout_padding2">
        <div class="container">
            <h2>
                OUR PORTFOLIO
            </h2>
            <p>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at
                its layout. The point of using Lorem
            </p>
        </div>
        <div class="container layout_padding2-top ">
            <div class="row">
                <div class="col-md-8">
                    <div class="portfolio_img-box">
                        <img src="images/portfolio-img-1.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio_img-box">
                        <img src="images/portfolio-img-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio_img-box">
                        <img src="images/portfolio-img-3.png" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="portfolio_img-box">
                        <img src="images/portfolio-img-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section -->

    <!-- team section  -->
    <section class="team_section layout_padding">
        <div class="container">
            <h2>
                OUR TEAM
            </h2>
            <p>
                It is a long established fact that a reader will be distracted by the readable
            </p>
        </div>
        <div class="container">
            <div class="team_card-container layout_padding2">
                <div class="team_card">
                    <div class="team_img-box">
                        <img src="images/team-1.png" alt="">
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            JOHN DOE
                        </h5>
                        <p>
                            CEO - DESIGNER
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <span class="fas fa-envelope"></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <span class="fab fa-facebook"></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <span class="fab fa-instagram"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_card">
                    <div class="team_img-box">
                        <img src="images/team-2.png" alt="">
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            sandy DOE
                        </h5>
                        <p>
                            CEO - DESIGNER
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src="images/facebook-logo-button.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src=" images/twitter-logo-button.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="images/linkedin.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="images/instagram.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_card">
                    <div class="team_img-box">
                        <img src="images/team-3.png" alt="">
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            Alexi DOE
                        </h5>
                        <p>
                            CEO - DESIGNER
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src="images/facebook-logo-button.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src=" images/twitter-logo-button.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="images/linkedin.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="images/instagram.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_card">
                    <div class="team_img-box">
                        <img src="images/team-4.png" alt="">
                    </div>
                    <div class="team_detail-box">
                        <h5>
                            JOHN DOE
                        </h5>
                        <p>
                            CEO - DESIGNER
                        </p>
                        <div class="team_follow">
                            <h6>
                                Follow On
                            </h6>
                            <div class="team_social">
                                <div>
                                    <a href="">
                                        <img src="images/facebook-logo-button.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src=" images/twitter-logo-button.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="images/linkedin.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="">
                                        <img src="images/instagram.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->

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

    <!-- contact section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <p>
                Don’t Hesitate To Ask
            </p>
            <h2 class="">
                CONTACTO
            </h2>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-6 ">
                    <form action="">
                        <div class="contact_form-container">
                            <div>
                                <div>
                                    <label>
                                        Name
                                        <input type="text" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Email
                                        <input type="email" />
                                    </label>
                                </div>

                                <div>
                                    <label>
                                        Phone Number
                                        <input type="text" />
                                    </label>
                                </div>

                                <div>
                                    <label>
                                        Message
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </label>
                                </div>
                                <div class="mt-5">
                                    <button type="submit">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact_img-box">
                        <!-- <img src="../images/pic01.jpg" alt=""> -->
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
                    </div><br>

                    <!-- Start Google Map -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- End Map -->
                    </div>
                    <!-- End Google Map -->
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->


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