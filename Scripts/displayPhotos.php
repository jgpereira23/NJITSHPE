<?php
require("connect.php");
//get data from both tables
$query1 = "SELECT * FROM album;";
$query2 = "SELECT * from pictures;";
//storing data in var
$result1 = mysql_query($query1);
$result2 = mysql_query($query2);
//setting album count and column count
$aCount = 0;
$colMax = 3;
//opening a table
echo "<table cellpadding='5' cols='2'>";
//loop through the album records
while($aRow = mysql_fetch_array($result1)){
	$aCount++;
	$firstPic=true;
	//make a new row if needed
	if($aCount% $colMax ==1){
			echo "<tr>\n";
		}
	//loop through the pictures records for each album
	while($pRow = mysql_fetch_array($result2)){
		$k = $pRow['albumID'];
		//if album id equals pictures id display photos
		if($aRow['albumID'] == $k){
			echo "<tr>";
			//if its the first photo then display with picture
			if($firstPic == true){
				echo "<td>";
				echo "<a href='{$aRow['link']}/{$pRow['link']}' data-lightbox='{$aRow['name']}' title='{$pRow['caption']}'><img src='{$aRow['link']}/{$pRow['link']}' alt='thumb-1' width='150' height='150'></br>{$aRow['name']} </a>";
				echo "</td>\n";
				$firstPic = false;
			}
			echo "<td>";
			echo "<a href='{$aRow['link']}/{$pRow['link']}' data-lightbox='{$aRow['name']}' title='{$pRow['caption']}'></a>";
			echo "<td>\n";
		}
	}
	//Close row if needed
	if($aCount % $colMax ==0){
		echo "</tr>\n";
	}
}

//Close row if needed
if($aCount % $colMax ==0){
	echo "</tr>\n";
	}
	
//close table
echo "</table>";

?>