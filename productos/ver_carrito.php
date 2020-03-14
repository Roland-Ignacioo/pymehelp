<?php
include("../config.php");
include("../conexion.php");
include("../carrito.php");
include("../template/header1.php");
?>

<head>
    <title> Carrito - PYMEHELP</title>
</head>

<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../nosotros.php">NOSOTROS</a></li>
        <li><a href="../pymes.php">PYMEs</a></li>
        <li class="current"><a href="../productos.php">PRODUCTOS</a></li>
    </ul>

</nav>


<!-- Main -->
<section id="main"><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><br>
                <div class="content">

                    <!-- Content -->

                    <article class="box page-content">
                        <h2>Productos agregados al carrito</h2><br>

                        <?php if ($mensaje != "") { ?>
                            <div class="alert alert-danger">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>

                        <?php if (!empty($_SESSION['CARRITO'])) { ?>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="table-ttl">
                                        <th width="50%">
                                            <h3>Descripción</h3>
                                        </th>
                                        <th width="10%" class="text-center">
                                            <h3>Cantidad</h3>
                                        </th>
                                        <th width="20%" class="text-center">
                                            <h3>Precio</h3>
                                        </th>
                                        <th width="20%" class="text-center">
                                            <h3>Total</h3>
                                        </th>
                                        <th width="5%" class="text-center">
                                            <h3>--</h3>
                                        </th>
                                    </tr>

                                    <?php $total = 0; ?>
                                    <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                                        <tr>
                                            <td width="50%"><?php echo $producto['Nombre'] ?></td>
                                            <td width="10%" class="text-center"><?php echo $producto['Cantidad'] ?></td>
                                            <td width="20%" class="text-center"><?php echo number_format($producto['Precio'], 0, ',', '.') ?></td>
                                            <td width="20%" class="text-center"><?php echo number_format(($producto['Cantidad'] * $producto['Precio']), 0, ',', '.') ?></td>
                                            <td width="5%" class="text-center">

                                                <form action="" method="post">

                                                    <input type="hidden" name="Id" id="Id" value="<?php echo openssl_encrypt($producto['Id'], COD, KEY); ?>">

                                                    <button class="btn btn-danger" name="btnAccion" value="Quitar" type="submit">
                                                        Quitar
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                        <?php $total = $total + ($producto['Cantidad'] * $producto['Precio']); ?>
                                    <?php } ?>

                                    <tr class="t_f_tl">
                                        <td colspan="3" align="right">
                                            <h3>Total</h3>
                                        </td>
                                        <td align="right">
                                            <h3>$<?php echo number_format($total, 0, ',', '.') ?></h3>
                                        </td>
                                        <td></td>
                                    </tr>

                                </tbody>


                            </table>

                            <form action="ver_carrito/dato_usuario.php" method="post">
                                <div align="right"><br>
                                    <button class="btn btn-primary" type="submit" >Continuar</button>
                                </div><br>


                                <div class="text-info" align="center">
                                    <h5>
                                        Para finalizar la compra deberá hacer clic en el botón "CONTINUAR", se solicitarán algunos
                                        datos y se podrá poner en contacto con la pyme dueña del producto mediante la
                                        aplicación WhatsApp.
                                    </h5>
                                </div>

                            </form>


                        <?php } else { ?>
                            <div class="alert alert-success">
                                No hay productos en el carrito
                            </div>
                        <?php
                        session_destroy(); } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('../template/footer_productos.php')
?>