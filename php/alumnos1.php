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

  //echo $numeroco." ".$CURP." ".$nombre." ".$primerA." ".$segundoA." ".$genero." ".$telefono." ".$plantel." ".$semestre." ".$correo." ".$carrera

 $query = "INSERT INTO alumnos(NoControl,CURP,Nombre,PrimerApellido,SegundoApellido,Genero,Telefono,Plantel,Semestre,Correo,Carrera)
  VALUES ('$numeroco','$CURP','$nombre','$primerA','$segundoA',$genero,'$telefono','$plantel','$semestre','$correo','$carrera')";
  $resultado = $conexion -> query($query);

  if ($resultado) {
    echo '<script>alert("REGISTRO GUARDADO")</script> ';
    header("registroProyecto.php");

    echo "<script>location.href='registroAlumnos.php'</script>";
    //Aqui va aviso de que se registro correctamente

  }else{
    echo "Error en la conexion";
    echo "<script>location.href='registroAlumnos.php'</script>";
  }



 ?>
