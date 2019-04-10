<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VFJI</title>
</head>
<link rel="stylesheet" href="../css/estilo.css">
<link rel="php" href="../php/RegistroUsuario.php">
<body>
    <!--Barra-->
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
                <a class="textoMenu">Registro</a>
            </div>
    </div>
    <form name="" action="../php/RegistroUsuario.php" method="POST">
    <div class="container-fluid row">
        <div class="form-group formGroupReg col-sm-6">
            <label for="nombre">Nombre: </label>
            <input type="text" class="form-control formReg" id="nombre" value="Nombre Completo" name="nombre">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control formReg" id="telefono" value="Ingresar Telefono" name="telefono">
            <label for="Plantel">Plantel</label>
            <select class="form-control" id="Plantel" name="plantel">
                <option>Instituto Tecnologico de Colima</option>
                <option>Instituto Tecnologico de Ciudad Guzmán</option>
                <option>Instituto Tecnologico de Ciudad Juárez</option>
                <option>Instituto Tecnologico de Puebla</option>
            </select>
            <label for="especialidad">Carrera</label>
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
            <label for="psw">Contraseña</label>
            <input type="password" class="form-control formReg" id="psw" placeholder="Ingresar Contraseña" name="password">
        </div>
        <div class="form-group formGroupReg col-sm-6">
            <label for="CURP">CURP</label>
            <input type="text" class="form-control formReg" id="CURP" value="Ingresar CURP" name="curp">
            <label for="Email">Correo Electrónico</label>
            <input type="text" class="form-control formReg" id="Email" value="example@correo.com" name="correo">
            <label for="Grado">Grado</label>
            <select class="form-control" id="Grado" name="grado">
                <option>Licenciatura</option>
                <option>Maestría</option>
                <option>Doctorado</option>
            </select>
            <label for="l-inv">Línea de Investigación</label>
            <select class="form-control" id="Plantel" name="Linv">
                <option>Ineniería de Software</option>
                <option>Tópicos de TI y Comunicación</option>
                <option>Tecnología WEB</option>
                <option>Optimización de procesos productivos</option>
                <option>Innovación Mecatrónica</option>
            </select>
            <label for="psw">Repetir Contraseña</label>
            <input type="password" class="form-control formReg" id="psw" placeholder="Ingresa nuevamente la contraseña" name="password2">
        </div>
        <div class="col-sm-12 text-center">
          <input type="submit" src="../php/RegistroUsuario.php" class="btn btn-black btnreg text-center btn-success"/>
            <!-- <button onclick= type="button" class="btn btn-black btnreg text-center btn-success">Guardar</button> -->
            <button onclick=location.href='index.php' type="button" class="btn btn-black btnreg text-center btn-warning">Cancelar</button>
        </div>

    </div>
</form>

</body>
</html>
