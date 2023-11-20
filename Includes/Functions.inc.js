
export function addCol(nombreImagen, nombreEstudiante) {
  var container = document.getElementById('col3Container');

  // Crear div contenedor de la columna 3
  var col3Div = document.createElement('div');
  col3Div.classList.add('col-3');

  // Crear la imagen
  var imagen = document.createElement('img');
  imagen.src = '../Images/StudentAccount/' + nombreImagen;
  imagen.classList.add('img-fluid', 'imgSt');
  imagen.alt = 'Fotografía del estudiante';

  // Agregar la imagen al contenedor de la columna 3
  col3Div.appendChild(imagen);

  // Crear div contenedor de la columna 9
  var col9Div = document.createElement('div');
  col9Div.classList.add('col-9');

  // Crear la fila con el nombre del estudiante
  var nombreRow = document.createElement('div');
  nombreRow.classList.add('row', 'justify-content-center', 'align-items-center');

  // Crear la etiqueta del nombre del estudiante
  var nombreLabel = document.createElement('label');
  nombreLabel.classList.add('text-dark', 'fw-bold', 'pb-4');
  nombreLabel.textContent = nombreEstudiante;

  // Agregar la etiqueta al contenedor de la fila
  nombreRow.appendChild(nombreLabel);

  // Agregar la fila al contenedor de la columna 9
  col9Div.appendChild(nombreRow);

  // Crear la fila con los radio buttons
  var radioButtonsRow = document.createElement('div');
  radioButtonsRow.classList.add('row', 'justify-content-center', 'align-items-center');

  // Crear el primer radio button
  var radio1 = crearRadioButton('Presente', 'option1', 'success', 'success');
  radioButtonsRow.appendChild(radio1);

  // Crear el segundo radio button
  var radio2 = crearRadioButton('Retardo', 'option3', 'warning', 'warning');
  radioButtonsRow.appendChild(radio2);

  // Crear el tercer radio button
  var radio3 = crearRadioButton('Ausente', 'option2', 'danger', 'danger');
  radioButtonsRow.appendChild(radio3);

  // Agregar la fila de radio buttons al contenedor de la columna 9
  col9Div.appendChild(radioButtonsRow);

  // Agregar la columna 9 al contenedor principal
  container.appendChild(col3Div);
  container.appendChild(col9Div);
}

export function crearRadioButton(labelText, id, color, borderColor) {
  // Crear div contenedor de la form-check-inline
  var formCheckInline = document.createElement('div');
  formCheckInline.classList.add('form-check', 'form-check-inline');

  // Crear el input radio
  var inputRadio = document.createElement('input');
  inputRadio.classList.add('btn-check');
  inputRadio.type = 'radio';
  inputRadio.name = 'inlineRadioOptions';
  inputRadio.id = id;
  inputRadio.value = id;

  // Crear la etiqueta del radio button
  var labelElement = document.createElement('label');
  labelElement.classList.add('btn', 'btn-outline-' + color, 'border', 'border-3', 'border-' + borderColor, 'btnAssist');
  labelElement.htmlFor = id;
  labelElement.textContent = labelText;

  // Agregar el input y la etiqueta al contenedor form-check-inline
  formCheckInline.appendChild(inputRadio);
  formCheckInline.appendChild(labelElement);

  return formCheckInline;
}