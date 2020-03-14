<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer-master/src/Exception.php';
require 'assets/PHPMailer-master/src/PHPMailer.php';
require 'assets/PHPMailer-master/src/SMTP.php';
/* Enviar correo */

if (isset($_POST['enviar_correo'])) {
    if (!empty($_POST)) {

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];


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
            
            $body = "Nombre: " . $nombre . "<br>Correo: " . $email .
                "<br>Número Teléfono: " . $telefono . "<br>Mensaje: " . $mensaje;


            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {

                //Server settings
                $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Send using SMTP
                $mail->CharSet = "utf-8";
                $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'contacto.pymehelp@gmail.com';          // SMTP username
                $mail->Password   = '_briones2011';                         // SMTP password
                $mail->SMTPSecure =  'tls';                                 // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                //Recipients
                $mail->setFrom('contacto.pymehelp@gmail.com', $nombre);
                $mail->addAddress('contacto.pymehelp@gmail.com', $nombre);
                // Content
                $mail->isHTML(true);                                        // Set email format to HTML

                $mail->Subject = 'Contacto: ' . $nombre;
                $mail->Body    = $body;                                     // Cuerpo del correo, agregar variable
                //$mail->AltBody = 'Mensaje alternativo';

                $mail->send();
                echo '<div class="container"><div class="alert alert-success"> El mensaje se envió correctamente! </div></div>';
            } catch (Exception $e) {
                echo '<div class="container"><div class="alert alert-danger"> El mensaje no se envió! Correo Error: {$mail->ErrorInfo}</div></div>';
            }
        } else {
            echo '<div class="container"><div class="alert alert-danger"> Verficar el ReCaptcha</div></div>';
        }

        // Programar el ReCaptcha


    }
}
