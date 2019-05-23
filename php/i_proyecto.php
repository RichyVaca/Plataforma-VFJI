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
  echo '<script>alert("REGISTRO GUARDADO")</script> ';
  header("registroProyecto.php");

  echo "<script>location.href='registroProyecto.php'</script>";
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
  echo "<script>location.href='registroProyecto.php'</script>";
}




 ?>
