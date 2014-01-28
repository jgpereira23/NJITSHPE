<?php
	session_start();
	require('connect.php');
	$sql = "INSERT INTO `shpe_club`.`user` (`userID`, `firstName`, `lastName`, `email`, `major`, `gradDate`, `gender`, `number`, `dateOfBirth`, `middleName`, `ethnicity`, `legalStatus`, `address`, `city`, `state`, `country`, `postalCode`, `degree`, `gpa`, `gradeLevel`, `resumeLink`, `password`) VALUES (NULL, '{$_POST[firstName]}', '{$_POST[lastName]}', '{$_POST[email]}', '{$_POST[major]}', '{$_POST[gradDate]}', '{$_POST[gender]}', '{$_POST[number]}', '{$_POST[dateOfBirth]}', '{$_POST[middleName]}', '{$_POST[ethnicity]}', '{$_POST[legalStatus]}', '{$_POST[address]}', '{$_POST[city]}', '{$_POST[state]}', '{$_POST[country]}', '{$_POST[postalCode]}', '{$_POST[degree]}', '{$_POST[gpa]}', '{$_POST[gradeLevel]}', '', '{$_POST[password]}');";
	if(!mysql_query($sql)){
		echo "Error: "  , mysql_error();
	}
	//Make email unique in Home form. Make new user userID into session variable
	$sql = "SELECT userID FROM user where=
	$_SESSION['userID'] = 
	require('uploadResume.php');
	//header("location:../Home.php");
?>