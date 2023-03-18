<?php

    if(isset($_POST['indice'])){
        
        $indice = $_POST['indice'];

        if($indice == 0 and count(json_decode($_COOKIE['carrello'], true)) == 1)
            header("Location: svuota_carrello.php"); 

        else{
            $carrello = json_decode($_COOKIE['carrello'], true);
            unset($carrello[$indice]);
            $carrello = array_values($carrello);
            setcookie('carrello', json_encode($carrello), time() + (86400 * 30), "/");
            header("Location: carrello.php"); 
        }  

    }
    exit;
?>