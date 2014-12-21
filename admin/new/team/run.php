<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dodgeball";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;


$name = $_POST['NAME'];
$mem1 = $_POST['MEM1'];
$mem2 = $_POST['MEM2'];
$mem3 = $_POST['MEM3'];
$mem4 = $_POST['MEM4'];
$mem5 = $_POST['MEM5'];
$mem6 = $_POST['MEM6'];
$mem7 = $_POST['MEM7'];
$mem8 = $_POST['MEM8'];

if(!is_null($mem7)) {
  $sql = "INSERT INTO `teams` (NAME, MEM1, MEM2, MEM3, MEM4, MEM5, MEM6, MEM7, MEM8) VALUES ('$name', '$mem1', '$mem2', '$mem3', '$mem4', '$mem5', '$mem6', '$mem7', '$mem8')";
}
else {
  $sql = "INSERT INTO `teams` (NAME, MEM1, MEM2, MEM3, MEM4, MEM5, MEM6) VALUES ('$name', '$mem1', '$mem2', '$mem3', '$mem4', '$mem5', '$mem6')";
}

if(!mysqli_query($conn, $sql)) {
  die('Error: ' . mysql_error());
}

$conn->close;
header("Location: http://dodgeball.ah.gd/admin/");
?>