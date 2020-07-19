<?php
  include_once 'includes/templates/header.php';
  setlocale(LC_TIME, 'es_ES.UTF-8');
  setlocale(LC_TIME,"spanish");
?>
    <section class="seccion contenedor">
      <h2>Invitados</h2>
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
          while ($invitados = $datosInvitado->fetch_assoc()) { ?>
            <li>
              <div class="invitado">
                <img src="img/invitado1.jpg" alt="imagen invitado" />
                <p>Nombre Invitado 1</p>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
      <!-- .invitados -->
    </section>
    <!--section-->
<?php
  $conexion->close();
  include_once 'includes/templates/footer.php'
?>