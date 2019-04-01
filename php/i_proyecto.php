<?php
  include("conexion.php");

  $Titulo = $_Post['titulo'];
  $Resumen = $_Post['resumen'];
  $Requisitos = $_Post['req'];
  $Integrantes = $_Post['noParticipantes'];

  $query = "INSERT INTO r_proyectos(Titulo,Resumen,Requisitos,Integrantes)"
  VALUES ('$Titulo','$Resumen','$Requisitos','$Integrantes');
  $resultado = $conexion -> query($query);

  if ($resultado) {
    header("Location: ../Proyectos.html");
  }else{
    echo "No se ha podido registrar el proyecto";
  }

 ?>
