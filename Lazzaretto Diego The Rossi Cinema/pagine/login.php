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
    <title>Login - The Rossi Cinema</title>
</head>
<body>
    <div id="login">
        <form method="POST" name="dati_login" id="dati_login">
            <div id="login_meta_sopra">
                <h1>Login</h1>
                <h3>Non hai un account? <a href="registrazione.php">Registrati</a></h3>
            </div>
            <div id="login_meta_sotto">
                <input type="text" id="login_email" class="login_input" placeholder="Email">
                <p><input type="text" id="login_password" class="login_input" placeholder="Password"></p>
                <p><input type="button" id="login_button" value="Accedi" class="login_input"></p>
            </div>

        </form>
    </div>
</body>
</html>