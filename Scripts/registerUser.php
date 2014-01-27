<?php
	session_start();
	require('connect.php');
	$sql = "INSERT INTO user VALUES ('', '$_POST[firstName]', '$_POST[lastName]', '$_POST[email]', '$_POST[email]', '$_POST[major]', '$_POST[gradDate]', '$_POST[gender]','$_POST[number]', '$_POST[dateOfBirth]','$_POST[middleName]', '$_POST[ethnicity]', '$_POST[legalStatus]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[country]','$_POST[postalCode]','$_POST[degree]','$_POST[gpa]','$_POST[gradeLevel]','','$_POST[password]')";
	
	if(!mysql_query($sql)){
		echo "Error: "  , mysql_error();
	}
	include('uploadResume.php');
	header("location:../index.php");
?>