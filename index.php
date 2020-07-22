<?php include_once 'includes/templates/header.php'  ?>
  <section class="seccion contenedor">
      <h2>La mejor conferencia de Web Desing en español</h2>
      <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis rerum, rem nam esse, perferendis, eum id cum sint, reprehenderit explicabo necessitatibus! Accusantium excepturi qui at, suscipit numquam voluptatum fugit dicta? 
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum autem laudantium quos error, numquam sit aspernatur voluptatum aliquid. Atque eaque, laboriosam hic provident! Expedita similique in, sapiente adipisci facilis repudiandae!
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus cumque beatae atque quo nisi assumenda, ipsam ad impedit soluta et quidem perferendis exercitationem autem reprehenderit accusantium veniam, tenetur ratione modi.
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat porro similique, numquam quod asperiores eius repellendus culpa dolore molestias quibusdam, blanditiis maxime esse nesciunt ea dolores beatae! Minima ducimus, harum.
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ipsum laborum quod unde adipisci deleniti assumenda, quibusdam, quia rem, blanditiis sint. Quo optio rem facilis porro, beatae ea. Aspernatur, error.
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, aspernatur eum repellendus dolorem iure, tempore ad iste numquam veritatis cum quia at temporibus in cumque, id. Suscipit atque odio ipsum.
      </p>
  </section>
  
  <section class="programa">
      <div class="contenedor-video">
          
          <video src="video/video.mp4"  autoplay muted loop ></video>
        <!--     <source  src="video/video.mp4" type="video/mp4">
             <source  src="video/video.webm" type="video/webm">
             <source  src="video/video.ogv" type="video/ogv"> -->
          
      </div> <!--.// seccion video // Aca creamos y colocamos el video activo en la web-->
      <div class="contenido-programa">
          <div class="contenedor">
              <div class="programa-evento">
                  <h2>Programa del Evento</h2>
                  <nav class="menu-programa">
                      <a href="#talleres"><i class="fa fa-code"  aria-hidden="true"></i>Cursos</a>
                      <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
                      <a href="#seminario"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
                  </nav>
                  <!-- // Detalle de Eventos // Creamos la esturucra de solo HTLM de los eventos
                  para luego ubicarlo y diseñarlo con Css -->
                  <div id="talleres" class="info-curso ocultar clearfix">
                      <div class="detalle-evento">
                          <h3>HTML5, CSS3 Y JavaScript</h3>
                          <p><i class="fas fa-clock" aria-hidden="true"></i>16:00Hs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Diciembre</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i>Gastón Alves</p>
                      </div>
                      <div class="detalle-evento">
                          <h3>Responsive Web Desing</h3>
                          <p><i class="fas fa-clock" aria-hidden="true"></i> 20:00Hs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Diciembre</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i> Gastón Alves</p>
                      </div>
                      <a href="#" class="button float-right"> Ver todos</a>
                  </div><!--.talleres-->
                  
                  <div id="conferencias" class="info-curso ocultar clearfix">
                      <div class="detalle-evento">
                          <h3>Como ser freelancer</h3>
                          <p><i class="fas fa-clock" aria-hidden="true"></i>10:00Hs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i>10 de Diciembre</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i>Joaquín Muñoz</p>
                      </div>
                      <div class="detalle-evento">
                          <h3>IoT - Internet of Things</h3>
                          <p><i class="fas fa-clock" aria-hidden="true"></i> 17:00Hs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Diciembre</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i> Sussan Sanchezz</p>
                      </div>
                      <a href="#" class="button float-right"> Ver todos</a>
                  </div><!--.talleres-->
                  
                  
                  <div id="seminario" class="info-curso ocultar clearfix">
                      <div class="detalle-evento">
                          <h3>Diseño UI/UX para móviles</h3>
                          <p><i class="fas fa-clock" aria-hidden="true"></i>17:00Hs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i>17 de Diciembre</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i>Gastón Alves</p>
                      </div>
                      <div class="detalle-evento">
                          <h3>Aprende a programar en una mañana</h3>
                          <p><i class="fas fa-clock" aria-hidden="true"></i> 10:00Hs</p>
                          <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Diciembre</p>
                          <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera</p>
                      </div>
                      <a href="#" class="button float-right"> Ver todos</a>
                  </div><!--.talleres-->
              </div><!--.programa-evento-->
          </div><!--.contenedor-->
      </div><!--.contenido-programa-->
  </section><!--programa -->
  
  <section class="invitados contenedor seccion">
      <h2>Nuestros Invitados</h2>
      <ul class="lista-invitado clearfix">
          <li>
              <div class="invitado">
                  <img src="img/invitado1.jpg" alt="imagen invitado">
                  <p>Rafael Bautista</p>
              </div>
          </li>
          <li>
              <div class="invitado">
                  <img src="img/invitado2.jpg" alt="imagen invitado">
                  <p>Sahri Herrera</p>
              </div>
          </li>
          <li>
              <div class="invitado">
                  <img src="img/invitado3.jpg" alt="imagen invitado">
                  <p>Georgio Sanchez</p>
              </div>
          </li>
          <li>
              <div class="invitado">
                  <img src="img/invitado4.jpg" alt="imagen invitado">
                  <p>Susana Rivera</p>
              </div>
          </li>
          <li>
              <div class="invitado">
                  <img src="img/invitado5.jpg" alt="imagen invitado">
                  <p>Harold Garcia</p>
              </div>
          </li>
          <li>
              <div class="invitado">
                  <img src="img/invitado6.jpg" alt="imagen invitado">
                  <p>Susan Sanchez</p>
              </div>
          </li>
      </ul>
  </section>
  
  <div class="contador parallax clearfix">
      <div class="contenedor">
          <ul class="resumen-evento">
              <li><p class="numero"></p> Invitados</li>
              <li><p class="numero"></p> Cursos</li>
              <li><p class="numero"></p> Días</li>
              <li><p class="numero"></p> Conferencias</li>
          </ul>
      </div>
  </div>
  
  
  <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
          <ul class="lista-precios clearfix">
              <li>
                    <div class="tabla-precios">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Comida gratis</li>
                            <li><i class="fas fa-check"></i> Todas las conferencias</li>
                            <li><i class="fas fa-check"></i> Todos los cursos</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
              </li>
              <li>
                    <div class="tabla-precios">
                        <h3>Todos los días !</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Comida gratis</li>
                            <li><i class="fas fa-check"></i> Todas las conferencias</li>
                            <li><i class="fas fa-check"></i> Todos los cursos</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
              </li>
              <li>
                    <div class="tabla-precios">
                        <h3>Pase por 2 días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Comida gratis</li>
                            <li><i class="fas fa-check"></i> Todas las conferencias</li>
                            <li><i class="fas fa-check"></i> Todos los cursos</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
              </li>
          </ul>
      </div>
  </section>
  
    <div id="mapa" class="mapa">
        
    </div>
    
    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ratione molestiae illo quia soluta esse repudiandae totam aliquam optio atque eum corporis natus animi rerum ipsa voluptatibus, tempora nulla fuga.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p> <i class="fas fa-quote-left clearfix"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ratione molestiae illo quia soluta esse repudiandae totam aliquam optio atque eum corporis natus animi rerum ipsa voluptatibus, tempora nulla fuga.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p> <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ratione molestiae illo quia soluta esse repudiandae totam aliquam optio atque eum corporis natus animi rerum ipsa voluptatibus, tempora nulla fuga.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span> </cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
    
    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p> <b> Regístrate </b> al Newsletter:</p>
            <h3>gdlwebcam</h3>
            <a href="" class="button transparente">Registro</a>
        </div>
    </div>
    
    
    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>  <p id="dias" class="numero"></p>días</li>
                <li>  <p id="horas" class="numero"></p>horas</li>
                <li>  <p id="minutos" class="numero"></p>minutos</li>
                <li>  <p id="segundos" class="numero"></p>segundos</li>
            </ul>
        </div>
    </section>
    
    <?php include_once 'includes/templates/footer.php'  ?>
   
    
    
    <!-- Site footer -->
  <!--  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>-->
  
  
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.countdown.js"></script> 
  <script src="js/jquery.lettering.js"></script> 
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
