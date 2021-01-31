<?php
session_start();
if ($_SESSION['tip'] == null) {
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="main5.css">
</head>

<body id="home" class="open-left">
  <div id="offcanvas-left" class="hide">
    <div id="dopuna">
    </div>
    <ul>
      <li><a href="dodajFilm.php"> <i class="fas fa-trophy"> </i> Dodaj film </a></li>
      <li><a href="main.php"> <i class="fas fa-user"> </i> Lista filmova </a></li>
      <li><a href="logout.php"> <i class="fas fa-outdent"> </i> Izloguj se </a></li>
    </ul>
  </div>
  <div class="togglebar">
    <div class="togglebar_left">
      <div id="dugme" class="toggle" onclick="toggleLeft()">
        <i class="fa fa-bars"></i>
      </div>
      <div>
        <a href="dodajFilm.php"> <i class="fas fa-trophy" id="trofej" onmouseover="MouseOver1()"></i> </a>
        <a href="main.php"> <i class="fas fa-user" id="korisnik" onmouseover="MouseOver3()"></i></a>
        <a href="logout.php"> <i class="fas fa-outdent" id="izloguj" onmouseover="MouseOver4()"></i></a>
      </div>
    </div>

  </div>
  </div>
  <div class="main">
    <header>
      <p id="pageTitle"> Lista svih filmova </p>
    </header>
    <div class="center">
      <div class="movie_list">
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
            echo "<img style='width: 300px ; height: 300px ' onclick='azurirajFilm( \"$naslov\")'   src=" . $movie["poster"] . " />";
            // ,\"$opis\",\"$zanr\",\"$scenarista\",\"$reziser\",\"$producentskaKuca\",\"$glumci\",\"$godinaIzdanja\",\"$poster\",\"$trajanje\",  
          }
          ?>
        </main>
      </div>

      <img src="" alt="">
    </div>
    <script type="text/javascript" src="main5.js"> </script>
</body>

</html>