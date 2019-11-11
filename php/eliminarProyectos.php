<?php
include("conexion.php");
$Id=$_REQUEST['Id'];

$query="call sp_DeleteProyecto('.$Id.',@msg)";
$resultado=$conexion -> query($query);

if ($resultado) {

  header("Location:tabla_proyectos.php");

  // code...
}
else {
  echo "No exitoso";
}

 ?>