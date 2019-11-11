<?php
  include("conexion.php");
  $id = $_POST['id'];
  $CURP = $_POST['curp'];
  $nombre = $_POST['nombre'];
  $primerA = $_POST['primerA'];
  $segundoA = $_POST['segundoA'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $fecha = $_POST['fecha'];
  $programa = $_POST['programa'];
  $linea = $_POST['linea'];
  $especialidad = $_POST['especialidad'];
  $plantel = $_POST['plantel'];
  

  $query = "CALL sp_UpdateUsuario('".$id."','".$CURP."','".$nombre."','".$primerA."','".$segundoA."','".$telefono."','".$plantel."','".$correo."','".$fecha."','".$programa."','".$linea."','".$especialidad."');";
  $resultado = $conexion -> query($query);


  if ($resultado) {
    echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
    header("tabla_Asesor.php");

    echo "<script>location.href='tabla_Asesor.php'</script>";
    //Aqui va aviso de que se registro correctamente

  }else{
    echo '<script>alert("Error en la actualización")</script> ';
    echo "<script>location.href='tabla_asesor.php'</script>";
  }