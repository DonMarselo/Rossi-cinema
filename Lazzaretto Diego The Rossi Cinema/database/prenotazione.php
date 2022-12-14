<?php
    require_once 'dbconnection.php';

        session_start();
        if(!isset($_SESSION['login'])){
            echo "<script type='text/javascript'> window.location.href = '../index/login.html';
                        </script>";
        }
        $id = $_REQUEST['id_film'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/icona_cinema.png?ts=<?=time()?>&quot">
    <link rel="stylesheet" href="../style/prenotazione.css?ts=<?=time()?>&quot"> 
    <title>Prenotazione - The Rossi Cinema</title>
</head>
<body>
    <div id="informazioni">
        <div id="immagine">
            <img src="../img/<?php echo $id?>.jpg">
        </div>
        <div id="dati">
        <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=$id";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <h2><?php echo $row['titolo'];?></h2>
            <p>Genere: <?php echo $row['genere'];?></p>
            <p>Regista: <?php echo $row['regista'];?></p>
            <p>Anno: <?php echo $row['anno'];}}}?></p>
            <hr>
            <form action="insert_prenotazione.php" method="POST">
                Seleziona posti: 
                <input type="hidden" value="<?php echo $id?>" name="film_id">
                <input type="number" max="20" min="1" name="posti">
                <p><input type="submit" name="prenota" value="Prenota posti"></p>
            </form>
        </div>
    </div>
</body>
</html>