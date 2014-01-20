<?php
require('connect.php');

$query = "SELECT startTime, endTime, name, location, description, link FROM event;";

$result = mysql_query($query);

echo "<table cellpadding='5'>";
while($eRow = mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td><img src='{$eRow['link']}' width='150' height='200'></td>";
	echo "<td><h2> {$eRow['name']} </h2> <h4>{$eRow['location']} </h4> <p>{$eRow['description']} </p> </rd>";
	echo "</tr>";
}

echo "</table>";
?>