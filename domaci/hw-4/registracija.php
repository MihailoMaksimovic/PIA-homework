<?php
session_start();
$ime = "";
$prezime = "";
$korisnickoIme = "";
$email = "";
$lozinka = "";

if (!isset($_SESSION["ime"])) {
} else {
  $ime = $_SESSION['ime'];
  $prezime = $_SESSION['prezime'];
  $korisnickoIme = $_SESSION['korisnickoIme'];
  $email = $_SESSION['email'];
  $lozinka = $_SESSION['lozinka'];
}
?>

<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="index.css">

<head>
  <title> IMDB </title>
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form" id="form-name" method="post" action="korisnik.php" name="form1">

        <input id="IME" name="ime" type="text" placeholder="ime" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php if ($ime != "") {
                                                                                                                                                        echo $_SESSION["ime"];
                                                                                                                                                      }  ?>">
        <input id="PREZIME" name="prezime" type="text" placeholder="prezime" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php if ($ime != "") {
                                                                                                                                                                    echo $_SESSION["prezime"];
                                                                                                                                                                  } ?>">
        <input id="SIFRA" name="lozinka" type="password" placeholder="lozinka" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this)" autofocus title="Шифра мора најмање имати 8 карактера, једно велико слово и број "> </input>

        <input id="SIFRA_PONOVLJENA" name="lozinka_potvrda" type="password" placeholder="ponovite lozinku" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" oninput="InvalidMsg(this);" autofocus value=""> </input>

        <input id="KorisnickoIme" name="korisnickoIme" type="text" placeholder="korisnicko ime" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus value="<?php if ($ime != "") {
                                                                                                                                                                                      echo $_SESSION["korisnickoIme"];
                                                                                                                                                                                    }  ?>">
        <input id="EMAIL" name="email" type="email" placeholder="email" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" autofocus> </input>

        <input id="SUCCESS" type="submit" name="Submit" value="Submit">

      </form>
    </div>
  </div>
  <script type="text/javascript" src="registracija.js"></script>
</body>

</html>