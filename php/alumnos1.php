  <?php
  include("conexion.php");

  $CURP = $_POST['curp']; //listo
  $nombre = $_POST['nombre'];//listo
  $genero = $_POST['genero'];//listo
  $numeroco = $_POST['numeroco'];
  $primerA = $_POST['primerA'];
  $segundoA = $_POST['segundoA'];
  $telefono = $_POST['telefono'];//listo
  $plantel = $_POST['plantel']; //listo
  $carrera = $_POST['carrera'];//listo
  $semestre = $_POST['semestre'];//listo
  $correo = $_POST['correo'];

  $query = "CALL sp_InsertAlumno('".$numeroco."','".$CURP."','".$nombre."','".$primerA."','".$segundoA."','".$genero."','".$telefono."','".$plantel."','.$semestre.','".$correo."','".$carrera."',@idalumno);";
  $resultado = $conexion -> query($query);


  if ($resultado) {
    echo '<script>alert("REGISTRO GUARDADO")</script> ';
    header("registroProyecto.php");

    echo "<script>location.href='registroAlumnos.php'</script>";
    //Aqui va aviso de que se registro correctamente

  }else{
    echo '<script>alert("Error en el registro")</script> ';
    echo "<script>location.href='registroAlumnos.php'</script>";
  }



 ?>
