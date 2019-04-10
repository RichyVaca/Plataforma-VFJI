<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VFJI</title>
   </head>
   <link rel="stylesheet" href="../css/estilo.css">

<body class="text-center">
    <div class="container-fluid"></div>
        <form action="../Ventana_Menu.html" class="form-signing" method="post"></form>
            <img class= "mb-4" src="../img/logo-instituto-tecnologico-de-colima.png"
            alt="logo-instituto-tecnologico-de-colima" width = "100px" height= "100px">

            <h1 class="text-center">Plataforma VFJI</h1>
            <h3 class="text-center">Iniciar sesión</h3>

            <input class="form-control formlogin" type="text" name="Usuario" placeholder="Usuario" required autofocus></input>
            <input class="form-control formlogin" type="password" name="psw" placeholder="Contraseña" required autofocus></input>
            <button class="btn btn-block"  type="submit">Iniciar Sesión</button>
            <button onclick= location.href='Registro.php' class="btn btn-block"  type="button">Registrarse</button>
        </form>
</body>
</html>
