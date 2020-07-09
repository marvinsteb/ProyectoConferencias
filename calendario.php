<?php
  include_once 'includes/templates/header.php';
?>
    <section class="seccion contenedor">
      <h2>Calendario de Eventos</h2>
      <?php try {
        require_once('includes/funciones/dbconexion.php');
        $sqlQuery = "SELECT 
                  ev.evento_id,
                  ev.nombre_evento,
                  ev.fecha_evento,
                  ev.hora_evento,
                  ev.clave,
                  ev.id_cat_evento,
                  ev.id_invitado
                  FROM proyectoconferencias.evento as ev;";
       $datos = $conexion->query($sqlQuery);
      } catch (Exception $e) {
        echo $e->getMessage();
      }?>

      <div class="calendario">
        <?php
          $eventos = $datos->fetch_assoc();
        ?>
        <pre>
          <?php var_dump($eventos);?>
        </pre>
      </div>
    </section>
    <!--section-->

<?php
  $conexion->close();
  include_once 'includes/templates/footer.php'
?>