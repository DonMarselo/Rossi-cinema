<?php
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "cinema";
    
    $connessione = new mysqli($host, $user, $password, $database);

    if ($connessione === false) {
        echo ("Errore di connessione");
    }
    else {
        $msg = "Connesso al database con successo";
    }
?>