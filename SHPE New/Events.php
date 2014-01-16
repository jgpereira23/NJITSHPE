<!DOCTYPE? html>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
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
				<div id="navbar">
				<div id="logo"><a href="Home.html"><img src="Images/SHPElogo.png"></a></div>
				<!--<a href="http://www.youtube.com/embed/BYW6C44zo24?autoplay=0" target="action">-->
				<ul>
					<li>
						<div class="submenu">
							<ul>
								<li>
									<a href="Scholarships.html">Scholarships</a>
								</li>
								<li>
									<a href="Internships.html">Internships</a>
								</li>
								<li>
									<a href="Miscellaneous.html">Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class="submenu">
							<ul>
								<li>
									<a href="CurrentEBoard.html">Current E-Board</a>
								</li>
								<li>
									<a href="Advisors.html">Advisors</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class="submenu">
							<ul>
								<li>
									<a href="MissionVision.html">Mission & Vision</a>
								</li>
								<li>
									<a href="History.html">History</a>
								</li>
								<li>
									<a href="Testimonials.html">Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class="submenu">
							<ul>
								<li>
									<a href="Calendar.html">Calendar</a>
								</li>
								<li>
									<a href="PastEvents.html">Past Events</a>
								</li>
								<li>
									<a href="FutureEvents.html">Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class="submenu">
							<ul>
								<li>
									<a href="GeneralMeetings.html">General Meetings</a>
								</li>
								<li>
									<a href="Events.html">Events</a>
								</li>
							</ul>
						</div>
						<div id="current">GALLERY</div>
					</li>
				</ul>
				</div></div><div class="bar" id="content"><div id="middle">
					<h1>&nbsp;Events</h1>
					
					<?php
					require("Scripts/connect.php");
					
					$sql = "SELECT * FROM album;";
					$maxCol = 3;
					$result = mysql_query($sql);
					
					echo "<div id='right'>";
					//Open Table
					echo"<table cellpadding='5' cols='2'>";
					//set index var to track record count
					$recIdx=0;
					while($row = mysql_fetch_array($result)){
						$recIdx++;
						//Open new row if needed
						if($recIdx%$maxCol ==1){
							echo "<tr>\n";
						}
						//Display Album
						
						echo "<td>";
						echo "<img src='Images\Gallery\albumcover.png' width='100px' height='100px'></br>";
						echo $row['name'];
						echo "</td>\n";
						//Close row if needed
						if($recIdx % $maxCol ==0){
							echo "</tr>\n";
						}
					}
					//Close last row if needed
					if($recIdx % $maxCol == 0){
						echo "</tr>\n";
					}
					//close table and div
					echo "</table>";
					echo "</div>";
					
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
							<img class="UpImgs" id="UpImg1" src="Images/Updates-1.png"><img id="UpImg2" class="UpImgs" src="Images/Updates-1.png"><img class="UpImgs" id="UpImg3" src="Images/Updates-1.png">
							<p class="Updates" id="UpdateTxt"></p>
						</td>
						<td width="33%">
							<h3>General Info</h3>
							Office: Campus Center B10</br>
							Office Hours: <a href="PDFs/SHPE_E-Board_Office_Hours.pdf">Find them here!</a></br>
							General Meeting: Fridays 11:30AM Kupfrian 118</br>
							<h3>Contact Us</h3>
							<a href="mailto:njitshpe@gmail.com" target="_blank">Contact Us Via Email</a>
							<a href="FAQ.html"><h3>FAQ</h3></a>
						</td>
					</tr>
			</div>
		</div>
	</body>
</html>