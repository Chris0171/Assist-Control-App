<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio De Sesión</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- Assist-Control CSS -->
  <link rel="stylesheet" href="../CSS/Styles.css">

</head>

<body>

  <div class="container-fluid font-monospace">
    <!-- Header -->
    <?php
    $logoPath = "../Images/Logo.png";
    include("../Includes/Header2.inc.php");
    ?>
    <!-- Formulario de registro -->
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-12 col-sm-10 col-md-8 col-xl-6 col-xxl-4 mt-4 position-absolute top-50 start-50 translate-middle">
        <?php
        if (isset($_GET['close']) && $_GET['close']) {
          ?>
          <div class="text-center mb-2 p-2 fst-italic bg-primary bg-opacity-25 border border-2 
          border-primary rounded-3" id="closeMessage">
            <span class="fw-bold align-middle">Se ha cerrado sesión exitosamente...</span>
          </div>
          <?php
        }
        ?>
        <div class="text-white stForm">
          <p class="display-5 text-center">INICIAR SESIÓN</p>
          <form id="loginSubmit" action="../Actions/StartSession.act.php" method="post">
            <div class="form-group mb-3">
              <label for="" class="form-label fw-bold">Email: </label>
              <input type="email" class="form-control" name="email" autocomplete="email"
                placeholder="Correo electrónico" id="email" required>
            </div>
            <div class="form-group mb-4">
              <label for="password" class="form-label fw-bold">Contraseña: </label>
              <input type="password" class="form-control" autocomplete="current-password" name="password"
                placeholder="Contraseña" id="password" required>
            </div>
            <div class="text-center p-1 fst-italic bg-danger bg-opacity-50 border border-2 border-danger rounded-3"
              id="passMessage" style="display: none; opacity: 0; transition: opacity 0.5s ease;">
              <span class="fw-bold align-middle">Usuario o contraseña incorrecta...</span>
            </div>
            <div class="text-center">
              <button type="submit" class="btn mt-4 mb-3 text-white stBtn">INICIAR SESIÓN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

  <!-- Assist-Control CSS -->
  <script type="module" src="../Scripts/Login_script.js"></script>

</body>

</html>