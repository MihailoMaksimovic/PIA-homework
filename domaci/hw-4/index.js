function InvalidMsg(textbox) { 
  
    if (textbox.value === '') { 
        textbox.setCustomValidity 
              (' Унесите податке'); 
    } else { 
        textbox.setCustomValidity(''); 
    } 
    return true; 
}

