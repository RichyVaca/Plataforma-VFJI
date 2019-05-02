<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Alumnos - VFJI</title>
</head>
<link rel="stylesheet" href="../css/estilo.css">
<link rel="php" href="../php/alumnos.php">
<body>
    <!-- Barra -->
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../img/logoTec.png" width="40" height="40" class="d-inline-block align-top logoTec" alt="">
                VFJI</img>
            </a>
            <form action="form-inline">
                <button onclick=location.href='index.php' class="btn btn-secondary my-2 my-sm-0 btnsalir btn-warning" type="button">Salir</button>
            </form>
            </nav>
            <div class="text-center">
                <a class="textoMenu">Registro Alumno</a>
            </div>
    </div>
    <form name="formulario" action="../php/alumnos.php" method="POST">
        <div class="container-fluid row">
            <div class="form-group formGroupReg col-sm-6">
                <label for="CURP">CURP</label>
                <input required type="text" class="form-control formReg" id="CURP" value="" name="curp" minlength="18" maxlength="18">
                <label for="nombre">Nombre: </label>
                <input required type="text" class="form-control formReg" id="nombre" value="" name="nombre"
                onpaste="return false">
                <label for="nombre">Genero: </label>
                <select class="form-control" id="Plantel" name="genero">
                    <option> </option>
                    <option value = "1">Masculino</option>
                    <option value = "2">Femenino</option>
                </select>
                <div></div>
                <label for="telefono" name="telefono">Teléfono</label>
                <input required type="text" class="form-control formReg" id="telefono" value="" name="telefono"
                pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="solo números">
                <label for="Plantel">Plantel</label>
                <select class="form-control" id="Plantel" name="plantel">
                    <option>Instituto Tecnológico de Colima</option>
                    <option>Instituto Tecnológico de Ciudad Guzmán</option>
                    <option>Instituto Tecnológico de Ciudad Juárez</option>
                    <option>Instituto Tecnológico de Puebla</option>
                </select>
            </div>
            <div class="form-group formGroupReg col-sm-6">
                <label for="carrera">Carrera</label>
                <select class="form-control" id="carrera" name = "carrera">
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
                <input required type="email" class="form-control formReg" id="Email" value="" name="correo"
              >
            </div>
            <div class="col-sm-12 text-center">

            </div>
                <button type= submit class="btn btn-black btnreg text-center btn-success">Guardar</button>
                <button onclick= type="button" class="btn btn-black btnreg text-center">Editar</button>
                <button onclick=location.href='../Ventana_Menu.html' type="submit" class="btn btn-black btnreg text-center btn-warning">Cancelar</button>
            </div>
        </form>


</body>
</html>
