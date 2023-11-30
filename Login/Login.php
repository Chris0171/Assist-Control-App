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
    <!-- Header -->
    <?php
    $logoPath = "../Images/Logo.png";
    include("../Includes/Header.inc.php");
    ?>
    <!-- Formulario de registro -->
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-12 col-sm-10 col-md-8 col-xl-6 col-xxl-4 mt-4 position-absolute top-50 start-50 translate-middle">
        <div class="text-white stForm">
          <p class="display-5 text-center">INICIAR SESIÓN</p>
          <form id="loginSubmit" action="../Actions/StartSession.act.php" method="post">
            <div class="form-group mb-3">
              <label for="" class="form-label fw-bold">Email: </label>
              <input type="email" class="form-control" name="email" autocomplete="email"
                placeholder="Correo electrónico" id="email" required>
            </div>
            <div class="form-group mb-3">
              <label for="password" class="form-label fw-bold">Contraseña: </label>
              <input type="password" class="form-control" autocomplete="current-password" name="password"
                placeholder="Contraseña" id="password" required>
                <p class="text-center text-danger fw-bold pt-2" id="passMessage"></p>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <!-- Assist-Control CSS -->
  <script type="module" src="../Scripts/Login_script.js"></script>

</body>

</html>