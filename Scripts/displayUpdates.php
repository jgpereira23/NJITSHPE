<?php
require('connect.php');

$query="SELECT * FROM `update` WHERE 1 Order By dateCreated;";
$result = mysql_query($query);

$imgCount=0;
$arrLink=array();

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

while($uRow=mysql_fetch_array($result)){
	array_push($arrLink, $uRow['link']);
}

echo "<table><tr><td>";
for($i=0; $i<count($arrLink); $i++){
	$imgCount+=1;
	echo "<img class='UpImgs' id='UpImg{$imgCount}' src='Images/Updates/{$arrLink[$i]}' height='102px' width='172px'>";
	
}
echo "<p class='Updates' id='UpdateTxt'></p>";
echo "</td></tr></table>";


?>