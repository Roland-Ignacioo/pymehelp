<?php
//
include("../../config.php");
include("../../conexion.php");
include("../../carrito.php");
include("../../template/header2.php");
?>

<head>
    <title> Carrito - Enviar Mensaje | PYMEHELP</title>
</head>

<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="../../nosotros.php">NOSOTROS</a></li>
        <li><a href="../../pymes.php">PYMEs</a></li>
        <li class="current"><a href="../../productos.php">PRODUCTOS</a></li>
    </ul>
</nav>



<section id="main"><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><br>
                <div class="content">
                    <?php
                    if ($_POST) {
                        $total = 0;
                        $SID = session_id();
                        $nombre = $_POST['nombre_usuario'];
                        $correo = $_POST['email_usuario'];
                        $telefono = $_POST['telefono_usuario'];


                        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                            $total = $total + ($producto['Precio'] * $producto['Cantidad']);
                        }

                        $sentencia = $pdo->prepare("INSERT INTO `tbl_ventas` (`id`, `clave_transaccion`, `fecha`, `nombre`, `correo`, `telefono`, `region`, `comuna`, `total`, `status`) 
                        VALUES (NULL, :clave_transaccion, NOW(), :nombre, :correo, :telefono, 'Valparaíso', 'Valparaíso', :total, 'Pendiente');");

                        $sentencia->bindParam(":clave_transaccion", $SID);
                        $sentencia->bindParam(":nombre", $nombre);
                        $sentencia->bindParam(":correo", $correo);
                        $sentencia->bindParam(":telefono", $telefono);
                        $sentencia->bindParam(":total", $total);
                        $sentencia->execute();

                        $id_venta = $pdo->lastInsertId();


                        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                            $sentencia = $pdo->prepare("INSERT INTO 
                            `tbl_detalle_venta` (`id`, `id_venta`, `id_producto`, `precio_uni`, `cantidad`, `descargado`) 
                            VALUES (NULL, :id_venta, :id_producto, :precio_uni, :cantidad, '0');");


                            $sentencia->bindParam(":id_venta", $id_venta);
                            $sentencia->bindParam(":id_producto", $producto['Id']);
                            $sentencia->bindParam(":precio_uni", $producto['Precio']);
                            $sentencia->bindParam(":cantidad", $producto['Cantidad']);
                            $sentencia->execute();
                        }

                        /* echo "<h3>" . $total . "</h3>"; */
                    }
                    ?>

                    <div class="jumbotron" align="center">
                        <h1 class="display-4">¡LISTO!</h1>
                        <hr class="my-4">
                        <span class="lead">
                            <p>Para comunicarte con la PYME correspondiente solo debes hacer click en "ENVIAR MENSAJE" .
                            </p>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="table-ttl">
                                        <th width="80%">
                                            <h3>Descripción</h3>
                                        </th>
                                        <th width="20%" class="text-center">
                                            <h3>Cantidad</h3>
                                        </th>
                                    </tr>

                                    <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                                        <tr>
                                            <td width="50%">
                                                <span class="prod_compra"><?php echo $producto['Nombre'] ?></span>
                                            </td>
                                            <td width="10%" class="text-center"><?php echo $producto['Cantidad'] ?></td>

                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr class="t_f_tl">
                                        <td colspan="1" align="right">
                                            <h3>Total</h3>
                                        </td>
                                        <td align="center">
                                            <h3>$<span class="total_compra"><?php echo number_format($total, 0, ',', '.'); ?></span></h3>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </span><br>

                        <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
                        <!-- <form action="../../pdf.php" method="get">
                            <button class="btn btn-primary" type="submit" value="enviar">
                                    ENVIAR MENSAJE
                            </button>
                        </form> -->
                        <?php
                        $numero = 56984006381;
                        $texto = 'Mensaje de prueba'; //modificar texto
                        $url_wsp = '"https://api.whatsapp.com/send?phone=' . $numero . '&text=' . $texto . '"';
                        ?>
                        <a href=<?php echo $url_wsp;?> onclick="location.href = '../../pdf.php'">Enviar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- https://api.whatsapp.com/send?phone=56984006381&text=##MSG## 
class="calls-counter whatsapp" -->




<!-- API DE WHATSAPP,
        SCRIPT PARA LLENAR TEXTO CON EL PRODUCTO QUE DESEA COMPRAR 
<script>
   
    var b = Array.from(document.querySelector(".prod_compra").textContent).slice(0, 50).join("");
    var c = Array.from(document.querySelector(".total_compra").textContent).slice(0, 25).join("");
    var preText = "Hola 😊✌, vi este/os productos en PYMEHELP.CL ✅ ";
    var postText = " y quiero comprarlo/s 🎁";

    function getWapptext() {
        return preText + ' "' + /* "\n" + */ b + '(...) a $ ' + encodeURI(c) + postText;
    }

    Array.from(document.querySelectorAll(".calls-counter.whatsapp")).forEach(function(element) {
        if (element.hasAttribute("data-message")) {
            element.setAttribute("data-message", getWapptext());
        } else {
            element.setAttribute("href", element.getAttribute("href").replace("##MSG##", getWapptext()));
        }
    });

</script>-->

<?php
include('../../template/footer_productos.php')
?>