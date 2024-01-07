const passwordField = document.getElementById("password");
const showPassword = document.getElementById("showPassword");

showPassword.addEventListener("change", function () {
  if (showPassword.checked) {
    password.type = "text";
  } else {
    passwordField.type = "password";
  }
});
