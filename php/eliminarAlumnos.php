<?php
include("conexion.php");
$Id=$_REQUEST['Id'];

$query="call sp_DeleteAlumno('.$Id.',@msg)";
$resultado=$conexion -> query($query);

if ($resultado) {

  header("Location:Reporte_Estudiantes.php");

  // code...
}
else {
  echo "No exitoso";
}

 ?>
