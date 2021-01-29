<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('Location: index.php');
  exit();
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
      <li><a href="prijava.html"> <i class="far fa-calendar"> </i> Izbrisi film </a></li>
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
        <a href="prijava.html"> <i class="far fa-calendar" id="kalendar" onmouseover="MouseOver2()"></i></a>
        <a href="main.php"> <i class="fas fa-user" id="korisnik" onmouseover="MouseOver3()"></i></a>
        <a href="logout.php"> <i class="fas fa-outdent" id="izloguj" onmouseover="MouseOver4()"></i></a>
      </div>
    </div>

  </div>
  </div>
  <div class="main">
    <header>
    
    </header>
    <div class="center">

  </div>
  <script type="text/javascript" src="main5.js"> </script>
</body>

</html>