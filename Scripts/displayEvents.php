<?php
require('connect.php');
function displayEvents($status){
	switch($status){
	case "past":
		$query = "SELECT startTime, endTime, name, location, description, link FROM event WHERE endTime<CURRENT_TIMESTAMP ORDER BY startTime;";
		$result = mysql_query($query);
		if(mysql_num_rows($result) == 0){
			echo "<h2>There are no events coming up for now </h2>";
		}
		echo "<table cellpadding='5'>";
		while($eRow = mysql_fetch_array($result)){
			$link=$eRow['link'];
			if($eRow['link']=="" || $eRow['link']==null){
				$link="NoImage.jpg";
			}
			$startTime=date("l M jS g:ia", strtotime($eRow['startTime']));
			$endTime=date("g:ia", strtotime($eRow['endTime']));
			echo "<tr>";
			echo "<td><img src='Images/Flyers/{$link}' width='150' height='200'></td>";
			echo "<td><h2> {$eRow['name']} </h2> <h4>{$eRow['location']} <br>{$startTime} to {$endTime} </h4> <p>{$eRow['description']} </p> </rd>";
			echo "</tr>";
		}
		echo "</table>";
		break;
	case "future":
		$query = "SELECT startTime, endTime, name, location, description, link FROM event WHERE startTime>CURRENT_TIMESTAMP ORDER BY startTime;";
		$result = mysql_query($query);
		if(mysql_num_rows($result) == 0){
			echo "<h2>There are no events coming up for now </h2>";
		}
		echo "<table cellpadding='5'>";
		while($eRow = mysql_fetch_array($result)){
			$link=$eRow['link'];
			if($eRow['link']=="" || $eRow['link']==null){
				$link="NoImage.jpg";
			}
			$startTime=date("l M jS g:ia", strtotime($row['startTime']));
			$endTime=date("g:ia", strtotime($row['endTime']));
			echo "<tr>";
			echo "<td><img src='Images/Flyers/{$link}' width='150' height='200'></td>";
			echo "<td><h2> {$eRow['name']} </h2> <h4>{$eRow['location']} <br>{$startTime} to {$endTime} </h4> <p>{$eRow['description']} </p> </rd>";
			echo "</tr>";
		}
		echo "</table>";
		break;
	}
}

displayEvents($_SESSION['status'])
?>