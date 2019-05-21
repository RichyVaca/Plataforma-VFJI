<?php
include("conexion.php");

$titulo= $_POST['Titulo'];
$resumen= $_POST['Resumen'];
$requisitos=$_POST['Requisitos'];
$numero= $_POST['Integrantes'];

$query = "INSERT INTO proyectos(Titulo,Resumen,Requisitos,Integrantes)
VALUES ('$titulo','$resumen','$requisitos','$numero')";
$resultado = $conexion -> query($query);

if ($resultado) {
  header("registroProyecto.php");
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
}




 ?>
