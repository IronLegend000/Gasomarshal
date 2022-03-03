<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gasomarshal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="" type="image/x-icon">
  <!-- Google Fonts -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


  <!--Importar los iconos de las redes sociales-->



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <!--En esta sección se crea el header con la etiqueta header, y un contenedor donde estarán los
    items (navs) donde nos redigiran alrededor de la páigna-->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <!--En este apartado se crean los navlinks con listas no ordenadas
            con etiqueta de hipervinculo (a), con la clase nav-link scrollto active en la primera sección 
          home -->

          <li><a class="nav-link scrollto active" href="#header">Home</a></li>
          <li><a class="nav-link scrollto" href="http://facturaweb.gasomarshal.biz:8080/#/">Facturación</a></li>
          <li><a class="nav-link scrollto" href="#services">Hardware</a></li>
          <li><a class="nav-link scrollto " href="#software">Software</a></li>
          <li><a class="nav-link scrollto" href="#allies">Aliados</a></li>
          <li><a class="nav-link scrollto" href="#clients">Clientes</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contáctanos</a></li>
        </ul>

        <!--Logo del navbar móvil o hamburguesa-->

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <!--En esta sección se crea el hero, junto con el texto que cuenta con la sección-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-caption">
          <h1 class="gasomarshal">Bienvenido a gasomarshal</h1>
          <p>Especializados en el desarrollo e integración de tecnologías y servicios para el sector gasolinero.</p>
        </div>
        <img class="d-block w-100" src="assets/img/hero/hero-bg.png" height="600px" alt="First slide">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <p>Sobreviven con propinas </p>
          <p>Padecen despachadores de combustible precariedad laboral, sin sueldo y prácticamente nadie tiene seguridad social.</p>
        </div>
        <img class="d-block w-100" src="assets/img/hero/gas.jpg" height="600px" alt="Second slide">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <p>Contamos con lo más avanzado en nuestro servicio de Software
            <br>
            Conócelo
          </p>

        </div>
        <img class="d-block w-100" src="assets/img/hero/coding.jpg" height="600px" alt="Third slide">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <p>Futuro de las gasolineras </p>
          <p>Las gasolineras se convertirán en grandes centros logísticos de gestión de pedidos online.</p>

      </div>
        <img class="d-block w-100" src="assets/img/hero/office space.jpg" height="600px" alt="Fourth slide">
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">

          <p>Conviértete en uno de nuestros clientes clave.</p>
        </div>
        <img class="d-block w-100" src="assets/img/hero/pemex size.jpg" height="600px" alt="Fifth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>
  <div class="btn-fact">
    <a href="http://facturaweb.gasomarshal.biz:8080/#/"> <button type="button"
        class="btn btn-success btn-billing">Factura aquí!</button>
    </a>

  </div>


  <!--Services section-->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <img src="tanques.png" alt="" srcset="">

      <div class="section-title">
        <h2>Kioscos y Pedestales y Puntos de Venta</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <div class="icon-box">
            <p>
              Muebles y equipos esenciales para servicio a clientes en áreas de despacho.</p>
            <img src="assets/img/hardware/1.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-center mt-4 mt-md-0" data-aos="fade-up-left"
          data-aos-delay="200">
          <div class="icon-box">
            <p>Equipos que incluyen impresora, pantalla táctil, y lector para QR®, NFC®, tarjetas.</p>
            <img src="assets/img/hardware/puntodeventa.png" class="img-fluid" alt="">

          </div>
        </div>
      </div>
      <div class="section-title">
        <h2>Dispensadores y Refacciones</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <p>
              Muebles y equipos esenciales para servicio a clientes en áreas de despacho.</p>
            <img src="assets/img/hardware/dispensador.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <p>Equipos que incluyen impresora, pantalla táctil, y lector para QR®, NFC®, tarjetas.</p>
            <img src="assets/img/hardware/refacciones.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
      <div class="section-title">
        <h2>Servidores e Interfaz para Dispensarios</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <p>
              Muebles y equipos esenciales para servicio a clientes en áreas de despacho.</p>
            <img src="assets/img/hardware/servidor-png.png" class="img-fluid" alt="">

          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <p>Equipos que incluyen impresora, pantalla táctil, y lector para QR®, NFC®, tarjetas.</p>
            <img src="assets/img/hardware/interfaz-2.png" class="img-fluid" alt="">

          </div>
        </div>
      </div>
      <div class="section-title">
        <h2>Preciadores Electrónicos y Consola para Tanques</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <p>
              Muebles y equipos esenciales para servicio a clientes en áreas de despacho.</p>
            <img src="assets/img/hardware/preciadores.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 d-flex align-items-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <p>Equipos que incluyen impresora, pantalla táctil, y lector para QR®, NFC®, tarjetas.</p>
            <img src="assets/img/hardware/consola-tanques.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
  </section><!-- End Services Section -->

  <!--Software sections-->
  <section id="software" class="software">
    <div class="container">
      <img src="assets/img/software/Group 17.png" class="img" alt="" srcset="">
      <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
          <img src="assets/img/software/software-package.png" alt="">
        </div>
        <div class="col ">
          <h1>Suite de software para gasolineras</h1>
          <p>Compatibles con las principales marcas de Dispensarios TEAM®, Bennett®, Gilbarco®, Wayne®; Consolas de
            Tanques VR®, INCON®, OPW®, FAFNIR®; y Preciadores Electrónicos PWM®, ABLE®, LYNXIS®.</p>
        </div>
      </div>
    </div>

  </section>
  <!--end Software sections-->

  <!-- sections-->
  <section class="software-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="box ">
            <img src="assets/img/software/Group 17.png" class="main_image" alt="" srcset="">
            </p>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 ">
          <div class="box ">
            <img src="assets/img/software/education-volumetric-pie-graphic.png" class="features" alt="" srcset="">
            <h3>Control <br>Volumétrico</h3>
            <p>
              Nuestro software garantiza de una forma fácil y segura el cumplimiento de las normas y regulaciones
              vigentes en materia de Controles Volumétricos.
            </p>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 ">
          <div class="box ">
            <img src="assets/img/software/erp.png" class="features" alt="" srcset="">
            <h3>ERP Administrativo</h3>
            <p>
              Automatice todas las funciones administrativas de su gasolinera o grupo gasolinero (compras, ventas,
              facturación, bancos, contabilidad, entre otras).
            </p>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 ">
          <div class="box ">
            <img src="assets/img/software/fleet.png" class="features" alt="" srcset="">
            <h3>Flotas Vehiculares</h3>
            <p>
              Fácil gestión, control y seguridad en consumos de gasolinas y diesel. Permite implementar un QR o NFC
              (chip) como medio de identificación.
            </p>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 ">
          <div class="box ">
            <img src="assets/img/software/handshake.png" class="features" alt="" srcset="">
            <h3>Programa de Lealtad</h3>
            <p>
              Fomente una relación de fidelidad con sus clientes otorgando 'puntos digitales' por sus consumos,
              canjeables por premios o dinero electrónico
            </p>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 ">
          <div class="box ">
            <img src="assets/img/software/security.png" class="features" alt="" srcset="">
            <h3>SASISOPA</h3>
            <p>
              Nuestro sistema facilita el cumplimiento y la administración de la norma y sus regulaciones en materia
              de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente. </p>
          </div>
        </div>

      </div>


    </div>
  </section>


  <!--Allies sections -->
  <section id="allies"class="allies">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="title">
          <h1>Aliados</h1>
        </div>
        <div class="img-center">
          <img src="assets/img/allies/Group 18.png" alt="" srcset="">
        </div>
        <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center">
          <div class="box">
            <a href="https://plenumsoft.com.mx/">
            <img src="assets/img/allies/plenumsoft.png" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center">
          <div class="box">
            <a href="https://www.fafnir.com/">
            <img src="assets/img/allies/Layer 2.png" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center ">
          <div class="box">
            <a href="http://team.com.mx/">
            <img src="assets/img/allies/team.png" class="img-fluid team" alt="">
            </a>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 d-flex align-items-center justify-content-center">
          <div class="box">
            <a href="https://swit.com.mx/">
              <img src="assets/img/allies/swift.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>


      </div>


    </div>
  </section><!-- End Allies Section -->

     <!--Clients sections -->
     <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="title">
            <h1>Clientes</h1>
          </div>
          <div class="img-center">
            <img src="assets/img/allies/Group 17.png" alt="" srcset="">
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-gasco.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-ges.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-gulf.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-fullgas.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-texaco.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-shell.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-pemex.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-galmogas01.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-g500.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
            <div class="box">
              <img src="assets/img/clients/gasolineras-rendiahorro.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>


      </div>
    </section><!-- End clients Section -->


    <!-- ======= Services Section ======= -->
    <section  class="additionals-services">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="im im-support"></i></div>
              <h4>Personal especializado</h4>
              <p> Contamos con personal especializado para asesorías y capacitación.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="im im-wrench"></i></div>
              <h4>Ingeniería</h4>
              <p>Servicios de Ingeniería de Software y Mecatrónica.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="im im-certificate-o"></i>
              </div>
              <h4>Personal certificado</h4>
              <p>- Personal certificado para la configuración y verificación de dispensarios y consolas de monitoreo de
                tanques.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



  
 


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title-contact">
        <h2>Apreciamos su contacto </h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Nuestra dirección </h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email </h3>
            <p> ventas@gasomarshal.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Llámanos</h3>
            <p>+1 999 999 9999</p>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14894.721988292355!2d-89.6411268!3d21.0454664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x955b0723ff5e7d2b!2sGasomarshal%20Control%20y%20Seguridad%20Inteligente!5e0!3m2!1ses-419!2smx!4v1640548414189!5m2!1ses-419!2smx"
            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="Telefóno" required>
            </div>
          
    
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Déjanos tu mensaje" required>
              </textarea>
            </div>

            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.html" class="logo"><img src="logo.png" alt="" width="200px"></a>
            <p>
              Direción <br>
              <strong>Telefóno:</strong> +52 (999) 195 2497<br>
              <strong>Email:</strong> atencionaclientes@gasomarshal.com<br>
            </p>
            <p>
            Ventas <br>
            <strong>Telefóno:</strong>+52 (999) 195 2497 <br>
            <strong>Email: </strong>  ventas@gasomarshal.com
          </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <!-- <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul> 
          -->
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Facturación</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes sociales</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>


            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Gasomarshal</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñador por <a href="">Eduardo Romero Mucel</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

</body>

</html>