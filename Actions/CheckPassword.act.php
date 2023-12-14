<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();


$password = $_POST['value1'];
$email = $_POST['value2'];


$res = $conn->query("SELECT contraseña FROM Usuario WHERE email = '$email';");

if ($res->num_rows > 0) {
  $row = mysqli_fetch_assoc($res);
  if (password_verify($password, $row['contraseña'])) {
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
  $data = array(
    "passOk" => false
  );
  echo json_encode($data);
}

$conn->close();

?>