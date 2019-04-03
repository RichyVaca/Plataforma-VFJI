
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <?php
      $curp = $_POST['curp'];
      $nombre= $_POST['nombre'];
      $telefono=$_POST['telefono'];
      $correo= $_POST['correo'];

      echo $curp . $nombre . $telefono . $correo;

         ?>

         <hr>
        <?php
        echo $_POST['optradio'];

        }

         ?>

  </body>
</html>
