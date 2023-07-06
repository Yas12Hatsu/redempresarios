<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Red de empresarios</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/enlacesC.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Archivos -->
  
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Template principal CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Menu ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:davidtrejo_1@outlook.com">davidtrejo_1@outlook.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel: +52 55 1868 8664">+52 55 1868 8664</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
        <a href="https://www.facebook.com/reddeempresariosmx" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/enlaces_comerciales?igshid=NTc4MTIwNjQ2YQ==" class="instagram"><i class="bi bi-instagram"></i></a>
        <!--<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>-->
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!--<h1><a href=""><img src="assets/img/redE.png" width="75" alt=" ">      Red de empresarios</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="" style="color: #2C74B3"><img src="assets/img/redE.png" alt="" class="img-fluid"> Red de Empresarios</a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="">Inicio</a></li>
          <li><a href="#about">Acerca de</a></li>
          <li><a href="#services">Beneficios</a></li>
          <li><a href="#directorio">Directorio</a></li>
          <li><a href="#clients">Proyectos</a></li>
          <li><a href="#contact">Contacto</a></li>
<script>
const menuItems = document.querySelectorAll('#navbar a');

menuItems.forEach(item => {
  item.addEventListener('click', function(event) {
    menuItems.forEach(item => {
      item.classList.remove('active');
    });
    this.classList.add('active');
  });
});

</script>

          <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/portada4.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Vive <span>Tonanitla</span></h2>
                <p class="animate__animated animate__fadeInUp" style="color: #000; font-size: 25px ; font-weight: bold;">Nuestro objetivo es conectar a emprendedores y empresarios locales, brindándoles una red sólida y recursos para fortalecer sus negocios.</p>
                <!--<a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/portada1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Nuestra <span style="color: #2C74B3">Misión</span></h2>
                <p class="animate__animated animate__fadeInUp" style="color: #000; font-size: 25px ; font-weight: bold;"> Contribuir con el desarrollo de las empresas socialmente responsables para la incrementación de la demanda de sus productos y servicios por medio de las redes sociales.</p>
                <!--<a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/portada5.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Nuestra <span style="color: #2C74B3">Visión</span></h2>
                <p class="animate__animated animate__fadeInUp" style="color: #000; font-size: 25px ; font-weight: bold;">Ser la opción preferida de nuestros clientes superando sus expectativas en servicio.</p>
                <!--<a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
      <div class="section-title">
          <h2>¡Conoce <span style="color: #2C74B3">red de empresarios</span>!</h2>
        </div>

        <div class="row">
          <div class="col-lg-7">
            <img src="assets/img/exito.jpg" class="img-fluid" alt="" width="620">
          </div>
          <div class="col-lg-5 pt-4 pt-lg-0 content">
            <br><br>
            <p style="font-size: 22px"> Somos una plataforma dedicada a promover y potenciar el crecimiento de pequeños emprendimientos, 
            hasta grandes compañias dentro de la localidad de Tonanitla - Jaltenco </p>
              <br>
            <p style="font-size: 22px">En red de empresarios podrás encontrar un directorio completo de empresas con una amplia variedad 
            de industrias y sectores que están establecidas en nuestro municipio.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
      <div class="section-title">
          <h2>¿Por qué unirte a <span style="color: #2C74B3">red de empresarios</span>?</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <i><img src="assets/img/map.png" alt="" width="100px"></i>
              <h4><a href="">Punto de encuentro</a></h4>
              <p style="font-size: 16px;">Cada perfil de empresa cuenta con información detallada que te ayudará a contactar facilmente con ellos. Nos enorgullece ser un punto de encuentro para la comunidad empresarial local.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <i><img src="assets/img/group.png" alt="" width="100px"></i>
              <h4><a href="">Generación de sinergias</a></h4>
              <p style="font-size: 16px;"> Fomentamos la colaboración, el intercambio de ideas y la generación de oportunidades comerciales entre nuestros miembros.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <i><img src="assets/img/settings.png" alt="" width="100px"></i>
              <h4><a href="">Mejora de competencias</a></h4>
              <p style="font-size: 16px;">Además de nuestro directorio, te ofrecemos eventos de coworking, estrategias de marketing y herramientas de apoyo empresarial para potenciar el crecimiento de tu negocio.</p>
            </div>
          </div>

        </div>
<br><br>
        <p style="font-size: 19px; text-align: center;">Si eres empresario, te invitamos a unirte a nuestra red y aprovechar todas las ventajas que ofrece Red de Empresarios. Si buscas productos o servicios de calidad dentro de la ruta Tonanitla - Jaltenco, estás en el lugar indicado. </p>
        <br>
        <p style="font-size: 22px; text-align: center; font-weight: bold; background-color: #205295; color: white; padding: 10px;">¡Únete a la comunidad de Red de Empresarios y juntos impulsaremos el éxito empresarial!</p>

      </div>
    </section><!-- End Services Section -->

    <!--PLANTILLA PARA EL DIRECTORIO-->
        <!-- ======= Services Section ======= -->
        <section id="directorio" class="directorio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Explora nuestro directorio local</h2>
          <p id="#negoc">Navega a través de nuestro directorio local y descubre la diversidad y calidad que ofrecen los negocios locales.</p>
          <p style="color: #205295">¡Te ayudamos a contactar con ellos de una forma más fácil y rápida!</p>
        </div>

        <div class="row">
        @yield('content')

      </div>
    </section><!-- End Services Section -->


          <!-- ======= Clients Section ======= -->
          <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Conoce nuestros <span style="color: #2C74B3">proyectos</span></h2>
          <p>Estamos orgullosos de compartir nuestros logros contigo y esperamos que encuentres inspiración en nuestras experiencias pasadas.
          !Te invitamos a conocer acerca de nuestra calidad a través del valor que ofrecemos en nuestros proyectos y formes parte de nuestro viaje al éxito!</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/enlaces.png" class="img-fluid" alt="Enlaces Comerciales" width="70"></div>
            <div class="swiper-slide"><img src="assets/img/clients/vicorla.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/emprende.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/kaisa.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/entregas.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/local.jpg" class="img-fluid" alt=""></div>
            

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4 id="contact">Contáctanos</h4>
            <p>Si estas interesado en conocer más de nosotros y nuestros servicios, visita nuestras redes sociales o bien, puedes agendar una cita con nosotros vía WhatsApp y con gusto te atendemos</p>
          </div>
          <div class="col-lg-6">
            <!--<form action="" method="post">-->
            <form action="mailto:davidtrejo_1@outlook.com" method="get">
  <input type="email" name="body" placeholder="¿Tienes dudas? Envíalas a nuestro correo">
  <input type="submit" value="Enviar" style="Background-color: #2C74B3">
</form>

            <!--</form>-->
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Visita nuestra páginas</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/EnlacesComercialesMex/following">Enlaces Comerciales</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/venyvivetonanitla">Ven y vive Tonanitla</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/profile.php?id=100091348394567">Ruta Tonanitla Jaltenco</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/tonanitlafolkloreytradicion">Tonanitla Folklore y Tradición</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/tonanitlatradicional">Tonanitla Tradicional</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/EnlacesComercialesMex/services">Campañas masivas segmentadas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/EnlacesComercialesMex/services">Videos aéreos con drones</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/EnlacesComercialesMex/services">Diseño gráfico</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/EnlacesComercialesMex/services">Asesoría de marketing de ventas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/EnlacesComercialesMex/services">Fotografía y video</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctanos</h4>
            <p>
              Dr. Daniel Ruíz No. 103 Int. 25 <br>
              Col. Doctores, Cuauhtémoc<br>
              Ciudad de México, C.P 06720 <br><br>
              <strong>WhatsApp:</strong> +52 55 1868 8664<br>
              <strong>Email:</strong> davidtrejo_1@outlook.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
  <h3 id="calif">CALIFÍCANOS</h3>
  <p>Ayúdanos calificando tu experiencia en nuestra plataforma. Con tu calificación nos ayudarás a trabajar en futuras mejoras para brindarte una experiencia más agradable.</p>
  <div class="social-links mt-3">
    <a href="#calif" class="rating good-rating"><i class="bx bx-smile"></i></a>
    <a href="#calif" class="rating bad-rating"><i class="bx bx-sad"></i></a>
  </div>
</div>

<script>
  const ratingElements = document.querySelectorAll('.rating');

  ratingElements.forEach(element => {
    element.addEventListener('click', () => {
      ratingElements.forEach(el => {
        el.classList.remove('selected');
      });
      element.classList.add('selected');
      showMessage();
    });
  });

  function showMessage() {
    const message = document.createElement('div');
    message.textContent = '¡Gracias por tu valoración!';
    message.classList.add('message');
    document.body.appendChild(message);
    setTimeout(() => {
      message.remove();
    }, 5000);
  }
</script>

<style>
  .rating {
    font-size: 24px;
  }

  .selected {
    font-weight: bold;
  }

  .message {
    font-size: 27px;
    color: #2C74B3;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
</style>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Vicorla S.A de C.V</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="" > Jatziri Hernandez Hernandez</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>