<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
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
                <button onclick=location.href='index.php' class="btn btn-secondary my-2 my-sm-0 btnsalir btn-warning" type="button">Salir</button>
            </form>
            </nav>
            <form class="formulario" action="../php/asesor.php" method="post">


        <div class="text-center">
            <a class="textoMenu">Registro Asesor</a>
        </div>
        <div class="container-fluid row">
            <div class="form-group formGroupReg col-sm-6">
                <label for="nombre">Nombre: </label>
                <input required type="text" class="form-control formReg" id="nombre" value="" name="nombre" onpaste="return false">
                <label for="telefono">Teléfono</label>
                <input required type="text" class="form-control formReg" id="telefono" value="" name="telefono"
                pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="solo números">
                <label for="Plantel">Plantel</label>
                <select class="form-control" id="Plantel">
                    <option>Instituto Tecnológico de Colima</option>
                    <option>Instituto Tecnológico de Ciudad Guzmán</option>
                    <option>Instituto Tecnológico de Ciudad Juárez</option>
                    <option>Instituto Tecnológico de Puebla</option>
                </select>
                <label for="especialidad">Carrera</label>
                <input  required type="text" class="form-control formReg" id="especialidad" value="" name="carrera">
            </div>
            <div class="form-group formGroupReg col-sm-6">
                <label for="CURP">CURP</label>
                <input required type="text" class="form-control formReg" id="CURP" value="" name="curp" minlength="18" maxlength="18"
                pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)">

                  <label for="correo">Correo</label>
                <input required type="email" class="form-control formReg" id="Email" value="" name="correo">
                <label for="Grado">Grado</label>
                <select class="form-control" id="Grado">
                    <option>Licenciatura</option>
                    <option>Maestría</option>
                    <option>Doctorado</option>
                </select>
                <label for="l-inv">Línea de Investigación</label>
                <input  required type="text" class="form-control formReg" id="l-inv" value="" name="linea">
            </div>
            <div class="col-sm-12 text-center">
                <button type=submit class="btn btn-black btnreg text-center btn-success" >Guardar</button>
                <button onclick= type="button" class="btn btn-black btnreg text-center">Editar</button>
                <button onclick=location.href='../Ventana_Menu.html' type="button" class="btn btn-black btnreg text-center btn-warning">Cancelar</button>
            </div>


</body>
</html>
