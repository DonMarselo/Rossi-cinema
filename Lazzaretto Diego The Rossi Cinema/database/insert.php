<?php
    require_once 'dbconnection.php';
    if(isset($_POST["register"]))
    {
        $nome=$connessione->real_escape_string($_REQUEST['nome']);
        $cognome=$connessione->real_escape_string($_REQUEST['cognome']);
        $email=$connessione->real_escape_string($_REQUEST['email']);
        $password=$connessione->real_escape_string($_REQUEST['password']);
        if($nome == "" || $cognome == "" || $email == "" || $password == "")
        {
            echo "<script type='text/javascript'>alert('Inserire tutti i dati'); window.location.href = '../index/registrazione.html';
            </script>";
        }
        else 
        {
            $sql="INSERT INTO users(nome,cognome,email,`password`) VALUES('$nome','$cognome','$email','$password')";
        
            if ($connessione->query($sql) === true)
            {
                echo "<script type='text/javascript'>alert('Registrazione effettuata con successo'); window.location.href = '../index/login.html';
                </script>";
            } 
            else {
                echo "<script type='text/javascript'>alert('Errore nella registrazione'); window.location.href = '../index/login.html';
                </script>";
            }
            $connessione->close();
        }
    }
?>