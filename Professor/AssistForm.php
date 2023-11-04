<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio De Sesión</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Assist-Control CSS -->
  <link rel="stylesheet" href="../CSS/Styles.css">

</head>

<body>

  <div class="container-fluid font-monospace">
    <!-- Nombre de la app -->
    <div class="row mb-4 align-items-center">
      <div class="col-12 mb-5 titleBar">
        <p class="text-center text-white mb-1 mt-1 pt-3 pb-3 titleAssist">Control De Asistencia</p>
      </div>
    </div>
    <!-- Formulario de registro -->
    <div class="row justify-content-center align-items-center text-center g-2">
      <div class="col-12 col-md-10 col-xl-8 col-xxl-6 mt-4 position-absolute top-50 start-50 translate-middle">
        <div class="text-dark stForm">
          <p class="h2 text-center pt-3 pb-3">Estudiantes DAW Grupo 1</p>
          <form action="" method="post">
            <!-- Assist Radio Button -->
            <div class="borLine">
              <label class="text-dark">Nombre del estudiante 1</label>
              <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="btn btn-outline-success border border-3 border-success btnAssist" for="inlineRadio1">Presente</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="btn btn-outline-danger border border-3 border-danger btnAssist" for="inlineRadio2">Ausente</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="btn-check" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="btn btn-outline-secondary border border-3 border-secondary btnAssist" for="inlineRadio3">Retardo</label>
              </div>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn mt-4 mb-3 text-black stBtn">Enviar</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <!-- Assist-Control CSS -->

</body>

</html>