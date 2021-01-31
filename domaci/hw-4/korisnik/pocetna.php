<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

define('DB_NAME', 'filmovi');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
    die("nema konekcije");
}

$db_selected = mysqli_select_db($link, DB_NAME);
if (!$db_selected) {
    die("database ne postoji");
}

$select = mysqli_query($link, "SELECT * FROM `filmovi` ");
$movies = array();

while ($movie = mysqli_fetch_array($select)) {
    $movies[] = $movie;
}


?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pocetna.css">
</head>

<header>
    <img src="../assets/imdb.png" alt="">
    <h1  id="pageTitle"> Lista svih filmova </h1>
    <a href="../logout.php" type="button" style="height:30px;    margin-top: 25px;     margin-right: 30px;" class="btn btn-warning">
        <span class="glyphicon glyphicon-log-out"></span> Log out
    </a>

</header>

<body>
    <main>
        <?php
        foreach ($movies as $movie) {
            $naslov =  $movie["naslov"];
            $opis = $movie["opis"];
            $zanr = $movie["zanr"];
            $scenarista = $movie["scenarista"];
            $reziser = $movie["reziser"];
            $producentskaKuca = $movie["producentskaKuca"];
            $glumci = $movie["glumci"];
            $godinaIzdanja = $movie["godinaIzdanja"];
            $poster =  $movie["poster"];
            $trajanje =  $movie["trajanje"];
            echo "<img style='width: 300px ; height: 300px ' onclick='pogledajFilm(\"$naslov\")'   src=" . $movie["poster"] . " />";
        }
        ?>
    </main>
    <script type="text/javascript" src="pocetna.js"> </script>
</body>

</html>