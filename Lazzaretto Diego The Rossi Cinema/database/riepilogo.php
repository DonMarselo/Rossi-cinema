<?php
    require_once 'dbconnection.php';

        session_start();
        if(!isset($_SESSION['login'])){
            echo "<script type='text/javascript'> window.location.href = '../index/login.html';
                        </script>";
        }
        $email= $_SESSION['email'];

        $sql = "SELECT titolo,posti,data from prenotazioni where email='$email'";
        if($result = $connessione->query($sql)){
            if($result->num_rows > 0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/riepilogo.css?ts=<?=time()?>&quot"> 
    <title>Riepilogo pagamento - The Rossi Cinema</title>
</head>
<body>
    <div id="informazioni">
        <h1>RIEPILOGO PRENOTAZIONI</h1>
        <?php
            echo '<table id="dati_riepilogo">
                <tr>
                    <th>Film</th>
                    <th>Posti</th>
                    <th>Giorno</th>
                </tr>';
            while($row = $result->fetch_array()){
                echo '<tr>
                        <td>' . $row['titolo'] . '</td>
                        <td>' . $row['posti'] . '</td>
                        <td>' . $row['data'] . '</td>
                    </tr>';
            } echo '</table>';
        }}
        ?>
    </div>
</body>
</html>