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
            $sql="SELECT nome,email,password from users where email='$email' AND password='$password'";
        
            if ($result = $connessione->query($sql))
            {
                if($result->num_rows > 0)
                {
                    $sql = "SELECT nome from users where email='$email' AND password='$password'";
                    if($result = $connessione->query($sql)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_array()){
                                $nome = $row['nome'];
                            }
                        }
                    }

                    $sql = "SELECT email from users where email='$email' AND password='$password'";
                    if($result = $connessione->query($sql)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_array()){
                                $email = $row['email'];
                            }
                        }
                    }
                    echo "<script type='text/javascript'>alert('Accesso effettuato'); window.location.href = 'home.php';
                    </script>";
                    session_start();
                    $_SESSION['datiUtente'] = $result->fetch_assoc();
                    $_SESSION['nome'] = $nome;
                    $_SESSION['email'] = $email;
                    $_SESSION['login']=true;
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