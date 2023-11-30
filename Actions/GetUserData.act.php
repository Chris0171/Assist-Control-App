<?php
session_start();

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$getUser = $_POST['value'];

if (isset($_SESSION['user']) && $getUser) {
  $user = $_SESSION['user'];

  $res = $conn->query("SELECT idAlumno FROM Alumno WHERE idUsuario = '$user';");
  if ($res->num_rows > 0) {
    $idStudent = mysqli_fetch_assoc($res);
    $idArr = array(
      "idAlumno" => $idStudent['idAlumno']
    );
    echo json_encode($idArr);
    
  } else {
    echo json_encode(array('mensaje' => 'No se encontraron datos'));
  }
}else{
  echo json_encode(array('mensaje' => 'No se encontraron datos'));
}
$conn->close();

?>