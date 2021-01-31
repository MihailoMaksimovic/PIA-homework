<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB1 = "korisnici";
$DB2 = "filmovi";

// Create connection
$conn = new mysqli($servername, $username, $password);


$db1 = "CREATE DATABASE IF NOT EXISTS korisnici ";
$db2 = "CREATE DATABASE IF NOT EXISTS filmovi ";

$conn->close();

$connec = new mysqli($servername, $username, $password, $DB1);



$KORISNICI = "CREATE TABLE `korisnici`( 
	`tip` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`ime` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`prezime` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`korisnickoIme` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`lozinka` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;";

if ($connec->query($KORISNICI) === TRUE) {
    //echo "Table imdbAllUsers created successfully";
} else {
    //echo "Error creating table: " . $connec->error;
}

$connec->close();

$connec2 = new mysqli($servername, $username, $password, $DB2);

$FILMOVI = "CREATE TABLE `filmovi`( 
	`naslov` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`opis` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`zanr` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`scenarista` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`reziser` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`producentskaKuca` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`glumci` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`godinaIzdanja` Int( 11 ) NOT NULL,
	`poster` Text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	`trajanje` Int( 11 ) NOT NULL,
	`ocena` Int( 255 ) NOT NULL DEFAULT 0,
	`brojOcena` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0' )
CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
ENGINE = InnoDB;";

if ($connec2->query($FILMOVI) === TRUE) {
    //echo "Table imdbAllUsers created successfully";
} else {
    //echo "Error creating table: " . $connec->error;
}

$connec2->close();

require "login.php";
if (isset($_SESSION["email"])) {
    header("location: ./korisnik/pocetna.php");
}
?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index.css">

<head>
    <title>IMDB-улогујте се </title>
</head>

<body>

    <div class="login-page">
        <div class="form">
            <form class="login-form" action="login.php" method="POST">
                <input type="email" placeholder="email" name="email" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus>
                <input type="password" placeholder="lozinka" name="lozinka" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus>
                <input type="submit" name="Login" value="Login" id="openMain">
                <p style="background-color: black; color: white" class="message "> Nemate nalog? <a style="color: white;" href="registracija.php">Registrujte sе </a> </p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="index.js"></script>
</body>

</html>