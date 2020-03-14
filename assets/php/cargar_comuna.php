<?php

require_once '../../conexion_cl.php';

function getComunas(){
  $mysqli = getConn();
  $id = $_POST['id_comuna'];
  $query = "SELECT * FROM `comuna` WHERE id_comuna = $id";
  $result = $mysqli->query($query);
  $comunas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $comunas .= "<option value='$row[id]'>$row[nombre]</option>";
  }
  return $comunas;
}
echo getComunas();
