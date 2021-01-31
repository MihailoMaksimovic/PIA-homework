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

$naslov = "";
$opis = "asf";
$zanr = "asd";
$scenarista = "";
$reziser = "";
$producentskaKuca = "";
$glumci = "";
$godinaIzdanja = "";
$poster = "";
$trajanje = "";


$movieTitle = $_GET["title"];

$select = "SELECT * FROM `filmovi` WHERE naslov  = '$movieTitle'  ";

$result = mysqli_query($link, $select);
$movie = mysqli_fetch_array($result);

$naslov = trim($movieTitle);
$opis = $movie['opis'];
$zanr = $movie['zanr'];
$scenarista = $movie['scenarista'];
$reziser = $movie['reziser'];
$producentskaKuca = $movie['producentskaKuca'];
$glumci = $movie['glumci'];
$godinaIzdanja = $movie['godinaIzdanja'];
$poster = $movie['poster'];
$trajanje = $movie['trajanje'];


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
        <div class="togglebar_right">

        </div>

    </div>

    <div class="main">
        <header>
            <p id="pageTitle">Aziraj film </p>
        </header>
        <div class="center">


            <div class="user2">
                <div class="data">
                    <div class=".login-page-main">
                        <div class="form">
                            <div class="form">
                                <p id="movieTitle" name="movieTitle"> <?php echo $movieTitle ?> </p>

                                <form class="register-form" id="form-name" method="post" action="azuriraj.php" name="form1">

                                    <input id="NASLOV" name="naslov" type="text" placeholder="naslov" oninput="InvalidMsg(this);" autofocus value="<?php echo "$naslov" ?>"> </input>
                                    <input id="OPIS" name="opis" type="text" placeholder="opis" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value=" <?php echo "$opis" ?>">
                                    <input id="ZANR" name="zanr" type="text" placeholder="zanr" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this)" autofocus value="<?php echo "$zanr" ?>"> </input>

                                    <input id="SCENARISTA" name="scenarista" type="text" placeholder="scenarista" oninput="InvalidMsg(this);" autofocus value="<?php echo "$scenarista" ?>"> </input>

                                    <input id=" REZISER" name="reziser" type="text" placeholder="reziser" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php echo "$reziser" ?>">
                                    <input id="PRODUCENTSKA_KUCA" name="producentskaKuca" type="text" placeholder="producentska kuca" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php echo "$producentskaKuca" ?>"> </input>

                                    <input id="GLUMCI" name="glumci" type="text" placeholder="glumci" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php echo "$glumci" ?>"> </input>
                                    <input id="GODINA_IZDANJA" name="godinaIzdanja" type="number" placeholder="godina izdanja" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php echo "$godinaIzdanja" ?>"> </input>
                                    <input id="POSTER" name="poster" type="text" placeholder="poster" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php echo "$poster" ?>"> </input>
                                    <input id="TRAJANJE" name="trajanje" type="number" placeholder="trajanje" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php echo "$trajanje" ?>"> </input>

                                    <input id="SUCCESS" type="submit" name="Submit" value="Submit">

                                </form>
                            </div>
                            <form method="post" action="izbrisi.php" name="form1">
                                <input hidden id="NASLOV" name="naslov2" type="text" placeholder="naslov" oninput="InvalidMsg(this);" autofocus value="<?php echo "$naslov" ?>"> </input>
                                <!-- <input name="nazivFilma " value="<?php echo "$naslov" ?>"> -->
                                <input style="color: red;" id="SUCCESS" type="submit" name="Submit" value="Izbisi"> </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="main5.js">

    </script>
</body>

</html>