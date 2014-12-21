<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

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

mysqli_query($conn, $sql = "INSERT INTO `teams` (NAME, MEM1, MEM2, MEM3, MEM4, MEM5, MEM6, MEM7, MEM8) VALUES ('$name', '$mem1', '$mem2', '$mem3', '$mem4', '$mem5', '$mem6', '$mem7', '$mem8')");

$conn->close;
echo 'hi';
?>