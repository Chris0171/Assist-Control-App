let date;
// School hours
const strips = [[new Date().setHours(8, 30, 0), new Date().setHours(11, 15, 0)],
[new Date().setHours(12, 45, 0), new Date().setHours(14, 30, 0)]];

let selectModules = document.getElementById("selectModules");
let selectGroups = document.getElementById("selectGroups");

// Functions
const calculateStrip = () => (date = new Date(), (date >= strips[0][0] && date <= strips[0][1]) ? 0 : (date >= strips[0][0] && date <= strips[0][1]) ? 1 : -1);
const checkDate = () => (date = newDate().getDay(), (date >= 2 && date <= 5) ? 0 : -1);

// Create a <option> element
function createOptions(data, htmlElem) {
  var selector = document.getElementById(htmlElem);
  for (let i = 0; i < data.length; i++) {
    let option = document.createElement('option');
    option.value = data[i][0];
    if (htmlElem == 'selectModules') { option.text = data[i][1]; }
    else if (htmlElem == 'selectGroups') { option.text = "Grupo " + data[i][1] + " " + data[i][2] + "º año."; }
    selector.appendChild(option);
  }
}
// Get data from a variable
function getData(valueData, htmlElem, ruta) {
  fetch(ruta, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'value=' + encodeURIComponent(valueData),
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      createOptions(data, htmlElem);
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

// Events
selectModules.addEventListener('change', function () {
  selectGroups.style.display = 'block';
  setTimeout(function () {
    selectGroups.style.opacity = '1';
  }, 10);
  getData(selectModules.value, 'selectGroups', '../Actions/GetGroups.act.php');
});

selectGroups.addEventListener('change', function(){
  
});

