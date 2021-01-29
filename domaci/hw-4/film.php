<?php

if (isset($_POST["Submit"])) {

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

    $naslov =  $_POST['naslov'];
    $opis = $_POST['opis'];
    $zanr = $_POST['zanr'];
    $scenarista =  $_POST['scenarista'];
    $reziser =  $_POST['reziser'];
    $producentskaKuca = $_POST['producentskaKuca'];
    $glumci =  $_POST['glumci'];
    $godinaIzdanja = $_POST['godinaIzdanja'];
    $poster = $_POST['poster'];
    $trajanje = $_POST['trajanje'];


    $select = mysqli_query($link, "SELECT `naslov` FROM `filmovi` WHERE `naslov` = '" . $_POST['naslov'] . "'") or exit(mysqli_error($connectionID));
    if (mysqli_num_rows($select)) {
        echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Ovaj film vec postoji !!! </span>';
        header("refresh:2 ; url=dodajFilm.php");
        die();
    }

    $sql = "INSERT INTO filmovi (naslov,opis ,zanr,scenarista,reziser, producentskaKuca, glumci ,godinaIzdanja ,poster ,trajanje) VALUES(?,?,?,?,?,?,?,?,?,?) ";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $naslov, $opis, $zanr, $scenarista, $reziser, $producentskaKuca, $glumci, $godinaIzdanja, $poster, $trajanje,);

        if (mysqli_stmt_execute($stmt)) {
            echo '<span style="color:#be2f2f;text-align:center;font-size:10vw; ">Uspesno ste ubbacili film u bazu podataka </span>';
            header("refresh:1.5 ; url= main.php");
        } else {
            echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Imamo problem, pokusajte ponovo </span>';
        }

        mysqli_stmt_close($stmt);
    }
}

?>

<!DOCTYPE html>
<html>

</html>