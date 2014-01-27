<?php
require('connect.php');

$query="SELECT * FROM `update` WHERE 1;";
$result = mysql_query($query);

$imgCount=0;
$arrText=array();

if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
while($uRow=mysql_fetch_array($result)){
	$imgCount+=1;
	echo "<img class='UpImgs' id='UpImg{$imgCount}' src='{$uRow['link']}'>
	<p class='Updates' id='UpdateTxt'></p>";
	array_push($arrText, $uRow['text']);
	
}

echo"<script type='text/javascript'>
$('#UpImg1').hover(function() {
		$('#UpImg1').css('border-color','#0B3383');
		$('#UpImg2').css('border-color','black');
		$('#UpImg3').css('border-color','black');
		$('#UpdateTxt').html({$arrText['0']});
	});
	$('#UpImg2').hover(function() {
		$('#UpImg1').css('border-color','black');
		$('#UpImg2').css('border-color','#0B3383');
		$('#UpImg3').css('border-color','black');
		$('#UpdateTxt').html({$arrText['1']});
	});
	$('#UpImg3').hover(function() {
		$('#UpImg1').css('border-color','black');
		$('#UpImg2').css('border-color','black');
		$('#UpImg3').css('border-color','#0B3383');
		$('#UpdateTxt').html({$arrText['2']});
	});
</script>";
?>