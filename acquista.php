<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || !isset($_COOKIE['carrello']) || empty($_COOKIE['carrello'])) {
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

$acquisto = json_decode($_COOKIE['carrello'], true);

foreach ($acquisto as $prodotto) {

    $username = $_SESSION['username'];
    $nomep = $prodotto['nome'];
    $qt = $prodotto['nome_qt'];
    $prezzo = $prodotto['prezzo'];

    $prezzo = $qt * $prezzo;

    $sql = "INSERT INTO ordine (fkUtente, fkProdotto, prezzo, qt) VALUES('$username', '$nomep', $prezzo, $qt)";
    $result = mysqli_query($conn, $sql);

}

mysqli_close($conn);
header("Location: svuota_carrello.php");
exit();

?>