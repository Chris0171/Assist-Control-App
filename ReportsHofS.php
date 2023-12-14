<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesión Jefe de Estudios</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Assist-Control CSS -->
  <link rel="stylesheet" href="CSS/Styles.css">

  <!-- Fonts -->
  <link href="https://db.onlinewebfonts.com/c/480ddcdbf6e34bde73dfaed605fafcb3?family=Gobold" rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/a3759f68b36de20d75fd63cdea613156?family=URW+Heldustry+W01+Medium"
    rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/844ae1c8dd1dd2ea3208d63af15f41cf?family=URW+Heldustry+W01+Demi"
    rel="stylesheet">

</head>

<body>

  <div class="container-fluid">
    <!-- Header -->
    <?php
    $logoPath = "Images/Logo.png";
    include("Includes/Header.inc.php");
    ?>

    <div class="row justify-content-center align-items-center g-0">
      <div class="col-12 col-md-9 p-3 miniBar">
        <!-- Filter Options -->
        <?php
        include("Includes/FilterOptions.inc.php");
        ?>
        <!-- Instance student -->
        <?php
        $res = $conn->query("SELECT * FROM Alumno;");
        while ($reg = mysqli_fetch_row($res)) {
          include("Includes/StudentInstance.inc.php");
          ?>

          <?php
        }
        ?>
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

  <!-- Assist-Control JavaScript -->
  <script type="module" src="Scripts/Reports_HofS.js"></script>
  
</body>

</html>