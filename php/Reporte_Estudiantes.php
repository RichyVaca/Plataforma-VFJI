<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">

    </script>
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="../css/estilo.css">
<body>
<!--Barra-->
<div class="container-fluid">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../img/logoTec.png" width="40" height="40" class="d-inline-block align-top logoTec" alt="">
            VFJI</img>
        </a>
        <form action="form-inline">
            <button onclick=location.href='../opciones_alumnos.html' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Regresar</button>
            <button onclick=location.href='shttps://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Salir</button>
        </form>
        </nav>
        <div class="text-center">
            <a class="textoMenu">Estudiantes del VFJI</a>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>Numero de Control</th>
              <th>CURP</th>
              <th>NOMBRE</th>
              <th>PrimerApellido</th>
              <th>SegundoApellido</th>
              <th>TELEFONO</th>
              <th>SEMESTRE</th>
              <th>CORREO</th>
              <th>OPCIONES</th>
            </tr>
          </thead>
              <tbody>

                  <?php
                    include("conexion.php");

                    $query = "SELECT * FROM alumnos where Estatus <> '0'";
                    $resultado = $conexion -> query($query);
                    while($row = $resultado -> fetch_assoc()){
                  ?>

                  <form class="" action="modificar.php" method="post">
                  <tr >
                    <td><?php echo $row['NoControl']; ?></td>
                    <td><?php echo $row['CURP']; ?></td>
                    <td><?php echo $row['Nombre']; ?></td>
                    <td><?php echo $row['PrimerApellido']; ?></td>
                    <td><?php echo $row['SegundoApellido']; ?></td>
                    <td><?php echo $row['Telefono']; ?></td>
                    <td><?php echo $row['Semestre']; ?></td>
                    <td><?php echo $row['Correo']; ?></td>
                    <td><a href="modificarAlumno.php?Id=<?php echo $row['Id']; ?>"><img width="40" height="40" src="../img/modificar.png" alt="">Modificar</a>
                    <a href="eliminarAlumnos.php?Id=<?php echo $row['Id']; ?>" style="margin-left:10px;"><img width="40" height="40"  src="../img/delete.png" alt="">Eliminar</a>
                  </tr>
                <?php
                  }
                ?>
                  </form>

              </tbody>
              </table>

              <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>

              </html>
