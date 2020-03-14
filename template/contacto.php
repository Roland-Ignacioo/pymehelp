<?php
include 'enviar_correo.php';
?>

<!-- Contacto -->
<div class="col-sm-12">
    <section class="container box style3">
        <h2 class="major"><span>CONTACTO</span></h2>
        <header>
            <h2>¿Quieres publicar tus productos en nuestra página?</h2>
            <p>Llenas los campos con tus datos y nos pondremos en contacto en menos de 24 horas.</p>
        </header>

        <!-- FORMULARIO -->
        <form method="post">
            <div class="row gtr-50">

                <!-- NOMBRE -->
                <div class="col-md-4 mb-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">
                                <span class="fas fa-user-alt"></span>
                            </span>
                        </div>
                        <input name="nombre" type="text" class="form-control" id="nombre validationCustom01" aria-describedby="inputGroupPrepend" placeholder="Nombre Completo" required>
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
                        <input name="email" type="text" class="form-control" id="email validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email" required>
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
                        <input name="telefono" type="text" class="form-control" id="telefono validationCustom02" aria-describedby="inputGroupPrepend" placeholder="Número Teléfono" required>
                        <div class="invalid-feedback">
                            Ingresa tu Número de teléfono. 8 dígitos.
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3" required="required" data-error="Ingresar mensaje."></textarea>
                </div>

                <!-- ReCaptcha -->
                <div class="col-sm-12">
                    <div class="g-recaptcha" data-sitekey="6LdftdIUAAAAAJzm-1rtvvy_FVoR0Dw14zMq1BU-" ></div>
                </div>

                <div class="col-sm-12">
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" name="enviar_correo" /></li>
                    </ul>
                </div>
            </div>
        </form>

    </section>

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


<script src="https://www.google.com/recaptcha/api.js" async defer></script>