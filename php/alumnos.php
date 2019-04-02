

<?php $resultado = $_POST;?>
      <?php $curp = $resultado['curp'];    ?>
      <?php $nombre = $resultado['nombre']; ?>

      <?php
            // validar inputs
            if(! (filter_has_var(INPUT_POST, 'curp') &&
                  (strlen(filter_input(INPUT_POST,'curp')) > 0))) {
              echo "El nombre es obligatorio";
            } else {    ?>
                <p>Curp: <?php echo $curp; ?></p>
            <?php } ?>


            <?php if(!isset($nombre) || trim($nombre) != '') { ?>
              <p>Nombre: <?php echo $nombre; ?></p>
            <?php } else {
              echo "El apellido es obligatorio";
        }  ?>

      
