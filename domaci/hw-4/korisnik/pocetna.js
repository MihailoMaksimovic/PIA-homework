function pogledajFilm(naslov) {
  document.location.href = "./pogledajFilm.php?title=" + naslov;
}

var ocenaFilm;

function ocenaFilma(broj) {
  var zvezda1 = document.getElementById("zvezda1");
  var zvezda2 = document.getElementById("zvezda2");
  var zvezda3 = document.getElementById("zvezda3");
  var zvezda4 = document.getElementById("zvezda4");
  var zvezda5 = document.getElementById("zvezda5");
  if (broj == 5) {
    zvezda5.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda4.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda3.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda2.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda1.setAttribute("style", "color:yellow;font-size: 5vh;");
    ocenaFilm = 5;
  }
  if (broj == 4) {
    zvezda4.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda3.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda2.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda1.setAttribute("style", "color:yellow;font-size: 5vh;");
    ocenaFilm = 4;
  }
  if (broj == 3) {
    zvezda3.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda2.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda1.setAttribute("style", "color:yellow;font-size: 5vh;");
    ocenaFilm = 3;
  }
  if (broj == 2) {
    zvezda2.setAttribute("style", "color:yellow;font-size: 5vh;");
    zvezda1.setAttribute("style", "color:yellow;font-size: 5vh;");
    ocenaFilm = 2;
  }
  if (broj == 1) {
    zvezda1.setAttribute("style", "color:yellow;font-size: 5vh;");
    ocenaFilm = 1;
  }
}

function azurirajOcenu(naslov, ocena, brojOcena) {
  brojOcena += 1;
  var trenutnaOcena = ocena + ocenaFilm;
  ocenaFilm = 0;
  document.location.href =
    "azurirajOcenu.php?naslov=" +
    naslov +
    "&ocena=" +
    trenutnaOcena +
    "&brojOcena=" +
    brojOcena;
}
