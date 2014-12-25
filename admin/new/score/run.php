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
   exit("Connection failed: " . $conn->connect_error);
  }


$id = $_POST['game'];
$win = $_POST['win'];
$loss = $_POST['lose'];

echo 'ID: ' . $id;
echo 'WIN: ' .$win;
echo 'LOSE: ' . $loss;
?>