function InvalidMsg(textbox) {
  // if (textbox.validity.) {
  //  textbox.setCustomValidity('Молимо вас унесите тражени тип података ');
  if (textbox.value === "") {
    textbox.setCustomValidity("Polje ne sme ostati prazno ");
  } else if (textbox.validity.typeMismatch) {
    textbox.setCustomValidity("Format nije validan");
  } else if (textbox.validity.patternMismatch) {
    textbox.setCustomValidity(
      "Sifra mora imati najmanje osam karaktera, jedno veliko slovo i broj "
    );
  } else {
    textbox.setCustomValidity("");
  }
  return true;
}
