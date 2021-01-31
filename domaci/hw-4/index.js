function InvalidMsg(textbox) {
  if (textbox.value === "") {
    textbox.setCustomValidity(" Unesite podatke");
  } else {
    textbox.setCustomValidity("");
  }
  return true;
}
