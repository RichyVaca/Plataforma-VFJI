<?php
include("conexion.php");

$titulo= $_POST['Titulo'];
$resumen= $_POST['Resumen'];
$requisitos=$_POST['Requisitos'];
$numero= $_POST['Integrantes'];

$query = "CALL sp_InsertarProyecto('".$titulo."','".$resumen."','".$requisitos."','.$numero.');";

if (mysqli_query($conexion, $query)) {

  echo '<script>alert("REGISTRO GUARDADO")</script> ';
  header("registroProyecto.php");

  echo "<script>location.href='registroProyecto.php'</script>";
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
  echo "<script>location.href='registroProyecto.php'</script>";
}




 ?>
