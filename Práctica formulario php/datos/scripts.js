const passwd = document.getElementById("Pass");
const conpasswd = document.getElementById("Pass2");
const submitButton = document.getElementById("button");
const validationMessage = document.getElementById("validacion")

conpasswd.addEventListener("blur", function() {
  var passwd_value = passwd.value
  var conpasswd_value = conpasswd.value

  if (passwd_value === conpasswd_value) {
    submitButton.disabled = false;
    validationMessage.textContent = "Las contraseñas son iguales"
    validationMessage.style.color = "green"
  } else {
    submitButton.disabled = true;
    validationMessage.textContent = "Las contraseñas no son iguales"
    validationMessage.style.color = "red"
    conpasswd.focus()
  }
});
