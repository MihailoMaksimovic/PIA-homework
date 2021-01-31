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
  document.location.href = "azurirajFilm.php?title=" + naslov;
}

