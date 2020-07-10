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
                    cev.cat_evento, 
                    invi.nombre_invitado,
                    invi.apellido_invitado 
                    FROM  proyectoconferencias.evento ev 
                    INNER JOIN invitado invi ON ev.id_invitado = invi.invitado_id
                    INNER JOIN categoria_evento cev ON ev.id_cat_evento = cev.id_categoria
                    ORDER BY 1";
       $datos = $conexion->query($sqlQuery);
      } catch (Exception $e) {
        echo $e->getMessage();
      }?>

      <div class="calendario">
        <?php
        $calendario = array();
        while($eventos = $datos->fetch_assoc()) {
          $calendario[] = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['clave'],
            'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado'],
          );
        }
        ?>
        <pre>
        <?php var_dump($calendario);?>
        </pre>
      </div>
    </section>
    <!--section-->
<?php
  $conexion->close();
  include_once 'includes/templates/footer.php'
?>