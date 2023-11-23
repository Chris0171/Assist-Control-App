// Includes
import { getData } from "../Includes/Functions.inc.js";

let htmlElements = ['StudentName', 'StudentImg', 'StudentGroup'];
let modules = [];

// Get HTML elements
let lack = document.getElementById("lack");
let attendance = document.getElementById("attendance");
let moduleSelector = document.getElementById("selectModules");

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
  //document.getElementById(htmlElements[1]).textContent = data[0][4];
}

const printModule = (moduleName) => modules.forEach(element => (moduleName == element) ? document.getElementById('moduleName').textContent = element : null);

// Print the group name
const groupNameInit = (data, htmlElem) => document.getElementById(htmlElem).textContent = `${data[0][0]} de ${data[0][1]} º  año.`;


document.addEventListener('DOMContentLoaded', function () {
  // Obtener localmente el idUsuario : por defecto será 1
  getData(18, 'selectModules', '../Actions/GetStudentModules.act.php', createModuleOptions);
  getData(18, htmlElements, '../Actions/GetStudentById.act.php', studentInit);
  getData(18, htmlElements[2], '../Actions/GetStudentGroup.act.php', groupNameInit)
});

moduleSelector.addEventListener('change', function () {
  let selec = moduleSelector.selectedIndex;
  printModule(moduleSelector.options[selec].text);
  
  //getData(module, htmlElements, '../Actions/GetStudents.act.php');
})


