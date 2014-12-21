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
} 

function getStandings() {
	global $conn;
	$sql = "SELECT * FROM teams ORDER BY PTS DESC";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td><a href=\"../teams/view.php?id=".$row['TID']."\">".$row['NAME']."</a></td><td>".$row['GP']."</td><td>".$row['W']."</td><td>".$row['L']."</td><td>".$row['PTS']."</td><td>".$row['W']." - ".$row['L']."</td></tr>";
		}
	}
	$conn->close();
}


?>	