<?php
require("connect.php");

$link = 

$query = "SELECT link FROM album;";
$maxCol = 3;
$result = mysql_query($query);

echo "<div id='right'>";
//Open Table
echo"<table cellpadding='5' cols='2'>";
//set index var to track record count
$recIdx=0;
while($row = mysql_fetch_array($result)){
	$recIdx++;
	//Open new row if needed
	if($recIdx%$maxCol ==1){
		echo "<tr>\n";
	}
	//Display Album
	
	echo "<td>";
	echo "<img src='Images\Gallery\albumcover.png' width='100px' height='100px'></br>";
	echo $row['name'];
	echo "</td>\n";
	//Close row if needed
	if($recIdx % $maxCol ==0){
		echo "</tr>\n";
	}
}
//Close last row if needed
if($recIdx % $maxCol == 0){
	echo "</tr>\n";
}
//close table and div
echo "</table>";
echo "</div>";
					


?>