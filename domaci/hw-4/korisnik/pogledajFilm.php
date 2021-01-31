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
    <a href="pocetna.php" type="button" style="height:30px;    margin-top: 25px;     margin-right: 30px;" class="btn btn-warning">
        <span class="glyphicon glyphicon-log-out"></span> vrati se nazad
    </a>

</header>

<body>

    <main>
        <div class="container mt-5">


            <div style=" background: rgb(0,0,0);
                        background: linear-gradient(90deg, rgba(0,0,0,1) 0%,
                        rgba(252,218,154,1) 0%, rgba(0,0,0,1) 100%, rgba(255,255,255,1) 100%, 
                        rgba(0,0,0,1) 100%);  display:flex ;   flex-direction: row ;" class="card movie_card">
                <?php echo "<img class='card-img-top' style='width: 50vh ; height: 80vh ' src=" . $poster . " />"; ?>
                <div style="float: right;" class="card-body">
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo  $opis ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "zanr: $zanr" ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "scenarista: $scenarista" ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "reziser: $reziser" ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "producentska kuca: $producentskaKuca" ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "glumci: $glumci" ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "godina izdanja: $godinaIzdanja" ?> </h5>
                    <h5 style=" color: orange;
                                -webkit-text-stroke: 2px black; /* width and color */
                                font-family: fantasy;
                                font-size: 30px;
                                font-style: normal;
                                font-variant: normal;
                                font-weight: 700;
                                line-height: 26.4px;" class="card-title"><?php echo "trajanje: $trajanje min" ?> </h5>

                    <span style="font-size: 5vh; color:yellow" class="movie_info float-right"><i class="fas fa-star"></i><?php echo ~~($ocena / $brojOcena) ?> </span>
                    <span style="font-size: 5vh; color:grey" class="movie_info float-right"><i class="fa fa-users"></i><?php echo $brojOcena ?> </span>

                    <div class="card-body">
                        <h1>Oceni film </h1>
                        <span id="zvezda5" style="font-size: 5vh; " class="movie_info float-right"><i class="fas fa-star" onclick="ocenaFilma(5)"></i></span>
                        <span id="zvezda4" style="font-size: 5vh;" class="movie_info float-right"><i class="fas fa-star" onclick="ocenaFilma(4)"></i></span>
                        <span id="zvezda3" style="font-size: 5vh;" class="movie_info float-right"><i class="fas fa-star" onclick="ocenaFilma(3)"></i></span>
                        <span id="zvezda2" style="font-size: 5vh;" class="movie_info float-right"><i class="fas fa-star" onclick="ocenaFilma(2)"></i></span>
                        <span id="zvezda1" style="font-size: 5vh;" class="movie_info float-right"><i class="fas fa-star" onclick="ocenaFilma(1)"></i></span>

                        <script>
                            var naslov = "<?php echo $naslov; ?>";
                            var ocena = "<?php echo $ocena; ?>";
                            ocena = ocena * 1;
                            var brojOcena = "<?php echo $brojOcena; ?>";
                            brojOcena = brojOcena * 1;
                        </script>

                        <button onclick="azurirajOcenu(naslov,ocena,brojOcena)" style="float: right; background-color: black ;
                                        color: white ; 
                                        margin-top: 15px ;
                                        border-radius: 40%;
                                        border-color : black;
                                        border-width: 2px;">potvrdi</button>

                    </div>

                </div>

            </div>

        </div>
        </div>
        <script type="text/javascript" src="pocetna.js"> </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    </main>
</body>

</html>