<?php
require('connect.php');

$query="SELECT * FROM update ORDER BY dateCreated limit 0,3;";
$result = mysql_query($query);
while($uRow=mysql_fetch_array($result)){
	echo count($uRow);
	echo '<img class="UpImgs" id="UpImg1" src="Images/Updates-1.png"><img id="UpImg2" class="UpImgs" src="Images/Updates-1.png"><img class="UpImgs" id="UpImg3" src="Images/Updates-1.png">
	<p class="Updates" id="UpdateTxt"></p>';
	
}





echo'<script type="text/javascript">
$("#UpImg1").hover(function() {
		$("#UpImg1").css("border-color","#0B3383");
		$("#UpImg2").css("border-color","black");
		$("#UpImg3").css("border-color","black");
		$("#UpdateTxt").html("See how SHPE has affected some of our members in our testimonials page.");
	});
	$("#UpImg2").hover(function() {
		$("#UpImg1").css("border-color","black");
		$("#UpImg2").css("border-color","#0B3383");
		$("#UpImg3").css("border-color","black");
		$("#UpdateTxt").html("Chechout the calendar to see what NJIT SHPE will be doing next.");
	});
	$("#UpImg3").hover(function() {
		$("#UpImg1").css("border-color","black");
		$("#UpImg2").css("border-color","black");
		$("#UpImg3").css("border-color","#0B3383");
		$("#UpdateTxt").html("We plan on making this year NJIT SHPE\'s best yet. Help us make it happen by donating!");
	});
</script>';
?>