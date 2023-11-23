<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$idStudent = $_POST['value'];

$res = $conn->query("SELECT Modulo.idModulo, Modulo.nombreModulo, Modulo.porcentajeAsistencia FROM Modulo, AlumnoModulo WHERE
AlumnoModulo.idAlumno = $idStudent AND AlumnoModulo.idModulo = Modulo.idModulo;");

if ($res->num_rows > 0) {
  $groups = array();
  while ($row = $res->fetch_row()) {
    $groups[] = $row;
  }
  echo json_encode($groups);
} else {
  echo json_encode(array('mensaje' => 'No se encontraron datos'));
}

$conn->close();

?>