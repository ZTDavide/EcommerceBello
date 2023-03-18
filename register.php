<?php
$mysqli = new mysqli('localhost', 'root', '', 'ecommerce');
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $password = hash('sha256', $password); //Creazione dell'hash
    $query = "INSERT INTO utente (username, password) VALUES ('$username', '$password')";

    // Esecuzione della query e controllo degli eventuali errori
    if (!$mysqli->query($query)) {
        
        die($mysqli->error);

    } else {

        session_start();

        $_SESSION['logged_in'] = true;
        $_SESSION['is_admin'] = false;
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
}
?>