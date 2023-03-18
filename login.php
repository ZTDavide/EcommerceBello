<!DOCTYPE html>
<!-- saved from url=(0061)file:///C:/Users/mpolo/Downloads/SoftLand/SoftLand/login.html -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accedi ecommerce</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="./login_files/css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./login_files/aos.css" rel="stylesheet">
  <link href="./login_files/bootstrap.min.css" rel="stylesheet">
  <link href="./login_files/bootstrap-icons.css" rel="stylesheet">
  <link href="./login_files/boxicons.min.css" rel="stylesheet">
  <link href="./login_files/swiper-bundle.min.css" rel="stylesheet">
  <link href="login.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./login_files/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css" id="operaUserStyle"></style>
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">

    <?php

    session_start();
    if (isset($_SESSION['logged_in'])) {

      header("Location: index.php");

    }
    ?>

    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Ecommerce bello</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Home</a></li>
          <li><a href="carrello.php">Carrello</a></li>
          <li><a href="registrazione.php">Registrati</a></li>
          <li></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
    <div class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path
                d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                id="Path"></path>
            </g>
          </g>
        </svg>

      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-10 text-center" style="margin-top: 150px">
                <h1 data-aos="fade-up" data-aos-delay="" class="aos-init aos-animate">Accedi per continuare</h1>
              </div>
              <div id="form">
                <form name="form" action="logger.php" method="POST">
                  <label>Username: </label>
                  <input type="text" id="user" name="user"></br></br>
                  <label>Password: </label>
                  <input type="password" id="pass" name="pass"></br></br>
                  <input type="submit" id="btn" value="Login" name="submit" />
                </form>
                <p style="color:black">Non hai un account? <a href="registrazione.php">Registrati qui</a></p>
              </div>  

              <div class="text-center" style="margin-top: 20px">
                <h3 data-aos="fade-up" data-aos-delay="" class="aos-init aos-animate" style="color:#484848">Oppure</h1>
              </div   >
              
              <div class="text-center" style="margin-top: 50px">
                <h1 data-aos="fade-up" data-aos-delay="" class="aos-init aos-animate" style="color:#484848">Continua come admin</h1>
              </div>
              <div id="form">
                <form name="form" action="adminlogger.php" method="POST">
                  <label>Username: </label>
                  <input type="text" id="user" name="user"></br></br>
                  <label>Password: </label>
                  <input type="password" id="pass" name="pass"></br></br>
                  <input type="submit" id="btn" value="Login" name="submit" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      </divq>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->


  <a href="login.php#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./login_files/aos.js.trasferimento"></script>
  <script src="./login_files/bootstrap.bundle.min.js.trasferimento"></script>
  <script src="./login_files/swiper-bundle.min.js.trasferimento"></script>
  <script src="./login_files/validate.js.trasferimento"></script>

  <!-- Template Main JS File -->
  <script src="./login_files/main.js.trasferimento"></script>


</body>

</html>