<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VFJI</title>
</head>
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
                <button onclick=location.href='../opciones_proyecto.html' class="btn btn-secondary my-2 my-sm-0 btnsalir btn-warning" type="button">Regresar</button>
            <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn-warning btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Salir</button>
        </form>
        </nav>
        <div class="text-center">
            <a class="textoMenu">Asociar Participantes</a>
        </div>
</div>
<?php  
    $idgt = $_REQUEST["Id"];

?>
<form action="i_asociarAlumno.php?Idg=<?php echo $idgt; ?>" method ="POST">
<div class="container">
    <div class="row">
        <div class="col-sm-3 text-center">
            Proyecto Participante
            <div class="row text-center">
                <?php
                    include("conexion.php");
                    $id = $_REQUEST["Id"];
                    $query = "SELECT * FROM proyectos where Id_Proyecto = $id";
                    $resultado = $conexion -> query($query);

                    while ($row = $resultado -> fetch_assoc()){                    
                ?>
                    <label disabled type="text" class="form-control text-center" name="Titulo" value="<?php echo $row['Id_Proyecto']; ?>"><?php echo $row['Titulo']; ?></label>

                <?php
                    }
                ?>

            </div>
        </div>
        <div class="col-sm-3 text-center">
            Seleccionar Profesor a asociar
            <div class="row">
                <select class="form-control" id="Grado" name="asesorAs">
                <?php
                    include("conexion.php");
                    $queryU = "SELECT * FROM usuarios";
                    $resultadoU = $conexion -> query($queryU);

                    while ($rowU = $resultadoU -> fetch_assoc()){                    
                ?>
                    
                <option value ="<?php echo $rowU['Correo']; ?>"><?php echo $rowU['Nombre']; ?></option>

                <?php
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="col-sm-3 text-center">
            Seleccionar Alumno a asociar
            <div class="row">
                    <select class="form-control" id="Grado" name="alumnoAl">
                    <?php
                        include("conexion.php");
                        $queryE = "SELECT * FROM alumnos";
                        $resultadoE = $conexion -> query($queryE);

                        while ($rowE = $resultadoE -> fetch_assoc()){                    
                    ?>
                    
                        <option value = "<?php echo $rowE['NoControl']; ?>"><?php echo $rowE['Nombre']; ?></option>

                    <?php
                        }
                    ?>
                    </select>
                </div>
        </div>
        <div class="col-sm-3 text-center">
            <div class="form-group">
                <input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-saved"></span>
            </div>
        </div>


    </div>
</div>
</form>


</body>
</html>
