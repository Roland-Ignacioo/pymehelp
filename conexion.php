<?php

/* Conexion para base de datos Pyme_Help */
$servidor="mysql:dbname=".BD;

/* $contraseña="pymehelp";
$usuario="id12621804_pymehelp";
$nombrebd="id12621804_bd"; */

try {
    /* $base_datos = new PDO('mysql:host=localhost;dbname'.$nombrebd, $usuario, $contraseña,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); */

    $pdo = new PDO($servidor,USUARIO,PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

    /* echo "<script>alert('La conexion es correcta')</script>"; */
} catch (Exception $e) {
    echo "<script>alert('Fallo')</script>". $e->getMessage();
}

?>




