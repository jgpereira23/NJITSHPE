<?php
session_start();
require('connect.php');

//if loggedin is true then it's coming from the logout submit button
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
	session_destroy();
	header("location: ../Home.php");

}
else{
	// username and password sent from form 
	$email=$_POST['email']; 
	$pword=$_POST['pword']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
	$pword = stripslashes($pword);
	$email = mysql_real_escape_string($email);
	$pword = mysql_real_escape_string($pword);

	//Grab the first name and last of the user to display
	$sql="SELECT * FROM `user` WHERE `email`='$email' and `password`='$pword';";
	$query=mysql_query($sql);
	$result = mysql_fetch_array($query);

	//if result returns empty
	if($result === FALSE) {
		die(mysql_error()); // TODO: better error handling
		$_SESSION['success'] = false;
	}
	// If row matched $email and $pword
	// Register $email, $pword and redirect to file "login_success.php"
	else{
	$_SESSION['user_ID'] = (int)$result['userID'];
	$_SESSION['firstName'] = $result['firstName'];
	$_SESSION['lastName'] = $result['lastName'];
	$_SESSION['email'] = $email;
	$_SESSION['loggedin'] = true;
	$_SESSION['success'] = true;
	header("location: ../Home.php");
	
	}
}


?>