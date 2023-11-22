<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$idGrupo = $_POST['value'];

$res = $conn->query("SELECT * FROM Alumno WHERE
idGrupo = $idGrupo;");

if ($res->num_rows > 0) {
  $groups = array();
  while ($row = $res->fetch_assoc()) {
    $groups[] = $row;
  }
  echo json_encode($groups);
} else {
  echo json_encode(array('mensaje' => 'No se encontraron datos'));
}

$conn->close();

?>