// Import Funtions
/*import { addStudentRow } from './Includes/Functions.inc.js';*/
import { addGroupName, addStudentRow, getData } from "../Includes/Functions.inc.js";

// Vars
let date;
let nameGroupSelect = "";
let idGroup = -1;
// Get selectores as vars
let selectModules = document.getElementById("selectModules");
let selectGroups = document.getElementById("selectGroups");
let formCont = document.getElementById("formCont");

// School hours
const strips = [[new Date().setHours(8, 30, 0), new Date().setHours(11, 15, 0)],
[new Date().setHours(12, 45, 0), new Date().setHours(14, 30, 0)]];

// Functions
const calculateStrip = () => (date = new Date(), (date >= strips[0][0] && date <= strips[0][1]) ? 0 : (date >= strips[0][0] && date <= strips[0][1]) ? 1 : -1);
const checkDate = () => (date = newDate().getDay(), (date >= 2 && date <= 5) ? 0 : -1);


function getGroupName(value, selector) {
  let name;
  for (let i = 0; i < selector.options.length; i++) {
    if (selector.options[i].value === value) {
      // Encontraste la opción con el valor deseado
      name = selector.options[i].text;
      i = selector.options.length;
    }
  }
  return name;
}

// Create a <option> element
function createOptions(data, htmlElem) {
  let selector = document.getElementById(htmlElem);
  for (let i = 0; i < data.length; i++) {
    let option = document.createElement('option');
    option.value = data[i][0];
    if (htmlElem == 'selectModules') { option.text = data[i][1]; }
    else if (htmlElem == 'selectGroups') { option.text = "Grupo " + data[i][1] + " " + data[i][2] + "º año."; }
    selector.appendChild(option);
  }
}

function createStudentInstance(data, htmlElem) {
  setTimeout(function () {
    formCont.style.opacity = '0';
  }, 10);


  setTimeout(function () {
    formCont.style.display = 'block';
    setTimeout(function () {
      formCont.style.opacity = '1';
    }, 10);

    // Print group name subtitle
    if (idGroup != -1) {
      let subTitle = document.getElementById('subtitle' + idGroup);
      subTitle.remove();

      let prevInstances = document.getElementsByClassName('instance' + idGroup);
      for (let i = 0; i <= prevInstances.length; i++) prevInstances[0].parentNode.removeChild(prevInstances[0]);
    }
    addGroupName(nameGroupSelect, htmlElem, selectGroups.value);

    for (let i = 0; i < data.length; i++) {
      addStudentRow('ChristianMilanes.jpg', data[i].nombreAlumno + " " + data[i].apellidosAlumno, htmlElem, selectGroups.value);
    }
    idGroup = selectGroups.value;
  }, 500);
}


// Events
selectModules.addEventListener('change', function () {
  selectGroups.style.display = 'block';
  setTimeout(function () {
    selectGroups.style.opacity = '1';
  }, 10);
  getData(selectModules.value, 'selectGroups', '../Actions/GetGroups.act.php', createOptions);
});

selectGroups.addEventListener('change', function () {
  formCont.style.display = 'block';
  setTimeout(function () {
    formCont.style.opacity = '1';
  }, 10);
  nameGroupSelect = getGroupName(selectGroups.value, selectGroups);
  getData(selectGroups.value, 'StudentForm', '../Actions/GetStudents.act.php', createStudentInstance);
});

document.addEventListener('DOMContentLoaded', function() {
  getData(1, 'selectModules', '../Actions/GetModules.act.php', createOptions);
});



