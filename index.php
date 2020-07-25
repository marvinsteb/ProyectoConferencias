<?php
  include_once 'includes/templates/header.php';
?>
      <section class="seccion contenedor">
        <h2>La mejor conferencia de Diseño Web</h2>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste
          blanditiis magni quo tempora et, saepe consequatur totam adipisci atque
          laboriosam cum animi id architecto. Corrupti sint recusandae laboriosam
          odit hic.
        </p>
      </section>
      <!--section-->
      <section class="programa">
        <div class="contenedor-video">
          <video autoplay loop poster="img/bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4" />
            <source src="video/video.webm" type="video/webm" />
            <source src="video/video.ogv" type="video/ogv" /></video
          ><!-- .contenedor-video-->
          <div class="contenido-programa">
            <div class="contenedor">
              <div class="programa-evento">
                  <h2>Programa del Evento</h2>
                    <?php try {
                    require_once('includes/funciones/dbconexion.php');
                    $sqlQuery = "SELECT 
                                cev.id_categoria,
                                cev.cat_evento,
                                cev.icono 
                                FROM categoria_evento cev order by 1 desc;";
                  $datosCatEvento = $conexion->query($sqlQuery);
                  } catch (Exception $e) {
                    echo $e->getMessage();
                  }?>

                  <nav class="menu-programa">
                    <?php while ($categoriaEventos = $datosCatEvento->fetch_assoc()) { ?>
                      <a href="#<?php echo strtolower($categoriaEventos['cat_evento']); ?>"><i class="fa <?php echo $categoriaEventos['icono']; ?>"></i> <?php echo $categoriaEventos['cat_evento']; ?></a>
                    <?php } ?>
                   </nav>

            <?php 
                    try {
                      require_once('includes/funciones/dbconexion.php');
                      $sqlQuery = "SELECT 
                                      ev.evento_id,
                                      ev.nombre_evento,
                                      ev.fecha_evento,
                                      ev.hora_evento,
                                      ev.clave,
                                      cev.cat_evento,
                                      cev.icono,
                                      invi.nombre_invitado,
                                      invi.apellido_invitado
                                  FROM
                                      proyectoconferencias.evento ev
                                          INNER JOIN
                                      invitado invi ON ev.id_invitado = invi.invitado_id
                                          INNER JOIN
                                      categoria_evento cev ON ev.id_cat_evento = cev.id_categoria
                                      AND ev.id_cat_evento = 3
                                  ORDER BY 1 LIMIT 2;
                                  SELECT 
                                      ev.evento_id,
                                      ev.nombre_evento,
                                      ev.fecha_evento,
                                      ev.hora_evento,
                                      ev.clave,
                                      cev.cat_evento,
                                      cev.icono,
                                      invi.nombre_invitado,
                                      invi.apellido_invitado
                                  FROM
                                      proyectoconferencias.evento ev
                                          INNER JOIN
                                      invitado invi ON ev.id_invitado = invi.invitado_id
                                          INNER JOIN
                                      categoria_evento cev ON ev.id_cat_evento = cev.id_categoria
                                      AND ev.id_cat_evento = 2
                                  ORDER BY 1 LIMIT 2;
                                  SELECT 
                                      ev.evento_id,
                                      ev.nombre_evento,
                                      ev.fecha_evento,
                                      ev.hora_evento,
                                      ev.clave,
                                      cev.cat_evento,
                                      cev.icono,
                                      invi.nombre_invitado,
                                      invi.apellido_invitado
                                  FROM
                                      proyectoconferencias.evento ev
                                          INNER JOIN
                                      invitado invi ON ev.id_invitado = invi.invitado_id
                                          INNER JOIN
                                      categoria_evento cev ON ev.id_cat_evento = cev.id_categoria
                                      AND ev.id_cat_evento = 1
                                  ORDER BY 1 LIMIT 2;
                                  ";
                    $conexion->multi_query($sqlQuery);
                    } catch (Exception $e) {
                      echo $e->getMessage();
                    }
                    ?>
                    <?php                   
                      do {
                        $datosEvento = $conexion->store_result();
                        $fila = $datosEvento->fetch_all(MYSQLI_ASSOC); ?>
                        <?php $i = 0;?>
                        <?php foreach($fila as $evento ) { ?>
                          <?php if($i % 2 == 0) { ?>
                              <div id="<?php echo strtolower($evento['cat_evento']);?>" class="info-curso ocultar clearfix">
                          <?php } ?>
                                <div class="detalle-evento">
                                  <h3> <?php echo utf8_decode($evento['nombre_evento']); ?></h3>
                                  <p><i class="fa fa-clock"></i> <?php echo $evento['hora_evento']; ?> </p>
                                  <p><i class="fa fa-calendar"></i> <?php echo $evento['fecha_evento']; ?> </p>
                                  <p><i class="fa fa-user"></i> <?php echo $evento['nombre_invitado']; ?> </p>
                                </div>
                          <?php if($i % 2 == 1) { ?>
                                <a href="calendario.php" class="button float-right">Ver todos</a>
                              </div>
                          <?php } ?>
                          <?php $i++;?>
                        <?php } ?>
                        <?php $datosCatEvento->free();?>
                      <?php } while ( $conexion->more_results() & $conexion->next_result()); ?>
                  </div>
              <!--.programa-evento-->
            </div>
            <!--.contenedor-->
          </div>
          <!--contenido-programa-->
        </div>
        <!--.contenedor-video-->
      </section>
      <!-- .programa -->
      <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
          <li>
            <div class="invitado">
              <img src="img/invitado1.jpg" alt="imagen invitado" />
              <p>Nombre Invitado 1</p>
            </div>
          </li>
          <li>
            <div class="invitado">
              <img src="img/invitado2.jpg" alt="imagen invitado" />
              <p>Nombre Invitado 2</p>
            </div>
          </li>
          <li>
            <div class="invitado">
              <img src="img/invitado3.jpg" alt="imagen invitado" />
              <p>Nombre Invitado 3</p>
            </div>
          </li>
          <li>
            <div class="invitado">
              <img src="img/invitado4.jpg" alt="imagen invitado" />
              <p>Nombre Invitado 4</p>
            </div>
          </li>
          <li>
            <div class="invitado">
              <img src="img/invitado5.jpg" alt="imagen invitado" />
              <p>Nombre Invitado 5</p>
            </div>
          </li>
          <li>
            <div class="invitado">
              <img src="img/invitado6.jpg" alt="imagen invitado" />
              <p>Nombre Invitado 6</p>
            </div>
          </li>
        </ul>
      </section>
      <div class="contador parallax">
        <div class="contenedor">
          <ul class="resumen-evento clearfix">
            <li>
              <p class="numero">0</p>
              Invitados
            </li>
            <li>
              <p class="numero">0</p>
              Talleres
            </li>
            <li>
              <p class="numero">0</p>
              Días
            </li>
            <li>
              <p class="numero">0</p>
              Conferencias
            </li>
          </ul>
        </div>
      </div>
      <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
          <ul class="lista-precios clearfix">
            <li>
              <div class="tabla-precio">
                <h3>Pase por día</h3>
                <p class="numero">$30</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <a href="#" class="button hollow">Comprar</a>
              </div>
            </li>

            <li>
              <div class="tabla-precio">
                <h3>Todos los días</h3>
                <p class="numero">$50</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <a href="#" class="button">Comprar</a>
              </div>
            </li>

            <li>
              <div class="tabla-precio">
                <h3>Pase por 2 día</h3>
                <p class="numero">$45</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <a href="#" class="button hollow">Comprar</a>
              </div>
            </li>
          </ul>
        </div>
        <!--.contenedor-->
      </section>
      <div id="mapa" class="mapa"></div>
      <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
          <div class="testimonial">
            <blockquote>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                ipsam nesciunt a temporibus adipisci, neque, nisi placeat
                voluptatum suscipit ipsum voluptate quibusdam natus dicta at enim
                necessitatibus eius rerum dolorem?
              </p>
              <footer class="info-testimoniales clearfix">
                <img src="img/testimonial.jpg" alt="imagen testimonial uno" />
                <cite>nombre apellido <span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div>
          <!-- .testimonial -->
          <div class="testimonial">
            <blockquote>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                ipsam nesciunt a temporibus adipisci, neque, nisi placeat
                voluptatum suscipit ipsum voluptate quibusdam natus dicta at enim
                necessitatibus eius rerum dolorem?
              </p>
              <footer class="info-testimoniales clearfix">
                <img src="img/testimonial.jpg" alt="imagen testimonial uno" />
                <cite>nombre apellido <span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div>
          <!-- .testimonial -->
          <div class="testimonial">
            <blockquote>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                ipsam nesciunt a temporibus adipisci, neque, nisi placeat
                voluptatum suscipit ipsum voluptate quibusdam natus dicta at enim
                necessitatibus eius rerum dolorem?
              </p>
              <footer class="info-testimoniales clearfix">
                <img src="img/testimonial.jpg" alt="imagen testimonial uno" />
                <cite>nombre apellido <span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div>
          <!-- .testimonial -->
        </div>
      </section>
      <div class="newsletter parallax">
        <div class="contenido contenedor">
          <p>registrate al newsletter:</p>
          <h3>gdlwebcamp</h3>
          <a href="" class="button transparente">Registro</a>
        </div>
        <!--contenido-->
      </div>
      <!--newsletter-->
      <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
          <ul class="clearfix">
            <li>
              <p id="dias" class="numero"></p>
              días
            </li>
            <li>
              <p id="horas" class="numero"></p>
              horas
            </li>
            <li>
              <p id="minutos" class="numero"></p>
              minutos
            </li>
            <li>
              <p id="segundos" class="numero"></p>
              segundos
            </li>
          </ul>
        </div>
      </section>
<?php
  $conexion->close();
  include_once 'includes/templates/footer.php'
?>