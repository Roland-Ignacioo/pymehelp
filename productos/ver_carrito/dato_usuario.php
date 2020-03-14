<?php
include("../../config.php");
include("../../conexion.php");
/* include("../../conexion_cl.php"); */
include("../../carrito.php");
include("../../template/header2.php");
?>

<head>
    <title>Carrito - Ingresa datos del usuario | PYMEHELP</title>
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


<?php

/* if (!empty($_POST)) {

    $nombre = $_POST['nombre_usuario'];
    $email = $_POST['email_usuario'];
    $telefono = $_POST['telefono_usuario'];


    // Programar el ReCaptcha
    $captcha = $_POST['g-recaptcha-response'];
    $secret = '6LdftdIUAAAAAHZvGUtwO0CCcOTjAZn3HohaPekn';
    if (!$captcha) {
        //echo '<div class="container"><div class="alert alert-danger"> Verficar el ReCaptcha</div></div>';
    }
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
    //var_dump($response);
    $arr = json_decode($response, true);

    if ($arr['success']) {
        //echo '<div class="container"><div class="alert alert-success"> El mensaje se envió correctamente! </div></div>';
    }
} */

?>


<!-- Main -->
<section id="main"><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><br>
                <div class="content">

                    <h2>INGRESA TUS DATOS</h2><br>

                    <form action="enviar_mensaje.php" method="post" class="needs-validation" novalidate>
                        <div class="form-row">

                            <!-- NOMBRE -->
                            <div class="col-md-4 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <span class="fas fa-user-alt"></span>
                                        </span>
                                    </div>
                                    <input name="nombre_usuario" type="text" class="form-control" id="nombre validationCustom01" aria-describedby="inputGroupPrepend" placeholder="Nombre Completo" required>
                                    <div class="invalid-feedback">
                                        Ingresa tu Nombre
                                    </div>
                                </div>
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-4 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <span class="fas fa-envelope"></span>
                                        </span>
                                    </div>
                                    <input name="email_usuario" type="text" class="form-control" id="email validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email" required>
                                    <div class="invalid-feedback">
                                        Ingresa tu Email
                                    </div>
                                </div>
                            </div>

                            <!-- NÚMERO -->
                            <div class="col-md-4 mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <span class="fas fa-mobile"></span>
                                        </span>
                                    </div>
                                    <input name="telefono_usuario" type="text" class="form-control" id="telefono validationCustom02" aria-describedby="inputGroupPrepend" placeholder="Número Teléfono" required>
                                    <div class="invalid-feedback">
                                        Ingresa tu Número de teléfono. 8 dígitos.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- FALLA AL HACER LOS COMBOBOX DINÁMICOS
                            *error al usar ajax, no lo pesca.
                        --- REVISAR ---
                        -ARCHIVOS:
                            ->JS: assets/js/cbx_din.php
                            ->PHP: assets/php/cargar_comuna.php y cargar_region.php
                            ->WEB: /conexion_cl.php -->

                        <!-- <div class="form-row"> -->
                        <!-- <div class="col-md-6 mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div> -->

                        <!-- Región -->
                        <!-- <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Región</label>

                                <select id="lista_region" name="lista_region" class="form-control">
                                </select>

                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div> -->

                        <!-- Comuna -->
                        <!-- <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Comuna</label>
                                
                                <select id="comuna" name="comuna" class="form-control">
                                </select>

                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div> -->




                        <!-- <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div> -->

                        <!-- </div> -->

                        <!-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div> -->


                        <br>
                        <div class="text-info" align="center"><br>
                            <h4>
                                Continúa solo si estás seguro de comprar.
                            </h4>
                            <!-- ReCaptcha
                            <div class="col-sm-12">
                                <div class="g-recaptcha" data-sitekey="6LdftdIUAAAAAJzm-1rtvvy_FVoR0Dw14zMq1BU-"></div>
                            </div>  -->
                        </div><br>

                        <div align="center">
                            <button class="btn btn-primary" type="submit">Continuar</button>
                        </div>

                    </form><br>





                    <!-- Script valida los campos -->
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>

                </div>
            </div>

            <div class="text-info" align="center"><br>
                <h5>
                    *Para finalizar la compra, favor llene todos los campos con sus datos. Luego deberá hacer clic
                    en el botón "continuar" y se podrá poner en contacto con la pyme dueña del producto
                    mediante la aplicación WhatsApp.
                </h5>
            </div>

        </div>
    </div>

</section>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/js/cbx_din.js"></script> -->


<?php
include('../../template/footer_productos.php')
?>



<!-- Otro intento -->
<?php
/* $sentencia = "SELECT id_region, region FROM regiones ORDER BY region ASC";
                                $resultado = $pdo->query($sentencia); */
?>
<!-- <select class="custom-select" id="cl_region validationCustom04" required name="cl_region">
                                    <option value="">Seleccionar</option> -->
<?php /* while ($row = $resultado->fetch()) { ?>
                                        <option value="<?php echo $row['id_region']; ?>">
                                            <?php echo $row['region'];  */ ?>
<!-- </option> -->
<?php /* } */ ?>
<!-- </select> -->