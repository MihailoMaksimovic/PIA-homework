<?php
session_start();
require("bazaUpravljanje.php");
if (isset($_POST["Login"])) {
   $email = $_POST["email"];
   $lozinka = $_POST["lozinka"];
   // $email = mysqli_real_escape_string($link , $_POST["email"] ); 
   //  $password = mysqli_real_escape_string($link , $_POST["password"] ); 
   $sql = "SELECT * FROM korisnici where email = '$email' ";
   $result = mysqli_query($link, $sql);
   if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);

      if (password_verify($lozinka, $row["lozinka"])) {
         $_SESSION["email"]  =  $email;
         $_SESSION["ime"]  =  $row["ime"];
         $_SESSION["prezime"]  =  $row["prezime"];
         $_SESSION["korisnickoIme"]  =  $row["korisnickoIme"];
         $_SESSION['lozinka']   =  $row["lozinka"];
         $_SESSION['tip']   =  $row["tip"];
         if ($_SESSION['tip'] == "admin") {
            header("Location:main.php");
         } else {
            header("Location:./korisnik/pocetna.php");
         }
      } else {
         echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;"> Pogresna sifra </span>';
         header("refresh:1.5 ; url=index.php");
      }
   } else {
      echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;">Nalog ne postoji molimo vas registrujte se </span>';
      header("refresh:1.5 ; url=index.php");
   }
}
