<?php
include("conexion.php");
$id = $_POST['Id'];
$titulo= $_POST['titulo'];
$resumen= $_POST['Resumen'];
$requisitos=$_POST['Requisitos'];
$numero= $_POST['Integrantes'];

$query = "CALL sp_UpdateProyecto('".$id."','".$titulo."','".$resumen."','".$requisitos."','.$numero.',@msg);";
if (mysqli_query($conexion, $query)) {

  echo '<script>alert("REGISTRO GUARDADO")</script> ';
  header("modificarProyecto.php");

  echo "<script>location.href='tabla_proyectos.php'</script>";
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
  echo "<script>location.href='tabla_proyectos.php'</script>";
}




 ?>
