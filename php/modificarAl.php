<?php
  include("conexion.php");
  $id = $_POST['id'];
  $noControl = $_POST['numeroco'];
  $CURP = $_POST['curp']; //listo
  $nombre = $_POST['nombre'];//listo
  $genero = $_POST['genero'];//listo
  $primerA = $_POST['primerA'];
  $segundoA = $_POST['segundoA'];
  $telefono = $_POST['telefono'];//listo
  $plantel = $_POST['plantel']; //listo
  $carrera = $_POST['carrera'];//listo
  $semestre = $_POST['semestre'];//listo
  $correo = $_POST['correo'];

  $query = "CALL sp_UpdateAlumno('".$id."','".$CURP."','".$nombre."','".$primerA."','".$segundoA."','".$genero."','".$telefono."','".$plantel."','.$semestre.','".$correo."','".$carrera."','".$noControl."');";
  $resultado = $conexion -> query($query);


  if ($resultado) {
    echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
    header("Reporte_Estudiantes.php");

    echo "<script>location.href='Reporte_Estudiantes.php'</script>";
    //Aqui va aviso de que se registro correctamente

  }else{
    echo '<script>alert("Error en la actualización")</script> ';
    echo "<script>location.href='Reporte_Estudiantes.php'</script>";
  }