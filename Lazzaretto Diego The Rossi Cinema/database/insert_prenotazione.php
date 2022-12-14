<?php
    require_once 'dbconnection.php';
    session_start();
    if(isset($_POST["prenota"]))
    {
        date_default_timezone_set('Europe/Rome');
        $posti=$connessione->real_escape_string($_REQUEST['posti']);
        $id_film=$connessione->real_escape_string($_REQUEST['film_id']);
        $data = date('Y-m-d');
        $email = $_SESSION['email'];

        if($posti == "")
        {
            echo "<script type='text/javascript'>alert('Inserire i posti'); window.location.href = 'home.php';
            </script>";
        }
        else 
        {
            $sql = "SELECT titolo from film where id='$id_film'";
                    if($result = $connessione->query($sql)){
                        if($result->num_rows > 0){
                            while($row = $result->fetch_array()){
                                $titolo = $row['titolo'];
                            }
                        }
                    }

            $sql2="INSERT INTO prenotazioni(email,titolo,data,posti) VALUES('$email','$titolo','$data','$posti')";
        
            if ($connessione->query($sql2) === true)
            {
                echo "<script type='text/javascript'>alert('Prenotazione eseguita'); window.location.href = '../database/home.php';
                </script>";
            } 
            else {
                echo "<script type='text/javascript'>alert('Errore nella prenotazione'); window.location.href = '../database/prenotazione.php';
                </script>";
            }
            $connessione->close();
        }
    }
?>
