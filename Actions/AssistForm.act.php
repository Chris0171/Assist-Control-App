<?php

session_start();

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$idUser = $_SESSION['user'];

$reg1 = $conn->query("SELECT idProfesor FROM Profesor  WHERE idUsuario = '$idUser';");

if ($reg1->num_rows > 0) {
  $row = $reg1->fetch_assoc();
  $idProfesor = $row['idProfesor'];

  $idStudents = $_POST['idStudents'];
  $states = $_POST['states'];
  $idModule = $_POST['idModule'];

  $CurrentDate = new DateTime();
  $dateDb = $CurrentDate->format('Y-m-d H:i:s');

  $length = count($idStudents);


  // Recorrer el array con un bucle for
  for ($i = 0; $i < $length; $i++) {
    $conn->query("INSERT INTO Asistencia (estado, fechaHora, fechaActual, idModulo, idAlumno, idProfesor)
    VALUES ('$states[$i]', '$dateDb', '$dateDb', '$idModule', '$idStudents[$i]', '$idProfesor');");
  }

}
header("Location: ../Login/Login.php");

$conn->close();

?>