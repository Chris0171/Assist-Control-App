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

<body onload="getData(1, 'selectModules', '../Actions/GetModules.act.php')">

  <div class="container-fluid font-monospace">
    <!-- Header -->
    <?php
    include("../Includes/Header.inc.php");
    ?>

    <!-- Formulario de registro -->
    <div class="row justify-content-center align-items-center g-0">
      <div class="col-10 col-md-4 text-center p-3">
        <div></div>
        <select id="selectModules" class="form-select form-select-lg text-center" name="">
          <option selected>Selecciona el Módulo</option>
        </select>
        <select id="selectGroups" class="form-select form-select-lg text-center" name="">
          <option selected>Selecciona el Grupo</option>
        </select>
      </div>
    </div>
    <div class="row justify-content-center align-items-center text-center g-0">
      <div class="col-12 col-md-10 col-xl-8 col-xxl-6 mt-4">
        <div class="text-dark stForm">
          <p class="h2 text-center text-white pt-3 pb-3">Estudiantes DAW Grupo 1</p>
          <form action="" method="post">
            <!-- Assist Radio Button -->
            <div class="borLine">
              <div class="row justify-content-center align-items-center g-0">
              <div class="col-3">
                  <img src="../Images/StudentAccount/ChristianMilanes.jpg" class="img-fluid imgSt"
                    alt="Fotografía del estudiante">
                </div>
                <div class="col-9">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                      <label class="text-dark fw-bold pb-4">Christian Milanés Rodríguez</label>
                    </div>
                  </div>
                  <div class="row justify-content-center align-items-center">
                    <div class="col-12">
                      <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                          value="option1">
                        <label class="btn btn-outline-success border border-3 border-success btnAssist"
                          for="inlineRadio1">Presente</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                          value="option3">
                        <label class="btn btn-outline-warning border border-3 border-warning btnAssist"
                          for="inlineRadio3">Retardo</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                          value="option2">
                        <label class="btn btn-outline-danger border border-3 border-danger btnAssist"
                          for="inlineRadio2">Ausente</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn mt-4 mb-3 text-white stBtn">Enviar</button>
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
  <script src="../Scripts/AssistForm.js"></script>

</body>

</html>