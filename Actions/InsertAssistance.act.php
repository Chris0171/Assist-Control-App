<?php

include("../Includes/Connection.inc.php");

$conn = new DatabaseConnection("localhost", "root", "Lelouch01", "controlAsistencia");
$conn->connect();

$assists = $_POST['state'];
$assits = $_POST['studentName'];



$conn->close();

?>