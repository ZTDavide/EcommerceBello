<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || $_SESSION['is_admin'] == false) {
    header('Location: ../login.php');
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

$sql = "SELECT * FROM ordine";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {

    if(isset($_POST[$row["id_ord"]])){

        $id_ord_cambiare = $row["id_ord"];
        $sql = "UPDATE ordine SET statoSpedizione = 1 WHERE id_ord = $id_ord_cambiare";
        $result_cambiamento = mysqli_query($conn, $sql);        

    }else{

        $id_ord_cambiare = $row["id_ord"];
        $sql = "UPDATE ordine SET statoSpedizione = 0 WHERE id_ord = $id_ord_cambiare";
        $result_cambiamento = mysqli_query($conn, $sql);    

    }
}

header("Location: listaordini.php");

?>
