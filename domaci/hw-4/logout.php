<?/*
session_start();
session_unset();
session_destroy();

header("location:index.php");
exit();*/
?>

<?php
session_start();
unset($_SESSION["ime"]);
unset($_SESSION['prezime']);
unset($_SESSION['email']);
unset($_SESSION['korisnickoIme']);
session_destroy();
header("refresh:0 ; url= index.php");
?>