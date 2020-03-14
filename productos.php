<?php
include 'config.php';
include 'conexion.php';
include 'carrito.php';
include 'template/header.php';
?>

<?php
if (!$_GET) {
    header('Location:productos.php?pagina=1');
}
/* Validar Errores */
/* if ($_GET['pagina']>$paginas || $_GET['pagina']<= 0) {
    header('Location:productos.php?pagina=1');
} */
?>
<?php
$sql = $pdo->prepare("SELECT * FROM tbl_productos");
$sql->execute();
$result = $sql->fetchAll();

$total_art = $sql->rowCount();
$por_pag = $total_art;
//echo $total_art;
$paginas = $total_art / $por_pag;
$paginas = ceil($paginas);
//echo $paginas;

$inciar = ($_GET['pagina'] - 1) * $por_pag;
//echo $inciar;
?>

<head>
    <title> Productos | PYMEHELP</title>
</head>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/shop_custom.js"></script>

<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="nosotros.php">NOSOTROS</a></li>
        <li><a href="pymes.php">PYMEs</a></li>
        <li class="current"><a href="productos.php">PRODUCTOS</a></li>
    </ul>
</nav>


<section id="main">

    <!-- Header Main -->
    <div class="header_main">
        <?php if ($mensaje != "") { ?>
            <div class="alert alert-success">
                <?php echo $mensaje; ?>
            </div>
        <?php } ?>
        <?php if ($mensaje_agregado != "") { ?>
            <div class="alert alert-danger">
                <?php echo $mensaje_agregado; ?>
            </div>
        <?php } ?>

        <div class="container">
            <div class="row">

                <!-- Search -->
                <div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="productos.php" method="GET" class="header_search_form clearfix">

                                    <!-- Buscador -->
                                    <input type="search" name="buscar" required="required" autocomplete="off" class="header_search_input" placeholder="Buscar productos...">

                                    <!-- Categorías -->
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc"> Categorías</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="#">Categorías</a></li>
                                                <li><a class="clc" href="#">Computers</a></li>
                                                <li><a class="clc" href="#">Laptops</a></li>
                                                <li><a class="clc" href="#">Cameras</a></li>
                                                <li><a class="clc" href="#">Hardware</a></li>
                                                <li><a class="clc" href="#">Smartphones</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="assets/css/images/search.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <!-- <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist_icon"><img src="assets/css/images/heart.png" alt=""></div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="#">Favoritos</a></div>
                                <div class="wishlist_count">115</div>
                            </div>
                        </div> -->

                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <a href="productos/ver_carrito.php"><img src="assets/css/images/cart.png" alt="Carrito de compra"></a>

                                    <div class="cart_count">
                                        <span>
                                            <a href="productos/ver_carrito.php" style="color:white">
                                                <?php
                                                echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);
                                                ?>
                                            </a>

                                        </span>
                                    </div>
                                </div>
                                <div class="cart_content">
                                    <div class="cart_text">
                                        <a href="productos/ver_carrito.php">Carrito</a></div>
                                    <!-- <div class="cart_price">$
                                        <?php
                                        /* echo(empty($_SESSION['VALOR_CARRITO']))?0:count($_SESSION['VALOR_CARRITO']); */
                                        ?></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Home -->
    <div class="home">
        <!-- <section id="banner"> -->
        <div class="content">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner.jpg" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/PuertoVaras2.png" class="d-block w-100" width="100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/pic05.jpg" class="d-block w-100" width="100%">
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
        <!-- </section> -->
        <!-- <div class="home_background parallax-window" data-parallax="scroll"
					data-image-src="images/shop_background.jpg"></div>
				<div class="home_overlay"></div>
				<div class="home_content d-flex flex-column align-items-center justify-content-center">
					<h2 class="home_title">Smartphones & Tablets</h2>
				</div> -->
    </div>


    <!-- Shop -->
    <div class="shop">
        <div class="container">
            <div class="row">
                <!-- Shop Sidebar -->
                <div class="col-lg-3">
                    <div class="shop_sidebar">
                        <div class="sidebar_section">
                            <h3>Categorías</h3>
                            <!-- <div class="sidebar_title">Categorías</div> -->
                            <ul class="sidebar_categories">
                                <li class="" category="all"><a>All</a></li>
                                <li class="" category="2"><a>Computers & Laptops</a></li>
                                <li class="" category="3"><a>Cameras & Photos</a></li>
                                <li class="" category="4"><a>Hardware</a></li>
                                <li class="" category="5"><a>Smartphones & Tablets</a></li>
                                <li class="" category="6"><a>TV & Audio</a></li>
                                <li class="" category="7"><a>Gadgets</a></li>
                                <li class="" category="8"><a>Car Electronics</a></li>
                                <li class="" category="9"><a>Video Games & Consoles</a></li>
                                <li class="" category="10"><a>Accessories</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_section filter_by_section">
                            <!-- <div class="sidebar_title">Filter By</div> -->
                            <h3><span class="fas fa-filter"></span> Filtrar por</h3>
                            <!-- <div class="sidebar_subtitle">Price</div> -->
                            <h5>Precio</h5>
                            <div class="filter_price">
                                <div id="slider-range" class="slider_range"></div>
                                <p>Rango: </p>
                                <p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
                            </div>
                        </div>

                        <!-- filtrar por colores 
                        <div class="sidebar_section">
                            <h5>Color</h5>
                            <ul class="colors_list">
                                <li class="color">
                                    <a href="#" style="background: #b19c83;"></a>
                                </li>
                                <li class="color">
                                    <a href="#" style="background: #000000;"></a>
                                </li>
                                <li class="color">
                                    <a href="#" style="background: #999999;"></a>
                                </li>
                                <li class="color">
                                    <a href="#" style="background: #0e8ce4;"></a>
                                </li>
                                <li class="color">
                                    <a href="#" style="background: #df3b3b;"></a>
                                </li>
                                <li class="color">
                                    <a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a>
                                </li>
                            </ul>
                        </div>-->
                        <!-- <div class="sidebar_section">
                            <div class="sidebar_subtitle brands_subtitle">Brands</div>
                            <ul class="brands_list">
                                <li class="brand"><a href="#">Apple</a></li>
                                <li class="brand"><a href="#">Beoplay</a></li>
                                <li class="brand"><a href="#">Google</a></li>
                                <li class="brand"><a href="#">Meizu</a></li>
                                <li class="brand"><a href="#">OnePlus</a></li>
                                <li class="brand"><a href="#">Samsung</a></li>
                                <li class="brand"><a href="#">Sony</a></li>
                                <li class="brand"><a href="#">Xiaomi</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <!-- Shop Content -->
                <div class="col-lg-9">
                    <div class="shop_content">
                        <!-- Ordenar por... -->
                        <div class="shop_bar clearfix">
                            <div class="shop_product_count"><span><?php echo $total_art; ?></span> Total de productos encontrados</div>
                            <div class="shop_sorting">
                                <span>Ordenar por:</span>
                                <ul>
                                    <li>
                                        <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
                                        <ul>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated
                                            </li>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>Nombre</li>
                                            <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "price" }'>Precio</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_grid">

                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=1 LIMIT :iniciar,:n_prod");
                            $sentencia->bindParam(':iniciar', $inciar, PDO::PARAM_INT);
                            $sentencia->bindParam(':n_prod', $por_pag, PDO::PARAM_INT);
                            $sentencia->execute();
                            $producto_normal = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            /* print_r($lista_productos); */
                            ?>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=2 LIMIT :iniciar,:n_prod");
                            $sentencia->bindParam(':iniciar', $inciar, PDO::PARAM_INT);
                            $sentencia->bindParam(':n_prod', $por_pag, PDO::PARAM_INT);
                            $sentencia->execute();
                            $producto_nuevo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <?php
                            $sentencia = $pdo->prepare("SELECT * FROM tbl_productos WHERE Tipo_prod=3 LIMIT :iniciar,:n_prod");
                            $sentencia->bindParam(':iniciar', $inciar, PDO::PARAM_INT);
                            $sentencia->bindParam(':n_prod', $por_pag, PDO::PARAM_INT);
                            $sentencia->execute();
                            $producto_dscto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                            <div class="product_grid_border"></div>

                            <!-- 1 = Normal / 2 = Nuevo / 3 = Con descuento -->


                            <!-- PRODUCTOS -->
                            <?php foreach ($producto_normal as $producto) { ?>
                                <div class="product_item" category="<?php echo $producto['categoria']; ?>">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" src="<?php echo $producto['Img']; ?>">
                                    </div><br>
                                    <div class="product_content">
                                        <div class="product_price">$<?php echo number_format($producto['Precio'], 0, ',', '.'); ?></div>
                                        <div class="product_name">
                                            <div><a href="#" tabindex="0"><?php echo $producto['Nombre']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Cantidad</label>
                                        <input type="number" name="Cant" value="1" min="1" max="50" step="1">
                                    </div>

                                    <form action="" method="post" name="prod">
                                        <input type="hidden" name="Id" id="Id" value="<?php echo openssl_encrypt($producto['Id'], COD, KEY); ?>">
                                        <input type="hidden" name="categoria" id="categoria" value="<?php echo openssl_encrypt($producto['categoria'], COD, KEY); ?>">
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
                            <?php } ?>

                            <!-- PRODUCTOS NUEVOS -->
                            <?php foreach ($producto_nuevo as $producto) { ?>
                                <div class="product_item is_new" category="hardware">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" src="<?php echo $producto['Img']; ?>">
                                    </div><br>
                                    <div class="product_content">
                                        <div class="product_price">$<?php echo number_format($producto['Precio'], 0, ',', '.'); ?></div>
                                        <div class="product_name">
                                            <div><a href="#" tabindex="0"><?php echo $producto['Nombre']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Cantidad</label>
                                        <input type="number" name="Cantidad" value="1" min="1" max="50" step="1">
                                    </div>

                                    <form action="" method="post" name="prod">
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
                            <?php } ?>

                            <!-- PRODUCTOS CON DESCUENTOS -->
                            <?php foreach ($producto_dscto as $producto) { ?>
                                <div class="product_item discount" category="game">
                                    <div class="product_border"></div>
                                    <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                        <img title="<?php echo $producto['Nombre']; ?>" alt="<?php echo $producto['Nombre']; ?>" src="<?php echo $producto['Img']; ?>">
                                    </div><br>
                                    <div class="product_content">
                                        <div class="product_price">$<?php echo number_format($producto['Precio'], 0, ',', '.'); ?></div>
                                        <div class="product_name">
                                            <div><a href="#" tabindex="0"><?php echo $producto['Nombre']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="form-group cant">
                                        <label for="exampleFormControlSelect1">Cantidad</label>
                                        <input type="number" name="Cantidad" value="1" min="1" max="50" step="1">
                                    </div>

                                    <form action="" method="post" name="prod">
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
                            <?php } ?>




                        </div><br>

                        <!-- Shop Page Navigation -->

                        <div class="align-items-end justify-content-end d-flex flex-row">

                            <ul class="d-flex flex-row align-items-center justify-content-center">
                                <li class="page-item d-flex flex-column align-items-center justify-content-center <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="productos.php?pagina=<?php echo $_GET['pagina'] - 1 ?>">
                                        <span class="fas fa-chevron-left"></span>
                                    </a>
                                </li>
                                <?php for ($i = 0; $i < $paginas; $i++) : ?>
                                    <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                                        <a class="page-link" href="productos.php?pagina=<?php echo $i + 1 ?>">
                                            <?php echo $i + 1; ?>
                                        </a></li>
                                <?php endfor ?>
                                <li class="page-item d-flex flex-column align-items-center justify-content-center <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                                    <a class="page-link" href="productos.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">
                                        <span class="fas fa-chevron-right"></span>
                                    </a>

                                </li>
                            </ul>


                        </div>

                    </div>
                </div>
            </div>
        </div><br>
    </div>


    <!-- Recently Viewed -->
    <div class="viewed">
        <div class="container">
            <div class="row">

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Show Product -->



    <!-- NO BORRAR -->
    <div">
        <div class="header_search_content">
            <div class="custom_dropdown_list">
                <span class="custom_dropdown_placeholder clc"> </span>
                <ul class="custom_list clc">
                    <li><a class="clc" href="#"></a></li>
                </ul>
            </div>
        </div>
        </div>

        <!-- Brands -->

        <div class="brands">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="brands_slider_container">

                            <!-- Brands Slider -->

                            <div class="owl-carousel owl-theme brands_slider">

                                <!-- <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_1.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_2.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_3.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_4.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_5.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_7.jpg" alt=""></div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_8.jpg" alt=""></div>
                                    </div> -->

                            </div>

                            <!-- Brands Slider Navigation -->
                            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter 

            <div class="newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                                <div class="newsletter_title_container">
                                    <div class="newsletter_icon"><img src="images/send.png" alt=""></div>
                                    <div class="newsletter_title">Sign up for Newsletter</div>
                                    <div class="newsletter_text">
                                        <p>...and receive %20 coupon for first shopping.</p>
                                    </div>
                                </div>
                                <div class="newsletter_content clearfix">
                                    <form action="#" class="newsletter_form">
                                        <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                                        <button class="newsletter_button">Subscribe</button>
                                    </form>
                                    <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->


</section>

<?php
include 'template/footer_productos.php';
?>