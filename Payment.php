<!DOCTYPE? html>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
		<script type="text/javascript" src="Scripts/updateText.php"></script>
		<script>
			function goBack() 
			{
			  window.history.back()
			}
		</script>
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
					$_SESSION['curr'] = 3;
					$display = include "Scripts/navBar.php";
					echo $display;
				?>
			</div><div class="bar" id="content"><div id="middle" style="min-height:420px;">
					<?php	
						
						require('Scripts/connect.php');
						$text="INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `major`, `gradDate`, `gender`, `number`, `dateOfBirth`, `middleName`, `ethnicity`, `legalStatus`, `address`, `city`, `state`, `country`, `postalCode`, `degree`, `gpa`, `gradeLevel`, `resumeLink`, `password`) VALUES (NULL, ''{$_POST['firstName']}'', ''{$_POST['lastName']}'', ''{$_POST['email']}'', ''{$_POST['major']}'', ''{$_POST['gradDate']}'', ''{$_POST['gender']}'', ''{$_POST['number']}'', ''{$_POST['dateOfBirth']}'', ''{$_POST['middleName']}'', ''{$_POST['ethnicity']}'', ''{$_POST['legalStatus']}'', ''{$_POST['address']}'', ''{$_POST['city']}'', ''{$_POST['state']}'', ''{$_POST['country']}'', ''{$_POST['postalCode']}'', ''{$_POST['degree']}'', ''{$_POST['gpa']}'', ''{$_POST['gradeLevel']}'', '''', ''{$_POST['password']}'');";
						$sql="INSERT INTO `queries` (`queryID`, `text`, `dateCreated`) VALUES (NULL, '{$text}',NULL);";
						if(!mysql_query($sql)){
							echo "Error: "  , mysql_error();
						}
						$sql = "SELECT `queryID` FROM `queries` WHERE `text` = '{$text}';";
						$row = mysql_query($sql);
						$result = mysql_fetch_array($row);
						$night_phone_a=substr($_POST['number'],0, 3);
						$night_phone_b=substr($_POST['number'],3, 3);
						$night_phone_c=substr($_POST['number'],6, 4);
					?>
					<h1>&nbsp;Registration</h1>
					<CENTER><h2>Review</h2></CENTER>
					<table width="100%">
						<tr width="100%">
							<td width="50%" style="font-size:.7em;text-align:top;">
								<CENTER>General Info</CENTER>
								First Name: <?=$_POST['firstName']?><br>
								Middle Name: <?=$_POST['middleName']?><br>
								Last Name: <?=$_POST['lastName']?><br>
								Gender: <?=$_POST['gender']?><br>
								Birthday: <?=$_POST['dateOfBirth']?><br>
								Email: <?=$_POST['email']?><br>
								Phone Number: <?=$_POST['number']?><br>
								Ethnicity: <?=$_POST['ethnicity']?><br>
								Legal Status: <?=$_POST['legalStatus']?><br>
							</td>
							<td width="50%" style="font-size:.7em;vertical-align:top;">
								<CENTER>Permanent Address</CENTER>
								Street Address: <?=$_POST['address']?><br>
								City: <?=$_POST['city']?><br>
								State: <?=$_POST['state']?><br>
								Zip Code: <?=$_POST['postalCode']?><br>
								Country: <?=$_POST['country']?><br>
							</td>
						</tr>
						<tr width="100%">
							<td width="50%" style="font-size:.7em;text-align:top;">
								<CENTER>Education Info</CENTER>
								Degree: <?=$_POST['degree']?><br>
								Major: <?=$_POST['major']?><br>
								Expected Graduation: <?=$_POST['gradDate']?><br>
								Grade Level: <?=$_POST['gradeLevel']?><br>
								GPA: <?=$_POST['gpa']?><br>
							</td>
							<td width="50%" style="font-size:.7em;text-align:top;">
								<CENTER>Payment Info</CENTER>
								National Dues: $10.00<br>
								Chapter Dues: $5.00<br>
								Total: $15.00<br>
							</td>
						</tr>
					</table>
					<input type="button" class="form left" value="Back" onclick="goBack()">
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="custom" value="<?=$result['queryID']?>">
						<input type="hidden" name="hosted_button_id" value="7WMRTWELVBYE2">
						<INPUT TYPE="hidden" NAME="first_name" VALUE="<?=$_POST['firstName']?>">
						<INPUT TYPE="hidden" NAME="last_name" VALUE="<?=$_POST['lastName']?>">
						<INPUT TYPE="hidden" NAME="address1" VALUE="<?=$_POST['address']?>">
						<INPUT TYPE="hidden" NAME="city" VALUE="<?=$_POST['city']?>">
						<INPUT TYPE="hidden" NAME="state" VALUE="<?=$_POST['state']?>">
						<INPUT TYPE="hidden" NAME="zip" VALUE="<?=$_POST['postalCode']?>">
						<INPUT TYPE="hidden" NAME="lc" VALUE="US">
						<INPUT TYPE="hidden" NAME="email" VALUE="<?=$_POST['email']?>">
						<INPUT TYPE="hidden" NAME="night_phone_a" VALUE="<?=$night_phone_a?>">
						<INPUT TYPE="hidden" NAME="night_phone_b" VALUE="<?=$night_phone_b?>">
						<INPUT TYPE="hidden" NAME="night_phone_c" VALUE="<?=$night_phone_c?>">
						<input type="image" style="position:absolute;" class="right" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
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