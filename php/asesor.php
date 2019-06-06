<?php
include("conexion.php");
$curp = $_POST['curp'];
$nombre= $_POST['nombre'];
$primerA = $_POST['primerAp'];
$segundoA = $_POST['segundoAp'];
$telefono=$_POST['telefono'];
$carrera= $_POST['carrera'];
$correo= $_POST['correo'];
$linea2 = $_POST['lineaI'];
$grado= $_POST['grado'];
$plantel =$_POST['plantel'];
$fecha = $_POST['fecha'];


//echo $curp . $nombre . $telefono . $carrera . $correo . $linea

$query = "CALL sp_InsertUsuario('".$curp."','".$nombre."','".$primerA."','".$segundoA."','".$telefono."','".$plantel."','".$correo."','".$fecha."',)"

if ($resultado) {
  header("Registro.php");
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
}



 ?>
