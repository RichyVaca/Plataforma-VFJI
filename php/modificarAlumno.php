    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Alumnos - VFJI</title>
</head>
<link rel="stylesheet" href="../css/estilo.css">

<body>
    <!-- Barra -->
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../img/logoTec.png" width="40" height="40" class="d-inline-block align-top logoTec" alt="">
                VFJI</img>
            </a>
            <form action="form-inline">
                <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn btn-secondary my-2 my-sm-0 btnsalir btn-warning" type="button">Salir</button>
            </form>
            </nav>
            <div class="text-center">
                <a class="textoMenu">Modificación Alumno</a>
            </div>
    </div>
    <form name="formulario" action="modificarAl.php" method="POST">
        <div class="container-fluid row">
        <?php
            include("conexion.php");
            $id = $_REQUEST["Id"];

            $query = "SELECT * FROM alumnos where Id = '$id'";
            $resultado = $conexion -> query($query);

            while ($row = $resultado -> fetch_assoc()){                    
        ?>
        <div class="form-group formGroupReg col-sm-6">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <label for="CURP">Numero de Control</label>
            <input required type="text" class="form-control formReg" id="nombre" value="<?php echo $row['NoControl']; ?>" name="numeroco"
                onpaste="return false">
            <label for="CURP">CURP:</label>
            <input required type="text" class="form-control formReg" id="CURP" value="<?php echo $row['CURP']; ?>" name="curp" minlength="18" maxlength="18"
            pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)">

            <label for="nombre">Nombre: </label>
            <input required type="text" class="form-control formReg" id="nombre" value="<?php echo $row['Nombre']; ?>" name="nombre"
            onpaste="return false">
            <label for="nombre">Primer Apellido: </label>
            <input required type="text" class="form-control formReg" id="nombre" value="<?php echo $row['PrimerApellido']; ?>" name="primerA"
            onpaste="return false">
            <label for="nombre">Segundo Apellido: </label>
            <input required type="text" class="form-control formReg" id="nombre" value="<?php echo $row['SegundoApellido']; ?>" name="segundoA"
            onpaste="return false">
            <label for="carrera">Genero: </label>
            <select class="form-control" id="carrera" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <div></div>
        </div>
        <div class="form-group formGroupReg col-sm-6">
            <label for="carrera">Carrera</label>
            <select class="form-control" id="carrera" name = "carrera">
                <option><?php echo $row['Carrera']; ?></option>
                <option>Arquitectura</option>
                <option>Contador Publico</option>
                <option>Ing. Ambiental</option>
                <option>Ing. Bioquimica</option>
                <option>Ing. Gestión Empresarial</option>
                <option>Ing. Industrial</option>
                <option>Ing. Informática</option>
                <option>Ing. Mecatrónica</option>
                <option>Ing. Sistemas Computacionales</option>
                <option>Lic. Administración</option>
            </select>
            <label for="semestre">Semestre</label>
            <select class="form-control selectsmtr" id="semestre" name="semestre">
                <option><?php echo $row['Semestre']; ?></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>9</option>
            </select>
            <label for="Email" name="correo">Correo Electrónico</label>
            <input required type="email" class="form-control formReg" id="Email" value="<?php echo $row['Correo']; ?>" name="correo">
            <label for="telefono" name="telefono">Teléfono</label>
            <input required type="text" class="form-control formReg" id="telefono" value="<?php echo $row['Telefono']; ?>" name="telefono"
            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="solo números">
            <label for="Plantel">Plantel</label>
            <select class="form-control" id="Plantel" name="plantel">
                <option><?php echo $row['Plantel']; ?></option>
                <option>Instituto Tecnológico de Colima</option>
                <option>Instituto Tecnológico de Ciudad Guzmán</option>
                <option>Instituto Tecnológico de Ciudad Juárez</option>
                <option>Instituto Tecnológico de Puebla</option>
            </select>
        </div>
        <?php
            }
        ?>
    </form>
    <input type= "submit" class="btn btn-black btnreg text-center btn-success" value="Guardar">
    <input  type ="button" class="btn btn-black btnreg text-center btn-warning" onclick=location.href='Reporte_Estudiantes.php' value="Cancelar">
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
