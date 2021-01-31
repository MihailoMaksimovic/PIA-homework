<?php

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

$select = mysqli_query($link, "SELECT * FROM `filmovi` WHERE naslov = '$naslov'  ");
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
    <link rel="stylesheet" type="text/css" href="index.css">
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
        <div class="togglebar_right">

        </div>

    </div>

    <div class="main">
        <header>

        </header>
        <div class="center">


            <div class="user2">
                <div class="data">
                    <div class="login-page">
                        <div class="form">
                            <div class="form">
                                <p id="movieTitle"></p>
                                <form class="register-form" id="form-name" method="post" action="film.php" name="form1">

                                    <input id="NASLOV" name="naslov" type="text" placeholder="naslov" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="">
                                    <input id="OPIS" name="opis" type="text" placeholder="opis" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="">
                                    <input id="ZANR" name="zanr" type="text" placeholder="zanr" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this)" autofocus value=""> </input>

                                    <input id="SCENARISTA" name="scenarista" type="text" placeholder="scenarista" oninput="InvalidMsg(this);" autofocus value=""> </input>

                                    <input id=" REZISER" name="reziser" type="text" placeholder="reziser" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="">
                                    <input id="PRODUCENTSKA_KUCA" name="producentskaKuca" type="text" placeholder="producentska kuca" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value=""> </input>

                                    <input id="GLUMCI" name="glumci" type="text" placeholder="glumci" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value=""> </input>
                                    <input id="GODINA_IZDANJA" name="godinaIzdanja" type="number" placeholder="godina izdanja" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value=""> </input>
                                    <input id="POSTER" name="poster" type="text" placeholder="poster" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value=""> </input>
                                    <input id="TRAJANJE" name="trajanje" type="number" placeholder="trajanje" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value=""> </input>

                                    <input id="SUCCESS" type="submit" name="Submit" value="Submit">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function writeTitle() {
            console.log(localStorage.getItem("key"));
            document.getElementById("movieTitle").innerHTML = localStorage.getItem("key");
        }

        writeTitle();
    </script>";
    <script type="text/javascript" src="main5.js"> </script>
</body>

</html>