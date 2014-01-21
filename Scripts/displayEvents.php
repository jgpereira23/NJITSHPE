<?php
require('connect.php');
function displayEvents($status){
	switch($status){
	case "past":
		$query = "SELECT startTime, endTime, name, location, description, link FROM event WHERE endTime<CURRENT_TIMESTAMP;";
		$result = mysql_query($query);
		echo mysql_num_rows($result);
		echo "<table cellpadding='5'>";
		while($eRow = mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td><img src='{$eRow['link']}' width='150' height='200'></td>";
			echo "<td><h2> {$eRow['name']} </h2> <h4>{$eRow['location']} </h4> <p>{$eRow['description']} </p> </rd>";
			echo "</tr>";
		}
		echo "</table>";
		break;
	case "future":
		$query = "SELECT startTime, endTime, name, location, description, link FROM event WHERE startTime>CURRENT_TIMESTAMP;";
		$result = mysql_query($query);
		if(mysql_num_rows($result) == 0){
			echo "<h2>There are no Events Coming Up for now :(</h2>";
		}
		echo "<table cellpadding='5'>";
		while($eRow = mysql_fetch_array($result)){
			echo "<tr>";
			echo "<td><img src='{$eRow['link']}' width='150' height='200'></td>";
			echo "<td><h2> {$eRow['name']} </h2> <h4>{$eRow['location']} </h4> <p>{$eRow['description']} </p> </rd>";
			echo "</tr>";
		}
		echo "</table>";
		break;
	}
}

displayEvents($_SESSION['status'])
?>