<?php
include("../config.php");
include("../conexion.php");
include("../carrito.php");
include("../template/header_pyme.php");
?>

<head>
    <title> Pyme 1 - PYMEHELP</title>
    <link rel="stylesheet" href="css/css_op1.css">
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

    <!-- Start Banner -->
    <section id="banner">
        <div class="content about-content">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-100" width="100%">
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
    <!-- End Banner -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left" style="border: 1px solid red;">
                    <h1>INSERTAR IMAGEN RELACIONADA
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, eum! Culpa voluptas omnis consectetur veniam esse fuga dolor, facilis assumenda eveniet necessitatibus est laboriosam, sapiente aut laudantium itaque harum earum!</h1>
                    <img class="img-fluid" src="" alt="">
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        DAOTS PYME
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">DATOS:</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php $filas = $pdo->query("SELECT * FROM tbl_pyme WHERE id_pyme=1")->fetchAll(PDO::FETCH_OBJ) ?>
                                    <?php foreach ($filas as $filas) { ?>
                                        <div class="container" align="center">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th width="15%"><b>RAZON SOCIAL: </b></th>
                                                        <td width="35%"><?php echo $filas->razon_social; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" width="20%"><b>NOMBRE FANTASIA: </b></th>
                                                        <td width="30%"><?php echo $filas->nombre_fantasia; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>GIRO: </b></th>
                                                        <td colspan="3"><?php echo $filas->giro; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>DIRECCIÓN: </b></th>
                                                        <td><?php echo $filas->direccion; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>COMUNA: </b></th>
                                                        <td><?php echo $filas->comuna; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>TELÉFONO: </b></th>
                                                        <td><?php echo $filas->telefono; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><b>EMAIL: </b></th>
                                                        <td><?php echo $filas->email; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h6>About Me</h6>
                    <h2 class="text-uppercase">INFORMACIÓN DE LA PYME?</h2>
                    <p>
                        Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco.
                    </p>
                    <!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
                </div>
                <div class="col-lg-12 pt-60">
                    <p>
                        It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned. The history of video game is
                        as interesting as a fairy tale.
                    </p>
                    <p>
                        The quality of today’s video game was not at all there when video game first conceptualized and played ever. During the formulative years, video games were created by using various interactive electronic devices with various display formats. The first
                        ever video game was designed in 1947 by Thomas T. Goldsmith Jr.
                    </p>
                    <!-- <h4 class="pt-30">MOSTRAR DATOS</h4> -->
                </div>
            </div>

            <!-- <div class="row skillbar-wraps">
                <div class="col-lg-6 skill-left">
                    <div class="single-skill">
                        <p>
                            After Effects 85%
                        </p>
                        <div class="skill" data-width="85"></div>
                    </div>
                    <div class="single-skill">
                        <p>
                            Photoshop 90%
                        </p>
                        <div class="skill" data-width="90"></div>
                    </div>
                    <div class="single-skill">
                        <p>
                            Illustrator 70%
                        </p>
                        <div class="skill" data-width="70"></div>
                    </div>
                </div>
                <div class="col-lg-6 skill-right">
                    <div class="single-skill">
                        <p>
                            Sublime 95%
                        </p>
                        <div class="skill" data-width="95"></div>
                    </div>
                    <div class="single-skill">
                        <p>
                            Sketch 85%
                        </p>
                        <div class="skill" data-width="85"></div>
                    </div>

                </div>
            </div> -->
        </div>
    </section>
    <!-- End home-about Area -->


    <!-- Start timeline Area -->
    <section class="timeline pb-120">
        <div class="text-center">
            <div class="menu-content pb-70">
                <div class="title text-center">
                    <h2 class="mb-10">CARACTERÍSTICAS</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <ul>
            <li>
                <div class="content">
                    <h4>
                        <time>Masters in Graphics & Fine Arts</time>
                    </h4>
                    <p><b>Session:</b> 2010-11</p>
                    <p><b>Result:</b> 3.78 (In the Scale of 4.00)</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <img class="img-fluid mx-auto d-block mb-30" src="" alt="">
                    <h4>
                        <time>Creative Content Developer</time>
                    </h4>
                    <p>July 2015 to Present</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <h4>
                        <time>Bachelor in Graphics & UI/UX</time>
                    </h4>
                    <p><b>Session:</b> 2006-09</p>
                    <p><b>Result:</b> 3.40 (In the Scale of 4.00)</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <img class="img-fluid mx-auto d-block mb-30" src="" alt="">
                    <h4>
                        <time>Senior UI/UX Designer</time>
                    </h4>
                    <p>July 2015 to Present</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <h4>
                        <time>Diploma in Fine Arts & Printing</time>
                    </h4>
                    <p><b>Session:</b> 2003-06</p>
                    <p><b>Result:</b> 4.94 (In the Scale of 5.00)</p>
                </div>
            </li>
        </ul>
    </section>
    <!-- End timeline Area -->

    <!-- Start Datos Pyme -->
    <section>
        <?php $filas = $pdo->query("SELECT * FROM tbl_pyme WHERE id_pyme=1")->fetchAll(PDO::FETCH_OBJ) ?>
        <?php foreach ($filas as $filas) { ?>
            <div class="jumbotron container" align="center">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th width="15%"><b>RAZON SOCIAL: </b></th>
                            <td width="35%"><?php echo $filas->razon_social; ?></td>
                            <th scope="row" width="20%"><b>NOMBRE FANTASIA: </b></th>
                            <td width="30%"><?php echo $filas->nombre_fantasia; ?></td>
                        </tr>
                        <tr>
                            <th><b>GIRO: </b></th>
                            <td colspan="3"><?php echo $filas->giro; ?></td>
                        </tr>
                        <tr>
                            <th><b>DIRECCIÓN: </b></th>
                            <td><?php echo $filas->direccion; ?></td>
                            <th><b>COMUNA: </b></th>
                            <td><?php echo $filas->comuna; ?></td>
                        </tr>
                        <tr>
                            <th><b>TELÉFONO: </b></th>
                            <td><?php echo $filas->telefono; ?></td>
                            <th><b>EMAIL: </b></th>
                            <td><?php echo $filas->email; ?></td>
                        </tr>
                    </tbody>
                </table>

                <!-- <p>
                    <b>id_pyme</b><?php echo $filas->id_pyme; ?> <br>
                    <b>razon_social</b><?php echo $filas->razon_social; ?> <br>
                    <b>nombre_fantasia</b><?php echo $filas->nombre_fantasia; ?> <br>
                    <b>giro</b><?php echo $filas->giro; ?> <br>
                    <b>direccion</b><?php echo $filas->direccion; ?> <br>
                    <b>comuna</b><?php echo $filas->comuna; ?> <br>
                    <b>telefono</b><?php echo $filas->telefono; ?> <br>
                    <b>email</b><?php echo $filas->email; ?> <br>
                </p> -->
            </div>
        <?php } ?>
    </section>
    <!-- End Datos Pyme -->


    <!-- End Show Product -->
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
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=1 And id_pyme=1");
                            $sentencia->execute();
                            $producto_normal = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            /* print_r($lista_productos); */
                            ?>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=2 And id_pyme=1");
                            $sentencia->execute();
                            $producto_nuevo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=3 And id_pyme=1");
                            $sentencia->execute();
                            $producto_dscto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>


                            <!-- 1 = Normal / 2 = Nuevo / 3 = Con descuento -->


                            <!-- PRODUCTO NORMAL -->
                            <?php foreach ($producto_normal as $producto) { ?>
                                <div class="owl-item" style="width: 900px;">
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
                                <div class="owl-item" style="width: 900px;">
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
                                <div class="owl-item" style="width: 900px;">
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

                            <div class="owl-item" style="width: 900px;">
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
    </section>
    <!-- End Show Product -->


    <!-- Redes Sociales -->
    <section class="col-sm-12"><br>

        <section class="box features"><br>
            <h2 class="major" align="center"><span>Nuestras Redes Sociales</span></h2>
        </section>

        <section class="box highlight">
            <ul class="special">
                <li><a href="#" class="icon solid fab fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon solid fab fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
        </section>
    </section>

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