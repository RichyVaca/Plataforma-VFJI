<?php
  include("conexion.php");

  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $plantel = $_POST['plantel'];
  $carrera = $_POST['carrera'];
  $curp = $_POST['curp'];
  $correo = $_POST['correo'];
  $Linv = $_POST['Linv'];
  $grado = $_POST['grado'];

  $query = "INSERT INTO asesor(curp,nombre,telefono,carrera,correo,linea,grado,plantel)
  VALUES ('$curp','$nombre','$telefono','$carrera','$correo','$Linv','$grado','$plantel')";
  $resultado = $conexion -> query($query);

  if ($resultado) {
    header("Registro.php");
    //Aqui va aviso de que se registro correctamente

  }else{
    echo "No se ha podido registrar el asesor";
  }

 ?>
