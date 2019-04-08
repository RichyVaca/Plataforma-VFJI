<?php
  include("conexion.php");

  $CURP = $_POST['curp']; //listo
  $nombre = $_POST['nombre'];//listo
  $genero = $_POST['genero'];//listo
  $telefono = $_POST['telefono'];//listo
  $plantel = $_POST['plantel']; //listo
  $carrera = $_POST['carrera'];//listo
  $semestre = $_POST['semestre'];//listo
  $correo = $_POST['correo'];


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
