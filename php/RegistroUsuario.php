<?php
  include("conexion.php");

  $nombre = $_POST['nombre'];//
  $telefono = $_POST['telefono'];//
  $plantel = $_POST['plantel'];
  $carrera = $_POST['carrera'];//
  $password = $_POST['password'];
  $curp = $_POST['curp'];//
  $correo = $_POST['correo'];//
  $Linv = $_POST['Linv'];//
  $password2 = $_POST['password2'];
  $grado = $_POST['grado'];

  $query = "INSERT INTO asesor(curp,nombre,telefono,carrera,correo,linea,plantel,grado,password,password2)
  VALUES ('$curp','$nombre','$telefono','$carrera','$correo','$Linv','$plantel','$grado','$password','$password2')";
  $resultado = $conexion -> query($query);

  if ($resultado) {
    header("Registro.php");
    //Aqui va aviso de que se registro correctamente

  }else{
    echo "No se ha podido registrar el asesor";
  }

 ?>
