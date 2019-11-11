<?php
include("conexion.php");
$Id=$_REQUEST['Id'];

$query="call sp_DeleteUsuario('.$Id.',@msg)";
$resultado=$conexion -> query($query);

if ($resultado) {

  header("Location:Reporte_Profesores.php");

  // code...
}
else {
  echo "No exitoso";
}

 ?>