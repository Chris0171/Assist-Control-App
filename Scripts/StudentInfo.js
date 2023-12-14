// Includes
import { getData, getData2 } from "../Includes/Functions.inc.js";

let htmlElements = ['StudentName', 'StudentImg', 'StudentGroup'];
let modules = [];
let user; // Change value to zero

// Get HTML elements
let lack = document.getElementById("lack");
let assistance = document.getElementById("assistance");
const moduleSelector = document.getElementById("selectModules");

// Functions
function createModuleOptions(data, htmlElem) {
  // Get element id
  let selector = document.getElementById(htmlElem);
  for (let i = 0; i < data.length; i++) {
    let option = document.createElement('option');
    option.value = data[i][0];
    option.text = data[i][1];
    modules.push(data[i][1]);
    selector.appendChild(option);
  }
  printModule(data[0][1]);
}
function studentInit(data, htmlElements) {
  document.getElementById(htmlElements[0]).textContent = data[0][1] + data[0][2];
  //document.getElementById(htmlElements[1]).src = "Images/StudentAccount/" + data[0][4];
}

// Print module name
const printModule = (moduleName) => modules.forEach(element => (moduleName == element) ? document.getElementById('moduleName').textContent = element : null);

// Print the group name
const groupNameInit = (data, htmlElem) => document.getElementById(htmlElem).textContent = `${data[0][0]} de ${data[0][1]} º  año.`;


function printAssistencePorcent (data, htmlElem){
  document.getElementById(htmlElem).textContent = `${data[0][0]}%`;
  const percen = document.getElementById('percen');
  percen.style.setProperty("--percentage", data[0][0]);
}
const setUser = (data, idStudent) => user = idStudent = `${data['idAlumno']}`;

// Events
moduleSelector.addEventListener('change', function () {
  let selec = moduleSelector.selectedIndex;
  printModule(moduleSelector.options[selec].text);
  getData2(user, moduleSelector.value, 'assistancePor', 'Actions/GetAssistencePorcent.act.php', printAssistencePorcent);
});

document.addEventListener('DOMContentLoaded', function () {
  getData(true, user, 'Actions/GetUserData.act.php', setUser);
  setTimeout(function () {
    getData(user, 'selectModules', 'Actions/GetStudentModules.act.php', createModuleOptions);
    getData(user, htmlElements, 'Actions/GetStudentById.act.php', studentInit);
    getData(user, htmlElements[2], 'Actions/GetStudentGroup.act.php', groupNameInit);
    setTimeout(function () {
      getData2(user, moduleSelector.value, 'assistancePor', 'Actions/GetAssistencePorcent.act.php', printAssistencePorcent);
    },50);
  }, 50);
});
