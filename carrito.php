<?php
session_start();

$mensaje_agregado = "";
$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {

        case 'Agregar':

            /* ID */
            if (is_numeric(openssl_decrypt($_POST['Id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['Id'], COD, KEY);
                //$mensaje .= "Ok... ID correcto " . $ID;
            } else {
                $mensaje .= "Ups!... ID incorrecto " . $ID;
            }

            /* Nombre */
            if (is_string(openssl_decrypt($_POST['Nombre'], COD, KEY))) {
                $NOMBRE = openssl_decrypt($_POST['Nombre'], COD, KEY);
                //$mensaje .= "Ok... Nombre correcto ";
            } else {
                $mensaje .= "Ups!... Nombre incorrecto ";
                break;
            }

            /* Precio */
            if (is_numeric(openssl_decrypt($_POST['Precio'], COD, KEY))) {
                $PRECIO = openssl_decrypt($_POST['Precio'], COD, KEY);
                //$mensaje .= "Ok... Precio correcto ";
            } else {
                $mensaje .= "Ups!... Precio incorrecto";
                break;
            }

            /* Categoría */
            if (is_numeric(openssl_decrypt($_POST['categoria'], COD, KEY))) {
                $CATEGORIA = openssl_decrypt($_POST['categoria'], COD, KEY);
                //$mensaje .= "Ok... Precio correcto ";
            } else {
                $mensaje .= "Ups!... Categoría incorrecta";
                break;
            }

            /* Cantidad */
            //$cant_prod=$_POST['cantidad'];
            if (is_numeric(openssl_decrypt($_POST['Cantidad'], COD, KEY))) {
                $CANTIDAD = openssl_decrypt($_POST['Cantidad'], COD, KEY);
                //$mensaje .= "Ok... Cantidad correcta";
            } else {
                $mensaje .= "Ups!... Cantidad incorrecta";
                break;
            }


            if (!isset($_SESSION['CARRITO'])) {
                $producto = array(
                    'Id' => $ID,
                    'Nombre' => $NOMBRE,
                    'Precio' => $PRECIO,
                    'categoria' => $CATEGORIA,
                    'Cantidad' => $CANTIDAD
                );
                $_SESSION['CARRITO'][0] = $producto;
                $mensaje = "Producto agregado al carrito.";
            } else {

                $idProductos = array_column($_SESSION['CARRITO'], "Id");
                if (in_array($ID, $idProductos)) {
                    $mensaje_agregado = "El producto ya ha sido agregado";
                } else {

                    $numero_productos = count($_SESSION['CARRITO']);
                    $producto = array(
                        'Id' => $ID,
                        'Nombre' => $NOMBRE,
                        'Precio' => $PRECIO,
                        'categoria' => $CATEGORIA,
                        'Cantidad' => $CANTIDAD
                    );
                    $_SESSION['CARRITO'][$numero_productos] = $producto;
                    $mensaje = "Producto agregado al carrito.";
                }
            }
            //$mensaje= print_r($_SESSION,true);


            break;


        case "Quitar":

            if (is_numeric(openssl_decrypt($_POST['Id'], COD, KEY))) {
                $ID = openssl_decrypt($_POST['Id'], COD, KEY);

                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                    if ($producto['Id'] == $ID) {
                        unset($_SESSION['CARRITO'][$indice]);
                        $mensaje = "Producto borrado.";
                    }
                }
            } else {
                $mensaje .= "Ups!... ID incorrecto " . $ID;
            }

            break;
    }
}
