<?php
include("conexion.php");
$curp = $_POST['curp'];
$nombre= $_POST['nombre'];
$primerA = $_POST['primerAp'];
$segundoA = $_POST['segundoAp'];
$telefono=$_POST['telefono'];
$programa= $_POST['programa'];
$correo= $_POST['correo'];
$linea2 = $_POST['lineaI'];
$plantel =$_POST['plantel'];
$fecha = $_POST['fecha'];
$especialidad = $_POST['especialidad'];

$query = "CALL sp_InsertUsuario('".$curp."','".$nombre."','".$primerA."','".$segundoA."','".$telefono."','".$plantel."','".$correo."','".$fecha."','".$programa."','".$linea2."','".$especialidad."', @idusuario);";
$resultado = $conexion -> query($query);

if ($resultado) {
  echo '<script>alert("REGISTRO GUARDADO")</script> ';
  header("Registro.php");

  echo "<script>location.href='registroAlumnos.php'</script>";

}else{
  echo '<script>alert("Error en el registro")</script> ';
  echo "<script>location.href='Registro.php'</script>";
}



 ?>