<?php
$mysqli = new mysqli('localhost', 'root', '', 'ecommerce');
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if (isset($_POST['submit'])) {

    $username = $_POST['user'];
    $password = hash('sha256', $_POST['pass']);
    $query = $mysqli->query("SELECT * FROM utente WHERE username = '$username' AND password = '$password' AND is_admin = 1 ");

    // Esecuzione della query e controllo degli eventuali errori
    if ($query->num_rows) {

        session_start();

        $_SESSION['logged_in'] = true;
        $_SESSION['is_admin'] = true;
        $_SESSION['username'] = $username;

        header("Location: index.php");
        //echo "accesso consentito";

    } else {
        header("Location: login.php");
        //echo "accesso negato";
    }

}
?>