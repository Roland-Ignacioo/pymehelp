<?php
$buscar = $_POST['buscar'];
$sentencia = "SELECT * FROM tbl_productos Nombre LIKE '%$buscar%' Descripcion LIKE %$buscar%";
$resultado = $pdo->query($sentencia);

if ($resultado->num_rows>=1) {
            
} else {
    echo "No hemos encontrado nungún registro con la palabra ".$buscar;
}
