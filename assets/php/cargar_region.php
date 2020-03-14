<?php 

require_once '../../conexion_cl.php';

function getListaReg(){
  $mysqli = getConn();
  $query = 'SELECT * FROM `regiones`';
  $result = $mysqli->query($query);
  $listas = '<option value="0">Seleccionar</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id_region]'>$row[region]</option>";
  }
  return $listas;
}
echo getListaReg();