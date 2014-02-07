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
					$_SESSION['curr'] = 3;
					$display = include "Scripts/navBar.php";
					echo $display;
				?>
			</div><div class="bar" id="content"><div id="middle">
					<h1>&nbsp;History</h1>
					<h2>SHPE History</h2>
					<p>The Society of Hispanic Professional Engineers (SHPE) was founded in Los Angeles, California, in 1974 by a group of engineers employed by the city of Los Angeles. Their objective was to form a national organization of professional engineers to serve as role models in the Hispanic community. The concept of Networking was the key basis for the organization. SHPE quickly established two student chapters to begin the network that would grow to encompass the nation as well as reach countries outside the United States. Today, SHPE enjoys a strong but independent network of professional and student chapters throughout the nation</p>
					<h2>Our History</h2>
					<p>The NJIT Chapter of Hispanic Organization of Students in Technology/ Society of Hispanic Professional Engineers (HOST/SHPE) has a long history of dedication to its members and the community.</p>
					<h2>OLA Years</h2>
					<p>In 1982, OLA (Organization Latino America) was created on the NJIT Campus. The OLA was dedicated to promoting higher educational level for the Hispanic student and motivating them to pursue a technological career. OLA sponsored recreational, social, and academic activities that brought the culture,language, and customs of Hispanics into focus for everyone to enjoy.</p>
					<h2>HOST Years</h2>
					<p>However, in 1985, in an effort to embrace the math, engineering, and scientific nature of our university, OLA changed its name to HOST (Hispanic Organization of Students in Technology). As HOST, the organization not only dealt with Hispanic culture and history but also branched out into the technological world. Four years later, an entirely different Hispanic Organization name SHPE (Society of Hispanic Professional Engineers) brought a chapter to NJIT. SHPE, a national organizational formed to serve as a model in the community, has been around since 1974 nationally.</p>
					<h2>HOST/SHPE Alliance</h2>
					<p>Even though HOST and SHPE shared the same goals and ideology, they were separate until 1991 when both organizations merged unto one and became known as HOST/SHPE. Since then, HOST/SHPE members have been involved in cultural events on and off campus, numerous community service activities, and all of SHPE's regional and national conferences. Moreover, HOST/SHPE has won a number of regional and national awards and it is widely recognized for educating, supporting, and instilling a sense of pride in aspiring students in the fields of engineering, technology, and science. As a matter of fact, HOST/SHPE received the Organization of the Year Award at the Newark College of Engineering Banquet on Friday, April 2,2004, alongside several congressional letters, national, and university awards.</p>
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