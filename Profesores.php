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
    <link rel="stylesheet" href="css/estilo.css">
<body>
<!--Barra-->
<div class="container-fluid">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logoTec.png" width="40" height="40" class="d-inline-block align-top logoTec" alt="">
            VFJI</img>
        </a>
        <form action="form-inline">
            <button onclick=location.href='../Reportes.html' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Regresar</button>
            <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Salir</button>
        </form>
        </nav>
        <div class="text-center">
            <a class="textoMenu">Profesores de VFJI</a>
        </div>

        <div class="container-fluid">
            <div class="text-center">
                <div class="col-sm-12">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nombre Profesor</th>
                              <th>Número de Proyectos</th>
                              <th>Carrera</th>
                            </tr>
                        </thead>
                       <tbody>
                           <?php
                           //Conexión con la DB
                           //Preguntarle a Zúñiga como hacer la consulta
                           //Aquí se genera la consulta
                            ?>
                           <tr>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                           </tr>
                           <!-- <?php
                            }
                            //Aquí solo es el corchete o llave que cierra el while (Pregruntar a Zúñiga)
                            ?> -->
                       </tbody>
                    </table>
                </div>
            </div>
        </div>


</body>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
</html>
