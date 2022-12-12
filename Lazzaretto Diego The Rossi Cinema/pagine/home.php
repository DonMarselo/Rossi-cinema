<?php
    require_once'dbconfig.php';
    
    $sql = "SELECT titolo,regista,genere,anno from cinema where id=1";
    $query = $dbh->prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
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
        <div><a href="login.php"><input type="button" id="login" onclick="" value="👤LOGIN"></a></div>
    </div>
    <?php echo htmlentities($result->titolo);?>
    <div class="scelta_film">
        <div class="film">
            <figure>
                <img src="../immagini/starwars1.jpg">
                <figcaption>
                    <h2><?php echo htmlentities($result->titolo);?></h2>
                    <p>Genere: Sci-fi/Azione</p>
                    <p>Regista: George Lucas</p>
                    <p>Anno: 1999</p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <figure>
                <img src="../immagini/starwars2.jpg">
                <figcaption>
                    <h2>Star Wars II - L'attacco dei cloni</h2>
                    <p>Genere: Sci-fi/Azione</p>
                    <p>Regista: George Lucas</p>
                    <p>Anno: 2002</p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <figure>
                <img src="../immagini/starwars3.jpg">
                <figcaption>
                    <h2>Star Wars III - La vendetta dei sith</h2>
                    <p>Genere: Sci-fi/Azione</p>
                    <p>Regista: George Lucas</p>
                    <p>Anno: 2005</p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>
    </div>

    <div class="scelta_film">
        <div class="film">
            <figure>
                <img src="../immagini/shrek.jpg">
                <figcaption>
                    <h2>Star Wars I - La minaccia fantasma</h2>
                    <p>Genere: Sci-fi/Azione</p>
                    <p>Regista: George Lucas</p>
                    <p>Anno: 1999</p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <figure>
                <img src="../immagini/batman.jpg">
                <figcaption>
                    <h2>Star Wars II - L'attacco dei cloni</h2>
                    <p>Genere: Sci-fi/Azione</p>
                    <p>Regista: George Lucas</p>
                    <p>Anno: 2002</p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>

        <div class="film">
            <figure>
                <img src="../immagini/deadpool.jpg">
                <figcaption>
                    <h2>Star Wars III - La vendetta dei sith</h2>
                    <p>Genere: Sci-fi/Azione</p>
                    <p>Regista: George Lucas</p>
                    <p>Anno: 2005</p>
                    <p><input type="button" value="Acquista ora"></p>
                </figcaption>
            </figure>
        </div>
    </div>
</body>
</html>


