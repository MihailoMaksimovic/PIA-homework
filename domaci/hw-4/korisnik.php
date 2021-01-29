<?php

if (isset($_POST["Submit"])) {

    define('DB_NAME', 'korisnici');
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

    $ime =  $_POST['ime'];
    $prezime = $_POST['prezime'];
    $korisnickoIme =  $_POST['korisnickoIme'];
    $email = $_POST['email'];
    $lozinka =  $_POST['lozinka'];
    $lozinka_ponovljena = $_POST["lozinka_potvrda"];


    session_start();
    $_SESSION['ime']   = $ime;
    $_SESSION['prezime']   = $prezime;
    $_SESSION['korisnickoIme']   = $korisnickoIme;
    $_SESSION['email']  = $email;


    $select = mysqli_query($link, "SELECT `email` FROM `korisnici` WHERE `email` = '" . $_POST['email'] . "'") or exit(mysqli_error($connectionID));
    if (mysqli_num_rows($select)) {
        echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Овај email је већ у употреби, молимо вас унесите други</span>';
        header("refresh:2 ; url=registracija.php");
        die();
    }

    $select = mysqli_query($link, "SELECT `korisnickoIme` FROM `korisnici` WHERE `email` = '" . $_POST['korisnickoIme'] . "'") or exit(mysqli_error($connectionID));
    if (mysqli_num_rows($select)) {
        echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Korisnicko ime vec postoji</span>';
        header("refresh:2 ; url=registracija.php");
        die();
    }


    if ($lozinka != $lozinka_ponovljena) {
        echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Lozinke se ne poklapaju </span>';
        header("refresh:1.5, url = registracija.php");
        exit();
    }

    $sql = "INSERT INTO korisnici (ime,prezime ,email,korisnickoIme,lozinka) VALUES(?,?,?,?,?) ";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss", $ime, $prezime, $email, $korisnickoIme, $param_password);

        $param_username = $ime;
        $param_password = password_hash($lozinka, PASSWORD_DEFAULT);

        if (mysqli_stmt_execute($stmt)) {
            session_destroy();
            echo '<span style="color:#be2f2f;text-align:center;font-size:10vw; ">Успешно сте се улоговали</span>';
            header("refresh:1.5 ; url= index.php");
        } else {
            echo '<span style="color:#be2f2f;text-align:center;font-size:10vw;">Имамо проблем, молимо вас покушајте поново</span>';
        }

        mysqli_stmt_close($stmt);
    }
}

?>

<!DOCTYPE html>
<html>

</html>