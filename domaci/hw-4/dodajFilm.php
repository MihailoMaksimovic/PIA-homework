<!-- <?php

        session_start();

        $naslov = "";
        $opis = "";
        $zanr = "";
        $scenarista = "";
        $reziser = "";
        $producentskaKuca = "";
        $glumci = "";
        $godinaIzdanja = "";
        $poster = "";
        $trajanje = "";

        if (!isset($_SESSION["naslov"])) {
        } else {
            $naslov =  $_SESSION['naslov'];
            $opis = $_SESSION['opis'];
            $zanr = $_SESSION['zanr'];
            $scenarista = $_SESSION['scenarista'];
            $reziser = $_SESSION['reziser'];
            $producentskaKuca = $_SESSION['producentskaKuca'];
            $glumci = $_SESSION['glumci'];
            $godinaIzdanja = $_SESSION['godinaIzdanja'];
            $poster = $_SESSION['poster'];
            $trajanje = $_SESSION['trajanje'];
        }
        ?> -->

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
            <p id="pageTitle"> Dodaj novi film </p>
        </header>
        <div class="center">


            <div class="user2">
                <div class="data">
                    <div class=".login-page-main">
                        <div class="form">
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
    <script type="text/javascript" src="main5.js"> </script>
</body>

</html>