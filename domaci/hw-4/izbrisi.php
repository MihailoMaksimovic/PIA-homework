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

    $naslov =  $_POST['naslov2'];

    $sql = "DELETE FROM `filmovi` WHERE `naslov` = '$naslov'";

    if ($link->query($sql) === TRUE) {
        echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Uspesno ste izbrisali film </span>';
        header("refresh:1.5 ; url= main.php");
    } else {
        echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Imamo problem, pokusajte ponovo </span>';
        header("refresh:1.5 ; url= azurirajFilm.php");
    }
}
