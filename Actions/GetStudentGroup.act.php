<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$idAlumno = $_POST['value'];

$res = $conn->query("SELECT Grupo.nombreGrupo, Grupo.anyoEscolar FROM Grupo, Alumno WHERE
Grupo.idGrupo = Alumno.idGrupo AND Alumno.idAlumno = $idAlumno");

if ($res->num_rows > 0) {
  $group = array();
  while ($row = $res->fetch_row()) {
    $group[] = $row;
  }
  echo json_encode($group);
} else {
  echo json_encode(array('mensaje' => 'No se encontraron datos'));
}

$conn->close();

?>