<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();


$password = $_POST['value1'];
$email = $_POST['value2'];


$password = md5($password);

$res = $conn->query("SELECT contrasena FROM Usuario WHERE email = '$email';");

if ($res->num_rows > 0) {
  $row = mysqli_fetch_assoc($res);
  if ($password === $row['contrasena']) {
    $data = array(
      "passOk" => true
    );
    echo json_encode($data);
  } else {
    $data = array(
      "passOk" => false
    );
    echo json_encode($data);
  }
  
} else {
  echo json_encode(array('mensaje' => 'No se encontraron datos'));
}

$conn->close();

?>