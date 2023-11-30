// Import Funtions
import { getData2 } from "../Includes/Functions.inc.js";

const loginSubmit = document.getElementById('loginSubmit');
const passMessage = document.getElementById('passMessage');

let passOk = false;

function printPassError(data, htmlElement) {
  console.log(data['passOk']);
  if (data['passOk'] === true) {
    passOk = true;
    htmlElement.textContent = "";
  } else {
    htmlElement.textContent = "CONTRASEÑA INCORRECTA";
    passOk = false;
  }
}

// Events
loginSubmit.addEventListener('submit', function () {
  event.preventDefault();

  const password = document.getElementById('password');
  const email = document.getElementById('email');

  getData2(password.value, email.value, passMessage, '../Actions/CheckPassword.act.php', printPassError);
  setTimeout(function(){
    if (passOk) {
      loginSubmit.submit();
    }
  }, 50);

});
