<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VFJI</title>
</head>
<link rel="stylesheet" href="css/estilo.css">
<body>
    <!-- Barra -->
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="img/logoTec.png" width="40" height="40" class="d-inline-block align-top logoTec" alt="">
                VFJI</img>
            </a>
            <form action="form-inline">

                <button onclick=location.href='https://itcolima.edu.mx/siitec2/index.php/usuarios' class="btn btn-secondary my-2 my-sm-0 btnsalir btn-warning" type="button">Salir</button>
            </form>
            </nav>
            <div class="text-center">
                <a class="textoMenu">Entregables</a>
            </div>
            
    </div>
    
    <div class="contain-fluid row">
        <div class="form-group text-center col-sm-5">
          <form action="php/sube.php" method="post" enctype="multipart/form-data">
            <label for="crtl" class="labelentr">Seleccionar proyecto</label>
            <select class="form-control " id="semestre" name="">
                <option>Ejemplo</option>
            </select>
            <label for="crtl" class="labelentr">Articulo</label>
        		<input type="file" name="archivo"  class="form-control formlogin" >
        		<br><br>
        		<button class="btn btn-black btnreg text-center btn-warning" >Subir Archivo</button>
        	</form>
            <div></div>
            <form action="php/sube2.php" method="post" enctype="multipart/form-data">
            <label for="crtl" class="labelentr">Cartel</label>
            <input type="file" name="archivo2"  class="form-control formlogin" >
            <br><br>
            <button class="btn btn-black btnreg text-center btn-warning" >Subir Archivo</button>
            </form>
            <div></div>


        </div>
        <div class="form-group text-center col-sm-5">

            <div class="form-group text-center col-sm-12">
                    <button onclick=location.href='Ventana_Menu.html' type="button" class="btn btn-black btnreg text-center btn-warning">Cancelar</button>
            </div>




        </div>


    </div>
</body>
</html>
