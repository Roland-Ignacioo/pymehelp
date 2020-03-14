<?php
include 'config.php';
include 'conexion.php';
include 'carrito.php';
require('assets/fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        //$this->Image('logo_pb.png',10,8,33);
        // Style
        $this->SetFont('Arial', 'BU', 20);
        // Movernos a la derecha
        $this->Cell(70);
        // Título
        $this->Cell(50, 10, 'CARRITO DE VENTAS', 0, 0, 'C');
        // Style
        $this->Cell(30);
        $this->SetFont('Times', '', 12);
        date_default_timezone_set('America/Santiago');
        $this->Cell(50, 12, 'Fecha: ' . date('d-m-Y'), 0, 0, 'L');
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Style
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);


// realizamos la consulta para obtener el último id insertado

$consulta = "SELECT * FROM `tbl_ventas` ORDER BY id DESC LIMIT 1";
$resultado = $pdo->query($consulta);
$id_venta = $pdo->lastInsertId();



while ($row = $resultado->fetch()) {

    if ($id_venta = $row['id']) {
        $pdf->SetFont('Arial', 'B', 14);

        $pdf->Cell(190, 10, 'ID: #' . utf8_decode($row['id']), 0, 1, 'C', 0);
    }
}


// Salto de línea
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(110, 15, 'Nombre', 1, 0, 'L', 0);
$pdf->Cell(30, 15, 'Cantidad', 1, 0, 'C', 0);
$pdf->Cell(50, 15, 'Precio', 1, 1, 'C', 0);

foreach ($_SESSION['CARRITO'] as $indice => $producto) {
    $pdf->SetFont('Times', '', 12);
    $pdf->Cell(110, 10, utf8_decode($producto['Nombre']), 1, 0, 'L', 0);
    $pdf->Cell(30, 10, utf8_decode($producto['Cantidad']), 1, 0, 'C', 0);
    $pdf->Cell(50, 10, '$ ' . number_format($producto['Precio'], 0, ',', '.'), 1, 1, 'C', 0);
}
$total = 0;

foreach ($_SESSION['CARRITO'] as $indice => $producto) {
    $total = $total + ($producto['Cantidad'] * $producto['Precio']);
}

// Style
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(140, 10, 'Total      ', 1, 0, 'R', 0);
$pdf->Cell(50, 10, '$ ' . number_format($total, 0, ',', '.'), 1, 1, 'C', 0);


$pdf->Ln(30);
// Style
$pdf->SetFont('Arial', 'B', 14);
// Movernos a la derecha
//$pdf->Cell(5);
// Título
$pdf->Cell(50, 10, 'Datos comprador:', 0, 0, 'L');
// Salto de línea
$pdf->Ln(10);


// realizamos la consulta para obtener el último id insertado

$consulta = "SELECT * FROM `tbl_ventas` ORDER BY id DESC LIMIT 1";
$resultado = $pdo->query($consulta);
$id_venta = $pdo->lastInsertId();



while ($row = $resultado->fetch()) {

    if ($id_venta = $row['id']) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(30, 10, 'Nombre: ', 0, 0, 'L');
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(150, 10, utf8_decode($row['nombre']), 0, 1, 'L', 0);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(30, 10, 'Correo: ', 0, 0, 'L');
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(150, 10, utf8_decode($row['correo']), 0, 1, 'L', 0);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(30, 10, utf8_decode('N° Teléfono: '), 0, 0, 'L');
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(150, 10, utf8_decode('+569 ' . $row['telefono']), 0, 1, 'L', 0);
    }
}


$pdfdoc = $pdf->Output("", "S");
//$pdf->Output();




/* ---------------------------------------------------------------------------------------------------------------- */
/* Enviar correo */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer-master/src/Exception.php';
require 'assets/PHPMailer-master/src/PHPMailer.php';
require 'assets/PHPMailer-master/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->CharSet = "utf-8";
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'contacto.pymehelp@gmail.com';                     // SMTP username
    $mail->Password   = '_briones2011';                               // SMTP password
    $mail->SMTPSecure =  'tls';/* PHPMailer::ENCRYPTION_STARTTLS; */         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //Recipients
    $mail->setFrom('contacto.pymehelp@gmail.com', 'PymeHelp');
    $mail->addAddress('contacto.pymehelp@gmail.com');     // Agregar una variable para enviar correos a las pymes, cuando soliciten el producto
    //$mail->addAddress('ellen@example.com');               // Name is optional
    /* $mail->addReplyTo('info@example.com', 'Information');
                    $mail->addCC('cc@example.com');
                    $mail->addBCC('bcc@example.com'); */

    // realizamos la consulta para obtener el último id insertado

    $consulta = "SELECT * FROM `tbl_ventas` ORDER BY id DESC LIMIT 1";
    $resultado = $pdo->query($consulta);
    $id_venta = $pdo->lastInsertId();

    // Attachments
    while ($row = $resultado->fetch()) {

        if ($id_venta = $row['id']) {
            $mail->addStringAttachment($pdfdoc, 'venta_num_' . $row['id'] . '.pdf');
            //$pdf->Cell(190, 10, 'ID: #' . utf8_decode($row['id']), 0, 1, 'C', 0);
        }
    }


    //$mail->AddAttachment('../../pdf.php', $name = 'detalle_venta',  $encoding = 'base64', $type = 'application/pdf');
    //$mail->addAttachment('../../pdf.php');                       // Adjuntar archivo
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                    // Set email format to HTML



    $consulta = "SELECT * FROM `tbl_ventas` ORDER BY id DESC LIMIT 1";
    $resultado = $pdo->query($consulta);
    $id_venta = $pdo->lastInsertId();
    while ($asunto = $resultado->fetch()) {

        if ($id_venta = $asunto['id']) {
            $mail->Subject = 'N° de venta: ' . $asunto['id'];

            //$pdf->Cell(190, 10, 'ID: #' . utf8_decode($row['id']), 0, 1, 'C', 0);
        }
    }
    //$mail->Subject = 'N° de venta: ';
    $mail->Body    = 'Estimados, blah blah blah. Correo de Prueba';           // Cuerpo del correo, agregar variable
    //$mail->AltBody = 'Mensaje alternatio';

    $mail->send();
    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "El mensaje no se envió. Correo Error: {$mail->ErrorInfo}";
}


        


/* $numero = 56984006381;
$texto = "Mensaje de prueba";
$url_wsp = '"https://api.whatsapp.com/send?phone=' . $numero . '&text=' . $texto . '"';

echo $url_wsp; */
