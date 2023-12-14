<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio De Sesión</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

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
    include("Includes/Connection.inc.php");

    $conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
    $conn->connect();

    // Get post values
    $idStudent = $_POST['idStudent'];
    $studentName = $_POST['studentName'];
    $studentgroup = $_POST['studentGroup'];

    $logoPath = "Images/Logo.png";
    include("Includes/Header.inc.php");

    $sql = "SELECT Modulo.nombreModulo, Profesor.nombreProfesor, Profesor.apellidosProfesor, Asistencia.estado, Asistencia.fechaHora, 
    Profesor.apellidosProfesor, Asistencia.idAsistencia FROM Asistencia, Profesor, Modulo WHERE 
    Asistencia.idAlumno = '$idStudent' AND Profesor.idProfesor = Asistencia.idProfesor AND
    Modulo.idModulo = Asistencia.idModulo";

    $res = $conn->query($sql);
    ?>
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-12 col-sm-11 col-md-10 col-lg-9 col-xl-8">
        <div class="mb-3 fw-bold fst-italic p-3 bg-success bg-opacity-25 border border-2 border-success rounded">
          <?php echo $studentName . " " . $studentgroup . "."; ?>
        </div>
      </div>
    </div>
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-12 col-sm-11 col-md-10 col-lg-9 col-xl-8 text-center text-white assistTable">
        <div class="mb-4 mt-2">
          <h2>LISTADO DE ASISTENCIAS</h2>
        </div>
        <div class="table-responsive text-center">
          <table class="table fw-bold">
            <thead>
              <tr>
                <th scope="col" class="bg-transparent text-white thSt">MÓDULO</th>
                <th scope="col" class="bg-transparent text-white thSt">PROFESOR</th>
                <th scope="col" class="bg-transparent text-white thSt">ESTADO</th>
                <th scope="col" class="bg-transparent text-white thSt">FECHA/HORA</th>
                <th scope="col" class="bg-transparent text-white thSt">JUSTIFICAR F.</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($reg = mysqli_fetch_row($res)) {

                ?>
                <tr>
                  <td class="bg-transparent text-white thSt">
                    <?php echo $reg[0]; ?>
                  </td>
                  <td class="bg-transparent text-white thSt">
                    <?php echo $reg[1] . " " . "$reg[2]"; ?>
                  </td>
                  <td class="bg-transparent text-white thSt">
                    <?php echo $reg[3]; ?>
                  </td>
                  <td class="bg-transparent text-white thSt">
                    <?php echo $reg[4]; ?>
                  </td>
                  <td class="bg-transparent text-white thSt"><a class="btn btn-warning" href=""><i
                        class="bi bi-pen text-white"> Justificar</i></a></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

  <?php
  $conn->close();
  ?>

</body>

</html>