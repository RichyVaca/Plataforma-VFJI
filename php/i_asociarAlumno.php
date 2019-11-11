<?php
  include("conexion.php");
  $idProyecto = $_REQUEST['Idg'];
  $correoAs = $_POST['asesorAs'];
  $noControl = $_POST['alumnoAl'];
  $rolAlumno = 1;
  $rolAsesor = 0;
  $rol = "Colaborador";
  $query = "CALL sp_AsociacionProyecto('".$idProyecto."','".$noControl."','.$rolAlumno.','".$correoAs."','".$rol."');";
  $query2 = "CALL sp_AsociacionProyecto('".$idProyecto."','".$noControl."','.$rolAsesor.','".$correoAs."','".$rol."');";
  
  $resultado = $conexion -> query($query);
  $resultado2 = $conexion -> query($query2);

  if ($resultado && $resultado2) {
    echo '<script>alert("ALUMNO Y MAESTRO ASOCIADOS")</script> ';
    header("tabla_proyectos.php");

    echo "<script>location.href='tabla_proyectos.php'</script>";
    //Aqui va aviso de que se registro correctamente

  }else{
    echo '<script>alert("Error en la asociacion")</script> ';
    echo "<script>location.href='tabla_proyectos.php'</script>";
  }
?>