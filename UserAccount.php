<!DOCTYPE? html>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
		<script type="text/javascript" src="Scripts/updateText.php"></script>
		
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35750639-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<div id="vid"><iframe width="640" height="480" name="action" frameborder="0" ></iframe></div>
		<div id="inactive"></div>
		<div id="container">
			<div class="bar" id="nav">
				<?php
					session_start();
					$_SESSION['curr'] = 6;
					$display = include "Scripts/navBar.php";
					echo $display;
				?>
			</div><div class="bar" id="content"><div id="middle">
					<h1>&nbsp;My Account</h1>
					<?php
						echo"<table>
						<tr><td><h2 align>General Information</h2></td></tr>
						<tr>
							<td><h4>First Name:\t".$_SESSION['firstName']."</h4></td>
							<td><h4>Birthday: ".$_SESSION['dob']."</h4></td>
						</tr>
						<tr>
							<td><h4>Last Name:\t".$_SESSION['lastName']."</h4></td>
							<td><h4>Phone #:  ".$_SESSION['number']."</h4></td>
						</tr>
						<tr>
							<td><h4>Email:  ".$_SESSION['email']."</h4></td>
						</tr>
						<tr><td><h2>Address Information</h2></td></tr>
						<tr>
							<td><h4>Address:  ".$_SESSION['address']."</h4></td>
							<td><h4>City:  ".$_SESSION['city']."</h4></td>
						</tr>
						<tr>
							<td><h4>State:  ".$_SESSION['state']."</h4></td>
							<td><h4>Country: ".$_SESSION['country']."</h4></td>
						</tr>
						<tr><td><h2>Education Information</h2></td></tr>
						<tr>
							<td><h4>Major:  ".$_SESSION['major']."</h4></td>
							<td><h4>Degree:  ".$_SESSION['degree']."</h4></td>
						</tr>
						<tr>
							<td><h4>Grade Level  ".$_SESSION['gradeLevel']."</h4></td>
							<td><h4>GPA:  ".$_SESSION['gpa']."</h4></td>
						</tr>";
						
						echo'<tr><td><form name="edit" method="post" action="Scripts/checklogin.php"><input class="button" type="submit" name="edit" value="Edit"></form></td><tr>';
						
						echo '<tr><td>Submit New Resume: <form name="resume" method="post" action="Scripts/checklogin.php"><input class="button" type="submit" name="resume" value="Upload"></form></td></tr>';
						echo"</table>";
					?>
				</div></div><div class="bar" id="sidebar">
				<div id="social">
					<ul>
						<li><a href="https://twitter.com/NJIT_SHPE" target="_blank"><img class="grayscale" src="Images/Twitter.png"></a></li><li><a href="https://www.facebook.com/groups/njitshpe/" target="_blank"><img class="grayscale" src="Images/Facebook.png"></a></li><li><a href="http://instagram.com/njitshpe" target="_blank"><img class="grayscale" src="Images/Instagram.png"></a></li><li><a href="http://www.youtube.com/user/NJITSHPE" target="_blank"><img class="grayscale" src="Images/Youtube.png"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div id="fwrap">
				<table width = "100%">
					<tr>
						<td width="67%">
							<h3>Latest Updates</h3>
							<?php
							require('Scripts/displayUpdates.php');
							?>
						</td>
						<td width="33%">
							<h3>General Info</h3>
							Office: Campus Center B10</br>
							Office Hours: <a href="PDFs/SHPE_E-Board_Office_Hours.pdf">Find them here!</a></br>
							General Meeting: Fridays 11:30AM Kupfrian 118</br>
							<h3>Contact Us</h3>
							<a href="mailto:njitshpe@gmail.com" target="_blank">Contact Us Via Email</a>
							<a href="FAQ.php"><h3>FAQ</h3></a>
						</td>
					</tr>
			</div>
		</div>
	</body>
</html>