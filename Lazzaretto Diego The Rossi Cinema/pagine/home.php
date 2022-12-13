<?php
    require_once 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../immagini/icona_cinema.png?ts=<?=time()?>&quot">
    <link rel="stylesheet" href="../grafica/home.css?ts=<?=time()?>&quot"> 
    <link rel="stylesheet" href="../grafica/film.css?ts=<?=time()?>&quot"> 
    <title>Home - The Rossi Cinema</title>
</head>
<body>
    <div id="navbar">
        <div><img src="../immagini/logo_rossi.jpg" id="logo_navbar"></div>
        <div><h2>BENVENUTO NEL CINEMA ITIS ROSSI</h2></div>
        <div><a href="login.php"><input type="button" id="login_button" onclick="" value="👤LOGIN"></a></div>
    </div>

    <div class="scelta_film">
        <div class="film">
            <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=1";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <figure>
                <img src="../immagini/starwars1.jpg">
                <figcaption>
                    <h2><?php echo $row['titolo'];?></h2>
                    <p>Genere: <?php echo $row['genere'];?></p>
                    <p>Regista: <?php echo $row['regista'];?></p>
                    <p>Anno: <?php echo $row['anno'];}}}?></p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=2";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <figure>
                <img src="../immagini/starwars2.jpg">
                <figcaption>
                    <h2><?php echo $row['titolo'];?></h2>
                    <p>Genere: <?php echo $row['genere'];?></p>
                    <p>Regista: <?php echo $row['regista'];?></p>
                    <p>Anno: <?php echo $row['anno'];}}}?></p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=3";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <figure>
                <img src="../immagini/starwars3.jpg">
                <figcaption>
                    <h2><?php echo $row['titolo'];?></h2>
                    <p>Genere: <?php echo $row['genere'];?></p>
                    <p>Regista: <?php echo $row['regista'];?></p>
                    <p>Anno: <?php echo $row['anno'];}}}?></p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="scelta_film">
        <div class="film">
            <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=4";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <figure>
                <img src="../immagini/shrek.jpg">
                <figcaption>
                    <h2><?php echo $row['titolo'];?></h2>
                    <p>Genere: <?php echo $row['genere'];?></p>
                    <p>Regista: <?php echo $row['regista'];?></p>
                    <p>Anno: <?php echo $row['anno'];}}}?></p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=5";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <figure>
                <img src="../immagini/batman.jpg">
                <figcaption>
                    <h2><?php echo $row['titolo'];?></h2>
                    <p>Genere: <?php echo $row['genere'];?></p>
                    <p>Regista: <?php echo $row['regista'];?></p>
                    <p>Anno: <?php echo $row['anno'];}}}?></p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <?php 
                $sql = "SELECT titolo,genere,regista,anno from film where id=6";
                if($result = $connessione->query($sql)){
                    if($result->num_rows > 0){
                        while($row = $result->fetch_array()){?>
            <figure>
                <img src="../immagini/deadpool.jpg">
                <figcaption>
                    <h2><?php echo $row['titolo'];?></h2>
                    <p>Genere: <?php echo $row['genere'];?></p>
                    <p>Regista: <?php echo $row['regista'];?></p>
                    <p>Anno: <?php echo $row['anno'];}}}?></p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>
    </div>

    <footer>
        <p>Author: Lazzaretto Diego -</p>
        <p><a href="https://insegreto.com/storage/shouts/B0NqM7zp6Jm74Rm0vvm/XR0nONZgRDvZvG4a404_hq.jpg">- 6190167@itisrossi.vi.it -</a></p>
        <p>- <?php
            echo $msg;
        ?></p>
    </footer>
</body>
</html>


