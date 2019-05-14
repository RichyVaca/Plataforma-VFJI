<?php
include("conexion.php");
$curp = $_POST['curp'];
$nombre= $_POST['nombre'];
$telefono=$_POST['telefono'];
$carrera= $_POST['carrera'];
$correo= $_POST['correo'];
$linea2 = $_POST['linea2'];
$grado= $_POST['grado'];
$plantel =$_POST['plantel'];


//echo $curp . $nombre . $telefono . $carrera . $correo . $linea

$query = "INSERT INTO asesor(curp,nombre,telefono,carrera,correo,linea,grado,plantel)
VALUES ('$curp','$nombre','$telefono','$carrera','$correo','$linea2a','$grado','$plantel')";
$resultado = $conexion -> query($query);

if ($resultado) {
  header("Registro.php");
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
}



 ?>
