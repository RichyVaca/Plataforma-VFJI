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
                <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn btn-secondary my-2 my-sm-0 btnsalir btn-warning" type="button">Salir</button>
            </form>
            </nav>
            <div class="text-center">
                <a class="textoMenu">Registro Asesor</a>
            </div>
    </div>
    <form name="" action="../php/asesor.php" method="POST">
    <div class="container-fluid row">
        <div class="form-group formGroupReg col-sm-6">
          <label for="nombre">Nombre: </label>
          <input required type="text" class="form-control formReg" id="nombre" value="" name="nombre" onpaste="return false">
          <label for="nombre">Primer Apellido: </label>
          <input required type="text" class="form-control formReg" id="nombre" value="" name="primerAp" onpaste="return false">
          <label for="nombre">Segundo Apellido: </label>
          <input required type="text" class="form-control formReg" id="nombre" value="" name="segundoAp" onpaste="return false">
          <label for="CURP">CURP</label>
          <input required type="text" class="form-control formReg" id="CURP" value="" name="curp" minlength="18" maxlength="18"
          pattern="([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)">
          <label for="telefono">Teléfono</label>
          <input required type="text" class="form-control formReg" id="telefono" value="" name="telefono"
          pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="solo números">
          <label for="nombre">Fecha de Nacimiento </label>
          <input required type="date" class="form-control formReg" id="nombre" value="" name="fecha" onpaste="return false">
        </div>
        <div class="form-group formGroupReg col-sm-6">
            <label for="especialidad">Programa</label>
          <input required type="text" class="form-control formReg" id="nombre" value="" name="programa" onpaste="return false">
          <label for="especialidad">Especialidad</label>
          <input required type="text" class="form-control formReg" id="nombre" value="" name="especialidad" onpaste="return false">
          <label for="Plantel">Plantel</label>
            <select class="form-control" id="Plantel" name="plantel">
                <option>Instituto Tecnologico de Colima</option>
                <option>Instituto Tecnologico de Ciudad Guzmán</option>
                <option>Instituto Tecnologico de Ciudad Juárez</option>
                <option>Instituto Tecnologico de Puebla</option>
            </select>
          <label for="correo">Correo Electronico</label>
        <input required type="email" class="form-control formReg" id="Email" value="" name="correo">
            <label for="l-inv">Línea de Investigación</label>
            <select class="form-control" id="Plantel" name="lineaI">
                <option>Ineniería de Software</option>
                <option>Tópicos de TI y Comunicación</option>
                <option>Tecnología WEB</option>
                <option>Optimización de procesos productivos</option>
                <option>Innovación Mecatrónica</option>
            </select>
        </div>
          <input type="submit"  class="btn btn-black btnreg text-center btn-success" value="Guardar"/>
            <!-- <button onclick= type="button" class="btn btn-black btnreg text-center btn-success">Guardar</button> -->
            <button onclick=location.href='../opciones_asesores.html' type="submit" class="btn btn-black btnreg text-center btn-warning">Cancelar</button>

    </div>
</form>

</body>
</html>
