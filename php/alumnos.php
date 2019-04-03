
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div class="container-fluid row">
    <?php $resultado = $_POST;?>
      <?php $curp = $resultado['curp'];    ?>
      <?php $nombre = $resultado['curp']; ?>

      <?php
          // validar inputs
          if(! (filter_has_var(INPUT_POST, 'curp') &&
                (strlen(filter_input(INPUT_POST,'curp')) > 0))) {
            echo "la curp es obligatorio";
          } else {    ?>
             <?php echo $curp; ?></p>
          <?php } ?>


          <?php if(!isset($nombre) || trim($nombre) != '') { ?>
             <?php echo $nombre; ?></p>
          <?php } else {
            echo "El apellido es obligatorio";
      }  ?>

      <hr>

</div>

  </body>
</html>
