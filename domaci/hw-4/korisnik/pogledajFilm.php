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


$movieTitle = $_GET["title"];

$select = "SELECT * FROM `filmovi` WHERE naslov  = '$movieTitle'  ";

$result = mysqli_query($link, $select);
$movie = mysqli_fetch_array($result);

$naslov = trim($movieTitle);
$opis = $movie['opis'];
$zanr = $movie['zanr'];
$scenarista = $movie['scenarista'];
$reziser = $movie['reziser'];
$producentskaKuca = $movie['producentskaKuca'];
$glumci = $movie['glumci'];
$godinaIzdanja = $movie['godinaIzdanja'];
$poster = $movie['poster'];
$trajanje = $movie['trajanje'];
$ocena = $movie['ocena'];
$brojOcena = $movie['brojOcena'];

?>


<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="pocetna.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<header style="display:flex ; ">
    <img src="../assets/imdb.png" alt="">
    <h1 style="  color: orange;
                -webkit-text-stroke: 2px black; /* width and color */
                font-family: fantasy;
                font-size: 50px;
                font-style: normal;
                font-variant: normal;
                font-weight: 700;
                line-height: 26.4px;">
        <?php echo $naslov ?>
    </h1>
    <a href="../logout.php" type="button" style="height:30px;    margin-top: 25px;     margin-right: 30px;" class="btn btn-warning">
        <span class="glyphicon glyphicon-log-out"></span> vrati se nazad
    </a>

</header>

<body>

    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">

            </div>

            <div class="card movie_card">
                <img src="https://www.joblo.com/assets/images/joblo/posters/2019/02/Dyow9RgX4AElAGN.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "godina izdanja: $godinaIzdanja" ?> </h5>
                    <h5 class="card-title"><?php echo $godinaIzdanja ?> </h5>
                    <h5 class="card-title"><?php echo $godinaIzdanja ?> </h5>
                    <h5 class="card-title"><?php echo $godinaIzdanja ?> </h5>
                    <h5 class="card-title"><?php echo $godinaIzdanja ?> </h5>
                    <h5 class="card-title"><?php echo $godinaIzdanja ?> </h5>
                    <span class="movie_info float-right"><i class="fas fa-star"></i><?php echo $ocena ?> </span>
                </div>
            </div>
        </div>

        <div class="row col-md-12 justify-content-center">
            <div class="card credits col-md-4 ">
                <div class="card-body">
                    <p>glasaj </p>
                </div>
            </div>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    </main>
</body>

</html>