      <?php try {
        require_once('includes/funciones/dbconexion.php');
        $sqlQuery = "SELECT 
                      inv.invitado_id,
                      inv.nombre_invitado,
                      inv.apellido_invitado,
                      inv.descripcion,
                      inv.url_imagen
                      FROM invitado inv";
       $datosInvitado = $conexion->query($sqlQuery);
      } catch (Exception $e) {
        echo $e->getMessage();
      }?>

      <div class="invitados">
      <section class="invitados contenedor seccion">
      <h2>Nuestros Invitados</h2>
      <ul class="lista-invitados clearfix">
        <?php
          while ($invitado = $datosInvitado->fetch_assoc()) { ?>
            <li>
              <div class="invitado">
                <a class="invitado_info" href="#invitado<?php echo $invitado["invitado_id"]?>">
                  <img src="img/<?php echo $invitado["url_imagen"]; ?>" alt="imagen invitado" />
                  <p><?php echo $invitado["nombre_invitado"] . " " . $invitado["apellido_invitado"]; ?></p>
                </a>
              </div>
            </li>
            <div style='display:none'>
              <div class="invitado_info" id="invitado<?php echo $invitado["invitado_id"]?>">
                <h2><?php echo $invitado["nombre_invitado"] . " " . $invitado["apellido_invitado"]; ?></h2>
                <img src="img/<?php echo $invitado["url_imagen"]; ?>" alt="imagen invitado" />
                <p><?php echo $invitado["descripcion"];?></p>
              </div>
            </div>
          <?php } ?>
        </ul>
      </div>
      <!-- .invitados -->
    </section>
    <!--section-->
    <?php 
      $conexion->close();
    ?>
