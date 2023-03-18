<!DOCTYPE html>

<!-- saved from url=(0061)file:///C:/Users/mpolo/Downloads/SoftLand/SoftLand/login.html -->
<html lang="en">

<head>

  <?php

  session_start();

  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";

  // Connessione al database
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Verifica la connessione
  if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
  }

  $user = $_SESSION["username"];

  $sql = "SELECT fkUtente, fkProdotto, prezzo, qt, statoSpedizione FROM ordine WHERE fkUtente = '$user'";
  $result = mysqli_query($conn, $sql);

  ?>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ordini</title>
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
  <link href="prodotti.css" rel="stylesheet">

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
          <li><a href="logout.php">Logout</a></li>
          <li></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Section ======= -->
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

      <div class="container" height: 35px>
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="" class="aos-init aos-animate">Lista ordini di <?php echo "$user"; ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php

    echo "<table>";
    echo "<tr><th>Prodotto</th><th>Prezzo</th><th>Quantità</th><th>Stato</th></tr>";

    
    while ($row = mysqli_fetch_assoc($result)) {

      echo "<tr>";
      echo "<td>" . $row["fkProdotto"] . "</td>";
      echo "<td>" . '€' . $row["prezzo"] . "</td>";
      echo "<td>" . $row["qt"] . "</td>";

      if($row['statoSpedizione'] == 1)
        echo "<td> Spedito </td>";

      else
      echo "<td> Non spedito</td>";

      echo "</tr>";
    }

    echo "</table>";
    mysqli_close($conn);
    ?>

  </main><!-- End #main -->

</body>

</html>