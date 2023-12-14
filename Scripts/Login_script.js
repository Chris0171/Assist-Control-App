// Import Funtions
import { getData2 } from "../Includes/Functions.inc.js";

const loginSubmit = document.getElementById('loginSubmit');
const passMessage = document.getElementById('passMessage');
const closeMessage = document.getElementById('closeMessage');

let passOk = false;

function printPassError(data, htmlElement) {
  if (data['passOk'] === true) {
    passOk = true;
    htmlElement.style.opacity = 0;
    htmlElement.style.display = "none";

    // Start Session 
    loginSubmit.submit();
  } else {
    htmlElement.style.display = "block";
    setTimeout(function(){
      htmlElement.style.opacity = 1;
    }, 5);
    closeMessage.style.display = "none";
    passOk = false;
  }
}

// Events
loginSubmit.addEventListener('submit', function (event) {
  event.preventDefault();

  const password = document.getElementById('password');
  const email = document.getElementById('email');

  getData2(password.value, email.value, passMessage, '../Actions/CheckPassword.act.php', printPassError);
});
