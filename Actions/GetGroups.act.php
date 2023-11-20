<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost","root","Lelouch01","controlAsistencia");
$conn->connect();

$module = $_POST['value'];

$res = $conn->query("SELECT Grupo.idGrupo, Grupo.nombreGrupo, Grupo.anyoEscolar FROM Grupo, GrupoModulo WHERE
  GrupoModulo.idModulo = $module AND GrupoModulo.idGrupo = Grupo.idGrupo;");

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