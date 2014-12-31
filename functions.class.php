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
			echo "<tr style=\"text-align: center;\"><td><a href=\"../teams/view.php?id=".$row['TID']."\">".$row['NAME']."</a></td><td>".$row['GP']."</td><td>".$row['W']."</td><td>".$row['L']."</td><td>".$row['PTS']."</td><td>".$row['W']." - ".$row['L']."</td></tr>";
		}
	}
	else {
		echo "HEY YOU DERPED, THERE ARE NO TEAMS IN THE LEAGUE.";
	}
}

function getPools() {
	global $conn;
	$sql = "SELECT * FROM pools";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<div class=\"col-md-3\"><div class=\"well well-sm\"><center><h4><span class=\"label label-".$row['COLOUR']."\">".$row['NAME']."</span></h4><hr><p>".$row['TEAM1']."</p><p>".$row['TEAM2']."</p><p>".$row['TEAM3']."</p></center></div></div>";
		}
	}
	else {
		echo "HEY YOU DERPED, THERE ARE NO POOLS IN THE LEAGUE.";
	}
}

function getGames() {
	global $conn;
	$sql = "SELECT * FROM schedule";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr class=\"".$row['POOLID']."\"style=\"text-align: center;\"><td>".$row['ID']."</td><td>".$row['DATE']."</td><td>".$row['TIME']."</td><td>".$row['HOME']."</td><td>".$row['AWAY']."</td></tr>";
		}
	}
	else {
		echo "HEY YOU DERPED, THERE ARE NO GAMES SCHEDULED.";
	}
}

function getTeamRecord($teamID) {
	global $conn;
	$result = mysqli_query($conn, $sql="SELECT * FROM teams WHERE TID=$teamID");
	$row = mysqli_fetch_array($result);
	echo '<thead><tr><th>GP</th><th>Wins</th><th>Losses</th><th>Points</th><th>Record</th></tr></thead><tbody><tr><td>'.$row['GP'].'</td><td>'.$row['W'].'</td><td>'.$row['L'].'</td><td>'.$row['PTS'].'</td><td>'.$row['W'].' - '.$row['L'].'</td></tr></tbody>';

}

function getTeamName($teamID) {
	global $conn;
	$result = mysqli_query($conn, $sql="SELECT * FROM teams WHERE TID=$teamID");
	$row = mysqli_fetch_array($result);
	echo $row['NAME'];
}

function getPlayers($teamID) {
	global $conn;
	$result = mysqli_query($conn, $sql="SELECT * FROM teams WHERE TID=$teamID");
	$row = mysqli_fetch_array($result);
	echo '<p>'. $row['MEM1'] . '</p>';
	echo '<p>'. $row['MEM2'] . '</p>';
	echo '<p>'. $row['MEM3'] . '</p>';
	echo '<p>'. $row['MEM4'] . '</p>';
	echo '<p>'. $row['MEM5'] . '</p>';
	echo '<p>'. $row['MEM6'] . '</p>';
	echo '<p>'. $row['MEM7'] . '</p>';
	echo '<p>'. $row['MEM8'] . '</p>';
}



?>	