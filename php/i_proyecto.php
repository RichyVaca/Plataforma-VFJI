<?php
include("conexion.php");

$titulo= $_POST['titulo'];
$resumen= $_POST['resumen'];
$requisitos=$_POST['req'];
$numero= $_POST['noParticipantes'];

$query = "INSERT INTO proyecto(titulo,resumen,requisitos,nalumno)
VALUES ('$titulo','$resumen','$requisitos','$numero')";
$resultado = $conexion -> query($query);

if ($resultado) {
  header("registroProyecto.php");
  //Aqui va aviso de que se registro correctamente

}else{
  echo "No se ha podido registrar el proyecto";
}
<<<<<<< HEAD



=======
>>>>>>> 3e247a897e0743cac59e272164aa95e70588716c

 ?>
