<?php

if (!isset($_COOKIE['carrello'])) {
    $carrello = array();
} else {
    $carrello = json_decode($_COOKIE['carrello'], true);
}

if (isset($_POST['nome'], $_POST['prezzo'], $_POST['nome_qt'])) {

    if($_POST['nome_qt'] <= 0){

        header("Location: carrello.php");
        exit;

    }
    
    $prodotto = array(
        'nome' => $_POST['nome'],
        'prezzo' => $_POST['prezzo'],
        'nome_qt' => $_POST['nome_qt']
    );

    $carrello[] = $prodotto;
    setcookie('carrello',json_encode($carrello), time() + (86400 * 30), "/");
}

?>  