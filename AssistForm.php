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
  <link rel="stylesheet" href="CSS/Styles.css">

</head>

<body>

  <div class="container-fluid font-monospace">

    <!-- Header -->
    <?php
    $logoPath = "Images/Logo.png";
    include("Includes/Header.inc.php");
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
        <div class="mb-5 borderForm" id="formCont">
          <form class="text-dark extraForm" action="" method="post" id="StudentForm">
            <!-- Students instances -->
            <div class="text-center" id="sendBtn">
              <button type="submit" class="btn mb-3 text-white stBtn">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="container-fluid">
    <?php
    include("Includes/Footer.inc.php");
    ?>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <!-- Assist-Control CSS -->
  <script type="module" src="Scripts/AssistForm.js"></script>

</body>

</html>