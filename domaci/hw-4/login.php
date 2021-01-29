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
         $_SESSION['tip']   =  $row["admin"];
         header("Location:main.php");
      } else {
         echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;"> Погрешна шифра </span>';
         header("refresh:4 ; url=index.php");
      }
   } else {
      echo '<span style="color:#be2f2f;text-align:center;font-size:5vw;"> Налог не постоји, молимо вас региструјте се</span>';
      header("refresh:4 ; url=index.php");
   }
}
