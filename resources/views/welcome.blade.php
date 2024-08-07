<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
  <title>Laravel-Usuarios</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



    </head>
    <body>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6250ac347b967b117989817f/1g05i1beq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
End of Tawk.to Script-->

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/

  ======================================================= -->
    </head>
    <body>
    <header id="header">

<div class="container">

  <div class="logo float-left">
    <!-- Uncomment below if you prefer to use an image logo -->
    <h1 class="text-light"><a href="#intro" class="scrollto"><span>Laravel-usuarios</span></a></h1>
    <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
  </div>

  <nav class="main-nav float-right d-none d-lg-block">
    <ul>
      <li class="active"><a href="#intro">Home</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
      <li><a href="#portfolio">Galería</a></li>
    </ul>
  </nav><!-- .main-nav -->
  
</div>
</header><!-- #header -->

<!--==========================
Intro Section
============================-->
<section id="intro" class="clearfix">
<div class="container d-flex h-100">
  <div class="row justify-content-center align-self-center">
    <div class="col-md-6 intro-info order-md-first order-last">
      <h2>Fast solutions<br>for you<span> Company!</span></h2>
      <div>
        <a href="https://wa.me/+584244563270" class="btn-get-started scrollto">Contact us!</a>
      </div>
    </div>

    <div class="col-md-6 intro-img order-md-last order-first">
      <img src="img/intro-img.svg" alt="" class="img-fluid">
    </div>
  </div>

</div>
</section><!-- #intro -->

<main id="main">

<!--==========================
  Portfolio Section
============================-->
<section id="portfolio" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title">Our Services</h3>
    </header>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="pagina1.php">Electrician</a></h4>
            <p>Web</p>
            <div>
              <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="pagina1.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Plumber 2</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="pagina2.php" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">App 2</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Card 2</a></h4>
            <p>Card</p>
            <div>
              <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Web 2</a></h4>
            <p>Web</p>
            <div>
              <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">App 3</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Card 1</a></h4>
            <p>Card</p>
            <div>
              <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Card 3</a></h4>
            <p>Card</p>
            <div>
              <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Web 1</a></h4>
            <p>Web</p>
            <div>
              <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- #portfolio -->

 <!-- ***** Testimonials Starts ***** 
  <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Planes <em>de Pago</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>A continuación se presentan todos nuestros Planes de Pago disponibles</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/first-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                          <script src="https://www.paypal.com/sdk/js?client-id=AXXfNJsjcGNnxZKuDELoIh9AnweZ7ND8I6HY7Pygot8b3l9NCc0Hhorcf6KDEhvclSrvZ2u6rx9DS3I7"></script>
                            <a href="{{ url('/paypal/pay') }}"><span>Plan Básico</span></a>
                            <h4>3,99 $/mes</h4>
                            <p>Un plan muy basico que se adapta a tus necesidades, mostrandote asi lo mas escencial para que encuentres perfiles relacionado a tu emprendimiento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/second-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <a href="{{ url('/paypal/pay') }}"><span>Plan Medium</span></a>
                            <h4>9,99 $/mes</h4>
                            <p>Este plan cuenta con herramientas mas avanzadas que te brindan la posibiidad de administrar de forma mas eficaz tus proyectos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/third-trainer.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <a href="{{ url('/paypal/pay') }}"><span>Plan Medium</span></a>
                            <h4>19,99 $/mes</h4>
                            <p>Un plan unico y completo que te brinda todas las herramientas para ser número 1 en tus proyectos, atención 24/7, sin limitaciones logrando así mas alcance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     ***** Testimonials Ends ***** -->
    
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong>Copyright © 1999-2024. Todos los derechos reservados.</strong>.
      </div>
      <div class="credits">
       
        <p>Autores: Sergio Silano</a>
      </div>
    </div>
  </footer><!-- #footer -->



<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
    </body>
</html>
