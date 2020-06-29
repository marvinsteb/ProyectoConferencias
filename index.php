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
                <nav class="menu-programa">
                  <a href="#talleres"><i class="fa fa-code"></i> Talleres</a>
                  <a href="#conferencias"
                    ><i class="fa fa-comment"></i> Conferencias</a
                  >
                  <a href="#seminarios"
                    ><i class="fa fa-university"></i> Seminarios</a
                  >
                </nav>
                <div id="talleres" class="info-curso ocultar clearfix">
                  <div class="detalle-evento">
                    <h3>HTML5, CSS3 y JavaScript</h3>
                    <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                    <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                    <p><i class="fa fa-user"></i> Nombre del Conferencista</p>
                  </div>
                  <div class="detalle-evento">
                    <h3>Responsive Web Desing</h3>
                    <p><i class="fa fa-clock"></i> 20:00 hrs</p>
                    <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                    <p><i class="fa fa-user"></i> Nombre del Conferencista</p>
                  </div>
                  <a href="#" class="button float-right">Ver todos</a>
                </div>
                <!-- .talleres-->
                <div id="conferencias" class="info-curso ocultar clearfix">
                  <div class="detalle-evento">
                    <h3>Conferencia 1</h3>
                    <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                    <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                    <p><i class="fa fa-user"></i> Nombre del Conferencista</p>
                  </div>
                  <div class="detalle-evento">
                    <h3>Conferencia 2</h3>
                    <p><i class="fa fa-clock"></i> 20:00 hrs</p>
                    <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                    <p><i class="fa fa-user"></i> Nombre del Conferencista</p>
                  </div>
                  <a href="#" class="button float-right">Ver todos</a>
                </div>
                <!-- .Conferencias-->

                <div id="seminarios" class="info-curso ocultar clearfix">
                  <div class="detalle-evento">
                    <h3>Seminario 1</h3>
                    <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                    <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                    <p><i class="fa fa-user"></i> Nombre del Conferencista</p>
                  </div>
                  <div class="detalle-evento">
                    <h3>Seminario 2</h3>
                    <p><i class="fa fa-clock"></i> 20:00 hrs</p>
                    <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                    <p><i class="fa fa-user"></i> Nombre del Conferencista</p>
                  </div>
                  <a href="#" class="button float-right">Ver todos</a>
                </div>
                <!-- .Seminarios-->
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
  include_once 'includes/templates/footer.php'
?>