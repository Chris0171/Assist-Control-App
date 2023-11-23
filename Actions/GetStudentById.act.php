<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$idAlumno = $_POST['value'];

$res = $conn->query("SELECT * FROM Alumno WHERE
idAlumno = $idAlumno;");

if ($res->num_rows > 0) {
  $alumno = array();
  while ($row = $res->fetch_row()) {
    $alumno[] = $row;
  }
  echo json_encode($alumno);
} else {
  echo json_encode(array('mensaje' => 'No se encontraron datos'));
}

$conn->close();

?>