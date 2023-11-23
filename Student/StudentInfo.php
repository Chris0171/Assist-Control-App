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

  <!-- Fonts -->
  <link href="https://db.onlinewebfonts.com/c/480ddcdbf6e34bde73dfaed605fafcb3?family=Gobold" rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/a3759f68b36de20d75fd63cdea613156?family=URW+Heldustry+W01+Medium"
    rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/844ae1c8dd1dd2ea3208d63af15f41cf?family=URW+Heldustry+W01+Demi"
    rel="stylesheet">

</head>

<body>

  <div class="container-fluid font-monospace">
    <!-- Header -->
    <?php
    include("../Includes/Header.inc.php");
    ?>

    <div class="row justify-content-center align-items-center g-0">
      <div class="col-10 col-md-4 text-center p-3">
        <div></div>
        <select id="selectModules" class="form-select form-select-lg text-center mb-5" name="">
          
        </select>
      </div>
    </div>
    <!-- Student Information -->
    <div class="row justify-content-center align-items-center g-0">
      <div class="col-12 col-sm-10 col-md-8 borderPanel">
        <div class="extraForm">
          <div class="row justify-content-center align-items-center g-0">
            <div class="col-12 col-md-6">
              <div class="row justify-content-center align-items-center g-0">
                <!-- Student personal Information-->
                <div class="col-6">
                  <img id="studentImg" src="../Images/StudentAccount/ChristianMilanes.jpg" class="img-fluid imgSt"
                    alt="Fotografía del estudiante">
                </div>
                <div class="col-6 ps-4 text-start">
                  <p class="p-2" id="StudentGroup">DAW GRUPO 1</p>
                  <p class="p-2" id="StudentName">Christian Milanés Rodríguez</p>
                </div>
              </div>
              <div class="row align-items-center g-2">
                <div class="col-11 mt-4 borEx"></div>
              </div>
              <div class="row justify-content-center g-0">
                <div class="col-12 text-start mt-2">
                  <p class="h3 subtitle">Observaciones</p>
                  <p class="parr">15% de las ausecias quitan el derecho a la envaluación continua</p>
                </div>
              </div>
            </div>
            <!-- Students graphics -->
            <div class="col-12 col-md-6">
              <div class="row justify-content-center align-items-center g-2">
                <div class="col-10">
                  <p class="subtilte text-center" id="moduleName">--</p>
                </div>
              </div>
              <div class="row justify-content-center align-items-center g-0">
                <div class="col-12 text-center">
                  <!-- Ausencias -->
                  <div class="percentage" style="--percentage: 80">
                    <svg>
                      <circle r="42%" cx="50%" cy="50%" pathlength="100"></circle>
                      <circle r="42%" cx="50%" cy="50%" pathlength="100"></circle>
                      <span>80%</span>
                    </svg>
                  </div>
                </div>
              </div>

              <div class="row justify-content-end align-items-center g-0 mt-5">
                <div class="col-1 text-end">
                  <div id="square"></div>
                </div>
                <div class="col-4 text-start pt-3">
                  <p class="subtitle" id="lack">Ausencias: 20%</p>
                </div>
                <div class="col-1 text-end">
                  <div id="square2"></div>
                </div>
                <div class="col-4 text-start pt-3">
                  <p class="subtitle" id="attendance">Asistencia: 80%</p>
                </div>
              </div>
            </div>
          </div>
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
  <script type="module" src="../Scripts/StudentInfo.js"></script>
</body>

</html>