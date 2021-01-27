<?php
require "login.php";
if (isset($_SESSION["email"])) {
    header("location: main.php");
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
                <p class="message "> Nemate nalog? <a href="registracija.php">Registrujte sе </a> </p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="index.js"></script>
</body>

</html>