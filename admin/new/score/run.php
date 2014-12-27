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


$win = $_POST['win'];
$loss = $_POST['lose'];

$result = mysqli_query($conn, "SELECT * FROM teams WHERE TID=$win");
$row = mysqli_fetch_array($result);

mysqli_query($conn, $sql = "UPDATE teams SET GP=GP+1, W=W+1, PTS=W*2 WHERE TID=$win");
mysqli_query($conn, $sql = "UPDATE teams SET GP=GP+1, L=L+1, PTS=W*2 WHERE TID=$loss");

header('Location: ../../');
?>