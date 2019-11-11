<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.4.0.min.js"></script>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
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
            <button onclick=location.href='../opciones_proyecto.html' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Regresar</button>
            <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Salir</button>
        </form>
        </nav>
        <div class="text-center">
            <a class="textoMenu">Proyectos de VFJI</a>
        </div>

        <div class="container-fluid">
            <div class="text-center">
                <div class="col-xl-12">
                    <table >
                      <thead>
                        <tr>
                          <th>TITULO</th>
                          <th>RESUMEN</th>
                          <th>REQUISITOS</th>
                          <th>NUMERO DE PARTICIPANTES</th>
                          <th>PERIODO</th>
                          <th>OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include("conexion.php");

                          $query = "SELECT * FROM proyectos where Estatus <> '0'";
                          $resultado = $conexion -> query($query);
                          while($row = $resultado -> fetch_assoc()){
                        ?>
                        <tr >
                          <td><?php echo $row['Titulo']; ?></td>
                          <td><?php echo $row['Resumen']; ?></td>
                          <td><?php echo $row['Requisitos']; ?></td>
                          <td><?php echo $row['Integrantes']; ?></td>
                          <td><?php echo $row['Periodo']; ?></td>
                          <td><a href="modificarProyecto.php?Id=<?php echo $row['Id_Proyecto']; ?>"><img src="../img/modificar.png" width="40" height="40" alt="">Editar</a>
                          <a href="eliminarProyectos.php?Id=<?php echo $row['Id_Proyecto']; ?>" style="margin-left:10px;"><img width="40" height="40" src="../img/delete.png" alt="">Eliminar</a>
                          <a href="Asociar.php?Id=<?php echo $row['Id_Proyecto']; ?>" style="margin-left:10px;"><img width="40" height="40" src="../img/boton-de-anadir.png" alt="">Asociar</a>
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