<?php
include("conexion.php");
$curp = $_POST['curp'];
$nombre= $_POST['nombre'];
$telefono=$_POST['telefono'];
$carrera= $_POST['carrera'];
$correo= $_POST['correo'];
$linea = $_POST['linea'];

//echo $curp . $nombre . $telefono . $carrera . $correo . $linea

$query = "INSERT INTO alumnos(curp,nombre,telefono,correo,genero,plantel,carrera,semestre)
VALUES ('$CURP','$nombre','$telefono','$correo','$genero','$plantel','$carrera','$semestre')";
$resultado = $conexion -> query($query);

if ($resultado) {
  header("registroAlumnos.php");
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
}



 ?>
