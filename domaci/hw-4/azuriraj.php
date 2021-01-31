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


    // $update_row = $mysqli->query("UPDATE `filmovi` SET `naslov`=$naslov,`opis`=$opis,`zanr`=$zanr,`scenarista`=$scenarista,`reziser`=$reziser,`producentskaKuca`=$producentskaKuca, `glumci`=$glumci,
    // `godinaIzdanja`=$godinaIzdanja,`poster`=$poster,`trajanje`=$trajanje WHERE  `naslov` = '$naslov'");
    // $sql = "UPDATE `filmovi` SET `naslov`=$naslov,`opis`=$opis,`zanr`=$zanr,`scenarista`=$scenarista,`reziser`=$reziser,`producentskaKuca`=$producentskaKuca, `glumci`=$glumci,
    // `godinaIzdanja`=$godinaIzdanja,`poster`=$poster,`trajanje`=$trajanje WHERE  `naslov` = '$naslov'   ";

    // if ($update_row) {
    //     echo "Record updated successfully";
    //     header("refresh:1.5 ; url= main.php");
    // } else {
    //     echo "Error updating record: " . $mysqli->error;
    // }

    $sql = "UPDATE filmovi SET zanr = '$zanr',opis = '$opis',
    scenarista = '$scenarista',
    reziser = '$reziser',
    producentskaKuca = '$producentskaKuca',
    glumci = '$glumci',
    godinaIzdanja = '$godinaIzdanja',
    poster = '$poster',
    trajanje = '$trajanje' WHERE naslov= '$naslov'";

    if ($link->query($sql) === TRUE) {
        echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Uspesno ste azurirali film </span>';
        header("refresh:1.5 ; url= main.php");
    } else {
        echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Imamo problem, pokusajte ponovo </span>';
        header("refresh:1.5 ; url= azurirajFilm.php");
    }


    // mysqli_query($link, $sql);


    // if ($link->query($sql) === TRUE) {
    //     echo "Record updated successfully";
    //     header("refresh:1.5 ; url= main.php");
    // } else {
    //     echo "Error updating record: " . $link->error;
    // }

    // $link->close();


    // if ($stmt = mysqli_prepare($link, $sql)) {
    //     mysqli_stmt_bind_param($stmt, "ssssssssss", $naslov, $opis, $zanr, $scenarista, $reziser, $producentskaKuca, $glumci, $godinaIzdanja, $poster, $trajanje);

    //     if (mysqli_stmt_execute($stmt)) {
    //         echo '<span style="color:#be2f2f;text-align:center;font-size:10vw; ">Uspesno ste azurirali film </span>';
    //         header("refresh: 10; url= main.php");
    //     } else {
    //         echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Imamo problem, pokusajte ponovo </span>';
    //     }


    //     mysqli_stmt_close($stmt);
    // }
}
