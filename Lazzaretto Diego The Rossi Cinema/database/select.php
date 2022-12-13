<?php
    require_once 'dbconnection.php';

        $email=$connessione->real_escape_string($_REQUEST['email']);
        $password=$connessione->real_escape_string($_REQUEST['password']);

        if($email == "" || $password == "")
        {
            echo "<script type='text/javascript'>alert('Inserire tutti i dati'); window.location.href = '../index/login.html';
            </script>";
        }
        else 
        {
            $sql="SELECT email,password from users where email='$email' AND password='$password'";

        
            if ($result = $connessione->query($sql))
            {
                if($result->num_rows > 0)
                {
                    echo "<script type='text/javascript'>alert('Accesso effettuato'); window.location.href = 'home.php';
                    </script>";
                }
                else {
                    echo "<script type='text/javascript'>alert('Impossibile trovare l`account'); window.location.href = '../index/login.html';
                    </script>";
                }
            } 
            else {
                echo "<script type='text/javascript'>alert('Impossibile trovare l`account'); window.location.href = '../index/login.html';
                </script>";
            }
            $connessione->close();
        }
?>