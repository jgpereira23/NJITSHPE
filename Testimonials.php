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
			</div><div class="bar" id="content">
				<div id="middle">
					<h1>&nbsp;Testimonials</h1>
					<h2>Arickson Reyes</h2>
					<p>&nbsp;�Never say never, because limits, like fears, are often just an illusion�</br></br>
					I was one of those members that only joined because �I was forced to by with my friends�. I never really had an interest in SHPE, neither knew what it stood for or what it does for us. It was the best decision I never made in college. I had so much free time in my hand that I attended almost every event they had, and like everyone should whether you are Hispanic or not, I created a support system that still guides me today. The college life is so much easier when you are not going through it alone.</p>
					<h2>Michelle Vargas</h2>
					<p>Being the first generation going to college is not easy, I did not know what to do, who to talk to, nor what opportunities where out there for me.  Shpe NJIT has made a huge impact in my life. When I was a freshman in college all I knew was that I wanted to attend college but nothing more. My major was Chemical Engineering but I wasn't exactly sure if that was what I wanted to do for the rest of my life. After given the opportunity of attending a national conference, it sort of made me open my eyes and think differently about everything. This conference taught me a lot of new things as well as getting an experience to travel to a new place and adventure, something of  which I would of have never thought I would be able to do at that time of my life. Now I am going to my second national conference and I am extremely excited, more focused in school, as well as more secure of what I want to do in life. I eventually kept my major and still going strong. I hope SHPE is something that interest you and that one day it will mean something more than just an organization to you.</p>
					<h2>George Benavente</h2>
					<p>&nbsp;�Because the people who are crazy enough to think they can change the world, are the ones who do� -Steve Jobs</br></br>
					I never wanted to just go to college, attend classes, and graduate. I wanted a challenge because 20 years from today I want to look back at my college experience and honestly say, "I've made a difference!" NJIT SHPE has allowed me to do just that! I have made a difference at the NJIT campus, on my peers, and most importantly on myself. I am far from the perfect leader, but NJIT SHPE pushes me in the right direction with a clear vision...to change the lives of my community by empowering them to realize their fullest potential.</p>
					<h2>Adonis Yaport</h2>
					<p>&nbsp;�My attitude is that if you push me towards something that you think is a weakness, then I will turn that perceived weakness into a strength�</br></br>
					Being the first person in my family to go to college, barely know the language, and have very little understanding of the American culture were some of the parameters that set the beginning of my journal as a college student. In my first days of college, I was very intimidated. I felt like I did not belong to this place and that no one understood my culture and me.  I wanted to be surrounded by people who in one way or the other would relate to my struggles. NJIT SHPE created that sense of belonging that I was looking for and helped me build the platform that I would later on used to develop my communication, human, and leadership skills. SHPE has inspired me to become a leader and to always strive for greatness.</p>
					<h2>Alodie Vargas</h2>
					<p>&nbsp;�If not us, who? If not now, when?"</br></br>
					Saludos! My name is Alodie (pronounced like reality) Vargas. I am a junior studying Mechanical Engineering. SHPE is my familia here at NJIT and I'm surrounded by motivating leaders that can help you too! We welcome you with open arms and can help support you to achieve your fullest potential. Don't be afraid to speak up and ask questions! I'm very friendly and I don't bite.</p>
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