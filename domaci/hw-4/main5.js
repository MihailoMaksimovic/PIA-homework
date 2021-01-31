window.toggleLeft = function () {
  var element = document.getElementById("offcanvas-left");
  element.classList.toggle("hide");
};
window.toggleRight = function () {
  var element = document.getElementById("offcanvas-right");
  element.classList.toggle("hide");
};

document.getElementById("dugme").addEventListener("click", function () {
  var element_to_invisible1 = document.getElementById("trofej");
  var element_to_invisible2 = document.getElementById("kalendar");
  var element_to_invisible3 = document.getElementById("korisnik");
  var element_to_invisible4 = document.getElementById("izloguj");
  if (element_to_invisible1.style.visibility == "hidden") {
    element_to_invisible1.style.visibility = "visible ";
    element_to_invisible2.style.visibility = "visible ";
    element_to_invisible3.style.visibility = "visible ";
    element_to_invisible4.style.visibility = "visible ";
  } else {
    element_to_invisible1.style.visibility = "hidden ";
    element_to_invisible2.style.visibility = "hidden ";
    element_to_invisible3.style.visibility = "hidden ";
    element_to_invisible4.style.visibility = "hidden ";
  }
});

function MouseOver1() {
  var element = document.getElementById("mouseover_text1");
  element.style.visibility = "visible";
  var element_on_leave = document.getElementById("trofej");
  element_on_leave.onmouseleave = function () {
    element.style.visibility = "hidden";
  };
}
function MouseOver2() {
  var element = document.getElementById("mouseover_text2");
  element.style.visibility = "visible";
  var element_on_leave = document.getElementById("kalendar");
  element_on_leave.onmouseleave = function () {
    element.style.visibility = "hidden";
  };
}
function MouseOver3() {
  var element = document.getElementById("mouseover_text3");
  element.style.visibility = "visible";
  var element_on_leave = document.getElementById("korisnik");
  element_on_leave.onmouseleave = function () {
    element.style.visibility = "hidden";
  };
}
function MouseOver4() {
  var element = document.getElementById("mouseover_text4");
  element.style.visibility = "visible";
  var element_on_leave = document.getElementById("izloguj");
  element_on_leave.onmouseleave = function () {
    element.style.visibility = "hidden";
  };
}

function azurirajFilm(naslov) {
  localStorage.setItem("key", naslov);
  document.location.href = "azurirajFilm.php";
}



/*const ime_c = document.getElementById('IME');
const prezime_c = document.getElementById('PREZIME');
const sifra_c = document.getElementById('SIFRA');
const broj_c = document.getElementById('BROJ');
const radio_c = document.getElementById('RADIO1');

  
ime_c.addEventListener('keyup', function (event) {
    isValidName = ime_c.checkValidity();
  if ( isValidName ) {
    input.id("register").disabled = false ;
  } else {
    input.id("register").disabled = true ;
  }
});
prezime_c.addEventListener('keyup', function (event) {
    isValidName = prezime_c.checkValidity();
    
    if ( isValidName ) {
        input.id("register").disabled = false;
    } else {
        input.id("register").disabled= true;
    }
  });
  sifra_c.addEventListener('keyup', function (event) {
    isValidName = sifra_c.checkValidity();
    
    if ( isValidName ) {
        input.id("register").disabled = false;
    } else {
        input.id("register").disabled= true;
    }
  });
  broj_c.addEventListener('keyup', function (event) {
    isValidName = broj_c.checkValidity();
    
    if ( isValidName ) {
        input.id("register").disabled = false;
    } else {
        input.id("register").disabled= true;
    }
  });
  radio_c.addEventListener('keyup', function (event) {
    isValidName = radio_c.checkValidity();
    
    if ( isValidName ) {
        input.id("register").disabled = false;
    } else {
        input.id("register").disabled= true;
    }
  });
  
/*register.addEventListener('click', function (event) {
  signUpForm.submit();
});*/
