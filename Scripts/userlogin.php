<?php
		//session_start();
		//if logedin is not set yet then display form to login
		if(!(isset($_SESSION['loggedin'])) OR $_SESSION['loggedin']==false) {
			//display form and send data to checklogin.php
			return '<h3><form name="login" method="post" action="Scripts/checklogin.php">
			<input name="email" id="email" placeholder="Email" size="15" required><p></p>
			<input type="password" name="pword" id="pword" placeholder="Password" size="15"required><p></p>
			<input class="button" type="submit" name="Submit" value="Login">
			</form></h3>';
		}	
		else
		{	
			//logged in var is set so we display logout button
			return '<form name="logout" method="post" action="Scripts/checklogin.php"><h3>Logged In!
			<input class="button" type="submit" name="Submit" value="Logout">
			</form></h3>';
			
		} 
		if((isset($_SESSION['success'])) && $_SESSION['success']==false){
			//success var is set and is assigned to false
			echo '<h3 style="color:red">Wrong Username or Password. Please try again!</h3>';
		}
	?>