<?php
require('connect.php');

Header("content-type: application/x-javascript");

$query="SELECT * FROM `update` WHERE 1 Order By dateCreated;";
$result = mysql_query($query);


$arrText=array();

while($uRow=mysql_fetch_array($result)){
	array_push($arrText, $uRow['text']);
}
echo"
$(document).ready(function(){
	$('#UpdateTxt').html({$arrText[0]});
	$('#UpImg1').hover(function() {
			$('#UpImg1').css('border-color','#0B3383');
			$('#UpImg2').css('border-color','black');
			$('#UpImg3').css('border-color','black');
			$('#UpdateTxt').html('{$arrText['0']}');
		});
	$('#UpImg2').hover(function() {
			$('#UpImg1').css('border-color','black');
			$('#UpImg2').css('border-color','#0B3383');
			$('#UpImg3').css('border-color','black');
			$('#UpdateTxt').html('{$arrText['1']}');
		});
	$('#UpImg3').hover(function() {
			$('#UpImg1').css('border-color','black');
			$('#UpImg2').css('border-color','black');
			$('#UpImg3').css('border-color','#0B3383');
			$('#UpdateTxt').html('{$arrText['2']}');
		});";
	});
	
echo "document.write(\"It's Working!\")";
?>