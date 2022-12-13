<?php
    require_once 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../grafica/login.css?ts=<?=time()?>&quot"> 
    <title>Registrazione - The Rossi Cinema</title>
</head>
<body>
    <div id="login">
        <form method="POST" name="dati_login" id="dati_login">
            <div id="register_meta_sopra">
                <h1>Registrazione</h1>
                <h3>Hai già un account? <a href="login.php">Accedi</a></h3>
            </div>
            <div id="register_meta_sotto">
                <input type="text" id="login_email" class="login_input" placeholder="Nome">
                <input type="text" id="login_email" class="login_input" placeholder="Cognome">
                <input type="text" id="login_email" class="login_input" placeholder="Email">
                <input type="text" id="login_password" class="login_input" placeholder="Password">
                <input type="button" id="login_button" value="Registrati" class="login_input">
            </div>
        </form>
    </div>
</body>
</html>