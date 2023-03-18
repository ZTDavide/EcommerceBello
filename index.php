<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina principale - Ecommerce</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="./index_files/css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./index_files/aos.css" rel="stylesheet">
  <link href="./index_files/bootstrap.min.css" rel="stylesheet">
  <link href="./index_files/bootstrap-icons.css" rel="stylesheet">
  <link href="./index_files/boxicons.min.css" rel="stylesheet">
  <link href="./index_files/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./index_files/style.css" rel="stylesheet">

<style type="text/css" id="operaUserStyle"></style></head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Ecommerce bello</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.php">Home</a></li>
          <li><a href="carrello.php">Carrello</a></li>

          <?php

            session_start();

            if(isset($_SESSION['logged_in'])){

              echo "<li><a href='logout.php'>Logout</a></li>";
              echo "<li><a href='ordiniutente.php'>I tuoi ordini</a></li>";

              if($_SESSION['is_admin'] == true)
                echo "<li><a href='admin/listaordini.php'>Lista ordini</a></li>";

            }else{

              echo "<li><a href='registrazione.php'>Registrati</a></li>";
              echo "<li><a href='login.php'>Login</a></li>";
              
            }
          ?>
          <li></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right" class="aos-init aos-animate">L'eccommerce più conveniente che ti possa venir in mente</h1>
              <p class="mb-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">I costi più bassi dal 1982</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500" class="aos-init aos-animate"><a href="prodotti.php
                " class="btn btn-outline-white">Visualizza prodotti</a></p>
            </div>
            <div class="col-lg-4 iphone-wrap">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
            <h2 class="section-heading">Prezzi migliori per i clienti migliori</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
            
          </div>
          <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">  
              
            </div>
          </div>
          
        </div>

      </div>
    </section>

    <section class="section">

      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>Registrati</h3>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>Visualizza i prodotti</h3>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>Paga i prodotti</h3>
              
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->
    <!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="index.php#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="index_files/aos.js.trasferimento"></script>
  <script src="index_files/bootstrap.bundle.min.js.trasferimento"></script>
  <script src="index_files/swiper-bundle.min.js.trasferimento"></script>
  <script src="index_files/validate.js.trasferimento"></script>

  <!-- Template Main JS File -->
  <script src="./index_files/main.js.trasferimento"></script>

</body></html>