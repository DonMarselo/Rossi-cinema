<?php
    require_once 'dbconnection.php';

        session_start();
        if(!isset($_SESSION['login'])){
            echo "<script type='text/javascript'> window.location.href = '../index/login.html';
                        </script>";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/prenotazione.css?ts=<?=time()?>&quot"> 
    <title>Prenotazione - The Rossi Cinema</title>
</head>
<body>
    <div id="informazioni">
        <div id="immagine">
            <img src="../img/deadpool.jpg">
        </div>
        <div id="dati">
            s
        </div>
    </div>
</body>
</html>