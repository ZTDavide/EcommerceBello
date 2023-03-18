<!DOCTYPE html>
<!-- saved from url=(0064)file:///C:/Users/mpolo/Downloads/SoftLand/SoftLand/carrello.html -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <?php

  session_start();

  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {

    header("Location: login.php");
    exit;

  }


  ?>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Carello</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="./carrello_files/css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./carrello_files/aos.css" rel="stylesheet">
  <link href="./carrello_files/bootstrap.min.css" rel="stylesheet">
  <link href="./carrello_files/bootstrap-icons.css" rel="stylesheet">
  <link href="./carrello_files/boxicons.min.css" rel="stylesheet">
  <link href="./carrello_files/swiper-bundle.min.css" rel="stylesheet">
  <link href="carrello.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./carrello_files/style.css" rel="stylesheet">

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
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">Ecommerce bello</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index.php">Home</a></li>
          <li><a href="logout.php">Logout</a></li>


          <li></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Features Section ======= -->

    <section class="hero-section inner-page">
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
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="" class="aos-init aos-animate">Carrello di <?php echo $_SESSION['username']?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <div>
      <?php
      if (isset($_COOKIE['carrello']) && !empty($_COOKIE['carrello'])): ?>
        <table>
          <thead>
            <tr>
              <th>Prodotto</th>
              <th>Quantità</th>
              <th>Prezzo</th>
              <th>Totale</th>
              <th>Elimina</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $carrello = json_decode($_COOKIE['carrello'], true);
            $totale = 0;
            $index = 0;

            foreach ($carrello as $prodotto) {
              $nome_prodotto = $prodotto['nome'];
              $quantità = $prodotto['nome_qt'];
              $prezzo = $prodotto['prezzo'];

              $totale_prodotto = $quantità * $prezzo;
              $totale += $totale_prodotto;

              ?>
              <tr>
                <td>
                  <?php echo $nome_prodotto ?>
                </td>
                <td>
                  <?php echo $quantità ?>
                </td>
                <td>
                  <?php echo $prezzo ?>&euro;
                </td>
                <td>
                  <?php echo $totale_prodotto ?>&euro;
                </td>
                <td>
                  <form action="elimina_prodotto.php" method="post">
                    <input type="hidden" name="indice" value="<?php echo $index ?>">
                    <button type="submit">Rimuovi prodotto</button>
                  </form>
                </td>
              </tr>
              <?php $index = $index + 1;
            } ?>
            <tr>
              <td colspan="3"><strong>Totale:</strong></td>
              <td colspan="2">
                <?php echo $totale ?>&euro;
              </td>
            </tr>
          </tbody>
        </table>

      <?php else: ?>
        <div class="empty-cart">
          <p>Il carrello è vuoto.</p>
        </div>
      <?php endif; ?>

      <div style="text-align: center; margin-top: 50px">
        <button onclick="prodotti()">Continua lo shopping</button>

        <script>

          function prodotti() {

            document.location.href = 'prodotti.php';
          }

        </script>
        <button onClick="location.href='svuota_carrello.php'" class="logout-button">Svuota carrello</button>
        <button onClick="location.href='acquista.php'" class="logout-button">Acquista</button>

      </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="carrello.php#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./carrello_files/aos.js.trasferimento"></script>
  <script src="./carrello_files/bootstrap.bundle.min.js.trasferimento"></script>
  <script src="./carrello_files/swiper-bundle.min.js.trasferimento"></script>
  <script src="./carrello_files/validate.js.trasferimento"></script>

  <!-- Template Main JS File -->
  <script src="./carrello_files/main.js.trasferimento"></script>



</body>

</html>