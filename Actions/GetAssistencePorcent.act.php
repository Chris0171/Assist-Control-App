<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();


$idStudent = $_POST['value1'];
$idModule = $_POST['value2'];

$res = $conn->query("SELECT DISTINCT  Modulo.porcentajeAsistencia FROM Modulo, AlumnoModulo, Alumno WHERE
AlumnoModulo.idAlumno = $idStudent AND Modulo.idModulo = $idModule AND Alumno.idAlumno = $idStudent");

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