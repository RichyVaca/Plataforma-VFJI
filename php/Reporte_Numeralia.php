    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <button onclick=location.href='../Reportes.html' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Regresar</button>
            <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Salir</button>
        </form>
        </nav>

        <div class="text-center">
            <a class="textoMenu">Numeralia de VFJI</a>
        </div>
            <!-- Creacion de la tabla-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <table class="table-hover">
                            <tr>
                                <th>Profesores</th>
                                <th>Cantidad</th>
                            </tr>
                            <tr>
                                <td>Administración</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Administracion FROM usuarios where Programa  = 'Administracion'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Lic. Administracion'];
                                  }else{
                                    echo "0";
                                  } ?> </td>
                            </tr>
                            <tr>
                                <td>Ambiental</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Ambiental FROM usuarios where Programa  = 'Ambiental'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Ambiental'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Arquitectura</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Arquitectura FROM usuarios where Programa  = 'Arquitectura'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Arquitectura'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Bioquímica</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Bioquimica FROM usuarios where Programa  = 'Bioquímica'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Bioquímica'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Contador</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Contador FROM usuarios where Programa  = 'Contador'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Contador'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Gestión</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Gestion FROM usuarios where Programa  = 'Gestión Empresarial'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Gestión'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Industrial</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Industrial FROM usuarios where Programa  = 'Industrial'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Industrial'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Informática</td>
                                <td> <?php
                                $query = "SELECT count(*) as Informatica FROM usuarios where Programa  = 'Ing. Informatica'  GROUP BY Programa";
                                include("conexion.php");
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Ing. Informatica'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Mecatrónica</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Mecatronica FROM usuarios where Programa  = 'Mecatrónica'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Mecatrónica'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Sitemas</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Sistemas FROM usuarios where Programa  = 'Sistemas'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Sistemas'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </table>

                    </div>

                    <div class="col-sm-2">
                        <table class="table-hover">
                             <tr>
                                <th>Alumnos</th>
                                <th>Cantidad</th>
                            </tr>
                            <tr>
                                <td>Administración</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Administracion FROM alumnos where Carrera  = 'Administración'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Administración'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Ambiental</td>
                                <td><?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Ambiental FROM alumnos where Carrera  = 'Administración'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Ambiental'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Arquitectura</td>
                                <td><?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Arquitectura FROM usuarios where Programa  = 'Arquitectura'  GROUP BY Programa";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Arquitectura'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Bioquímica</td>
                                <td><?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Bioquimica FROM alumnos where Carrera  = 'Bioquímica'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Bioquímica'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Contabilidad</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Contabilidad FROM alumnos where Carrera  = 'Contabilidad'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Contabilidad'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Gestión</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Gestion FROM alumnos where Carrera  = 'Gestión'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Gestión'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Industrial</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Industrial FROM alumnos where Carrera  = 'Industrial'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Industrial'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Informática</td>
                                <td> <?php
                                $query = "SELECT count(*) as Informatica FROM alumnos where Carrera  = 'Informática'  GROUP BY Carrera";
                                include("conexion.php");
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Informática'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Mecatrónica</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Mecatronica FROM alumnos where Carrera  = 'Mecatrónica'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Mecatrónica'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <td>Sistemas</td>
                                <td> <?php
                                include("conexion.php");
                                $query = "SELECT count(*) as Sistemas FROM alumnos where Carrera  = 'Sistemas'  GROUP BY Carrera";
                                $resultado = $conexion -> query($query);
                                if ($row = $resultado->fetch_assoc()) {
                                      echo $row['Sistemas'];
                                  }else{
                                    echo "0";
                                  } ?></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </table>

                    </div>
                    
                    <pre>
                            <div class="col-sm-3" style="margin-left: 50px;">
                                    <table class="table-hover">
                                        <tr>
                                            <th colspan="2">Proyectos</th>
                                        </tr>
                                        <tr>
                                            <td>Registrados</td>
                                            <td>Concluidos</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                    </pre>
                    <pre>
                            <div class="col-sm-3">
                                    <table class="table-hover">
                                        <tr>
                                            <th colspan="3">Artículos</th>
                                        </tr>
                                        <tr>
                                            <td>Elaborados</td>
                                            <td>Sometidos</td>
                                            <td>Aceptados</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                    </pre>

                </div>
            </div>
</div>
</body>
</html>
