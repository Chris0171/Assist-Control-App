// Includes 
import { getData2 } from "../Includes/Functions.inc.js";

// Project vars
let groups = [];
let studentInstances = [];
let students = [];

// HTML elements
const groupSelector = document.getElementById("selectGroup");
const moduleSelector = document.getElementsByClassName("selectModules");
const moduleValues = document.getElementsByClassName("moduleValue");
const idValues = document.getElementsByClassName("idValue");
const searchElem = document.getElementById("search");

// Student Instance
const studentNames = document.getElementsByClassName('studentName');
const filtredStudent = document.getElementsByClassName('studentInstance');

// Functions
function filterByGroup(group) {
  const stGroupName = document.getElementsByClassName('studentGroupName');
  const studentInstances = document.getElementsByClassName('studentInstance');

  for (let i = 0; i < stGroupName.length; i++) {
    if (group.text.replace(/\s/g, '') == stGroupName[i].textContent.replace(/\s/g, '')) {
      studentInstances[i].classList.remove("filter");

    } else studentInstances[i].classList.add("filter");
  }
}
function getFiltred() {
  for (let i = 0; i < studentNames.length; i++) {
    if (studentNames[i].closest('.filter') === null) {
      studentInstances.push(studentNames[i]);
      students.push(filtredStudent[i]);
    }
  }
}

function removeSigns(texto) {
  var mapaTildes = {
    'á': 'a',
    'é': 'e',
    'í': 'i',
    'ó': 'o',
    'ú': 'u',
    'ü': 'u',
    'ñ': 'n',
    'Á': 'A',
    'É': 'E',
    'Í': 'I',
    'Ó': 'O',
    'Ú': 'U',
    'Ü': 'U',
    'Ñ': 'N'
  };

  return texto.replace(/[áéíóúüñÁÉÍÓÚÜÑ]/g, function (match) {
    return mapaTildes[match];
  });
}
function setPorcentaje(data, htmlElem) {
  htmlElem.textContent = `${data[0][0]}%`;
}
// Events
groupSelector.addEventListener('change', function () {
  const select = groupSelector.selectedIndex;
  filterByGroup(groupSelector.options[select]);
  // Init other vars
  getFiltred();
})
for (let i = 0; i < moduleSelector.length; i++) {
  moduleSelector[i].addEventListener('change', function () {
    moduleValues[i].value = moduleSelector[i].value;
    getData2(idValues[i].value, moduleSelector[i].value, document.querySelectorAll('.studentInstance')[i].querySelector('.percentageS'), 'Actions/GetAssistencePorcent.act.php', setPorcentaje);
  })
}
searchElem.addEventListener('keyup', function (event) {

  if (event.target.matches("#search")) {
    for (let i = 0; i < studentInstances.length; i++) {
      removeSigns(studentInstances[i].textContent.toLowerCase()).includes(removeSigns(event.target.value.toLowerCase())) ? students[i].classList.remove("filter") : students[i].classList.add("filter");
    }
  }
})

// DOM Content loaded
document.addEventListener('DOMContentLoaded', function () {
  const optionsGroup = groupSelector.options;
  for (let i = 0; i < optionsGroup.length; i++) {
    groups.push(optionsGroup[i].text);
  }
  filterByGroup(groupSelector.options[groupSelector.selectedIndex]);

  setTimeout(function () {
    for (let i = 0; i < moduleSelector.length; i++) {
      moduleValues[i].value = moduleSelector[i].value;
      getData2(idValues[i].value, moduleSelector[i].value, document.querySelectorAll('.studentInstance')[i].querySelector('.percentageS'), 'Actions/GetAssistencePorcent.act.php', setPorcentaje);
      
    }
    getFiltred();
    
  }, 50);

});
