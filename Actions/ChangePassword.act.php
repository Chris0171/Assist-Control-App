<?php
session_start();

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$newPassword = $_POST['newPassword'];

$res = $conn->query("SELECT idUsuario, rol FROM Usuario  WHERE email = '$email';");

if ($res->num_rows > 0) {
  $userData = array();
  $userData = $res->fetch_row();
  $_SESSION['user'] = $userData[0];
  $_SESSION['rol'] = $userData[1];

  switch ($userData[1]) {
    case 'alumno':
      header("Location: ../StudentInfo.php");
      break;
    case 'profesor':
      header("Location: ../AssistForm.php");
      break;
    case 'jefeDeEstudios':
      header("Location: ../ReportsHofS.php");
      break;
  }
  exit();
}



?>