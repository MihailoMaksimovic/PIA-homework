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


$nazivFilma = $_GET["naslov"];
$ocena = $_GET["ocena"];
$brojOcena = $_GET["brojOcena"];


echo "<script>console.log('Debug Objects: " . $nazivFilma . "' );</script>";
echo "<script>console.log('Debug Objects: " . $ocena . "' );</script>";
echo "<script>console.log('Debug Objects: " . $brojOcena . "' );</script>";

$sql = "UPDATE filmovi SET ocena = '$ocena',brojOcena = '$brojOcena' WHERE naslov= '$nazivFilma'";

if ($link->query($sql) === TRUE) {
    echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Uspesno ste ocenili film </span>';
    header("refresh:1.5 ; url= pocetna.php");
} else {
    echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Imamo problem, pokusajte ponovo </span>';
    header("refresh:1.5 ; url= pocetna.php");
}
