<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VFJI</title>
</head>
<link rel="stylesheet" href="../css/estilo.css">
<link rel="php" href="../php/i_proyecto.php">
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="../img/logoTec.png" width="40" height="40" class="d-inline-block align-top logoTec" alt="">
                VFJI</img>
            </a>
            <form action="form-inline">
                <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn btn-secondary my-2 my-sm-0 btnsalir" type="button">Salir</button>
            </form>
            </nav>
            <div class="text-center">
                <a class="textoMenu">Registro Proyecto</a>
            </div>
    </div>
    <form name="formulario" action="../php/i_proyecto.php" method="POST">
    <div class="container-fluid row">
        <div class="form-group formGroupReg col-sm-12">
            <label for="titulo">Título del proyecto: </label>
            <input require type="text" class="form-control" name="Titulo">
            <label for="resumen">Resumen:</label>
            <textarea require class="form-control" rows="4" name="Resumen" maxlength="250"></textarea>
            <label class="labelCont" for="cont">Cantidad de caracteres: 0</label>
            <label for="req">Requisitos:</label>
            <textarea require class="form-control" rows="4" name="Requisitos" maxlength="250"></textarea>
            <label for="noParticipantes">Número Máximo de Participantes</label>
            <input require type="number" class="form-control formPart" name="Integrantes"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="solo números">
            <div class="text-right">
                    <input type="submit" action="../php/i_proyecto.php" onclick=location.href='registroProyecto.php' class="btn btn-black btnreg text-center btn-success" 
                    value="Guardar"/>
                    <button onclick=location.href='../opciones_proyecto.html' type="button" 
                    class="btn btn-black btnreg text-center btn-warning">Cancelar</button>
            </div>
        </div>
      </div>
      </form>

</body>
</html>
