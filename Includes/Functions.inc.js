// Añadir el nombre de grupo al formulario
export function addGroupName(groupName, htmlElem, idGroup) {
  let containerElem = document.getElementById(htmlElem);

  // Crear parrafo con el nombre del grupo
  let text = document.createElement('p');
  text.classList.add('h2', 'text-center', 'text-black', 'pt-3', 'pb-3');
  text.id = "subtitle" + idGroup;

  //Agregar elemnto al formulario
  text.textContent = groupName;
  containerElem.insertBefore(text, document.getElementById('sendBtn'));
}

// Crear una instancia de asistencia de alumno
export function addStudentRow(imgName, studentName, htmlElem, idGroup) {
  let containerElem = document.getElementById(htmlElem);

  // Crear div para el contenedor de la fila
  let borLine = document.createElement('div');
  borLine.classList.add('borLine', 'mb-4', 'instance' + idGroup);

  // Agregar intancia de todo al formulario
  containerElem.insertBefore(borLine, document.getElementById('sendBtn'));

  // Crear div contenedor de la fila
  let rowSt = document.createElement('div');
  rowSt.classList.add('row', 'justify-content-center', 'align-items-center', 'g-0');

  // Agregar fila al contenedor
  borLine.appendChild(rowSt);

  // Crear div contenedor de la columna 3
  let col3Div = document.createElement('div');
  col3Div.classList.add('col-3');

  // Agregar columna al contenedor
  rowSt.appendChild(col3Div);

  // Crear la imagen
  let imagen = document.createElement('img');
  imagen.src = '../Images/StudentAccount/' + imgName;
  imagen.classList.add('img-fluid', 'imgSt');
  imagen.alt = 'Fotografía del estudiante';

  // Agregar la imagen al contenedor de la columna 3
  col3Div.appendChild(imagen);

  // Crear div contenedor de la columna 9
  let col9Div = document.createElement('div');
  col9Div.classList.add('col-9');

  // Crear la fila con el nombre del estudiante
  let nombreRow = document.createElement('div');
  nombreRow.classList.add('row', 'justify-content-center', 'align-items-center');

  // Crear otra columna
  let otherCol = document.createElement('div');
  otherCol.classList.add('col-12');

  // Agregar la columna a la fila
  nombreRow.appendChild(otherCol);

  // Crear la etiqueta del nombre del estudiante
  let nombreLabel = document.createElement('label');
  nombreLabel.classList.add('text-dark', 'fw-bold', 'pb-4');
  nombreLabel.textContent = studentName;

  // Agregar la etiqueta al contenedor de la fila
  otherCol.appendChild(nombreLabel);

  // Agregar la fila al contenedor de la columna 9
  col9Div.appendChild(nombreRow);

  // Crear la fila con los radio buttons
  let radioButtonsRow = document.createElement('div');
  radioButtonsRow.classList.add('row', 'justify-content-center', 'align-items-center');

  // Crear columna de 12 elementos para los botones
  let radioCol = document.createElement('div');
  radioCol.classList.add('col-12');

  // Agregar columna a la fila
  radioButtonsRow.appendChild(radioCol);
  // Crear el primer radio button
  let radio1 = crearRadioButton('Presente', 'P', 'success');
  radioCol.appendChild(radio1);

  // Crear el segundo radio button
  let radio2 = crearRadioButton('Retardo', 'R', 'warning');
  radioCol.appendChild(radio2);

  // Crear el tercer radio button
  let radio3 = crearRadioButton('Ausente', 'A', 'danger');
  radioCol.appendChild(radio3);

  // Agregar la fila de radio buttons al contenedor de la columna 9
  col9Div.appendChild(radioButtonsRow);

  // Agregar la columna 9 al contenero de la fila
  rowSt.appendChild(col9Div);

}

function crearRadioButton(labelText, id, color) {
  let borderColor = color;
  // Crear div contenedor de la form-check-inline
  let formCheckInline = document.createElement('div');
  formCheckInline.classList.add('form-check', 'form-check-inline');

  // Crear el input radio
  let inputRadio = document.createElement('input');
  inputRadio.classList.add('btn-check');
  inputRadio.type = 'radio';
  inputRadio.name = 'inlineRadioOptions';
  inputRadio.id = id;
  inputRadio.value = id;

  // Crear la etiqueta del radio button
  let labelElement = document.createElement('label');
  labelElement.classList.add('btn', 'btn-outline-' + color, 'border', 'border-3', 'border-' + borderColor, 'btnAssist');
  labelElement.htmlFor = id;
  labelElement.textContent = labelText;

  // Agregar el input y la etiqueta al contenedor form-check-inline
  formCheckInline.appendChild(inputRadio);
  formCheckInline.appendChild(labelElement);

  return formCheckInline;
}

// Obtener datos a partir de una variable
export function getData(valueData, htmlElem, ruta, createOptions) {
  fetch(ruta, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: 'value=' + encodeURIComponent(valueData),
  })
    .then(response => response.json())
    .then(data => {
      createOptions(data, htmlElem);
    })
    .catch(error => {
      console.error('Error:', error);
    });
}