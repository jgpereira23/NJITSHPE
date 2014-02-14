<?php
	session_start();
	require('connect.php');
	var_Dump($_SESSION['email']);
	$sql = "SELECT email FROM user WHERE email='{$_SESSION['email']}';";
	$row=mysql_query($sql);
	$count = mysql_num_rows($row);
	if($count!=0){
		$sql = $_SESSION['sql'];
		if(!mysql_query($sql)){
			echo "Error: "  , mysql_error();
		}
		//Make email unique in Home form. Make new user userID into session variable
		$sql = "SELECT userID FROM user WHERE email = '{$_SESSION['email']}';";
		$row = mysql_query($sql);
		$result = mysql_fetch_array($row);
		
		$_SESSION['userID'] = $result['userID'];
		require('uploadResume.php');
	}
	//header("location:../Success.php");
?>