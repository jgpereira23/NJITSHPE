<!DOCTYPE? html>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<link href="lightbox2-master/css/lightbox.css" rel="stylesheet" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
		<script src="lightbox2-master/js/jquery-1.10.2.min.js"></script>
		<script src="lightbox2-master/js/lightbox-2.6.min.js"></script>
		
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
					$_SESSION['curr'] = 5;
					$display = include "Scripts/navBar.php";
					echo $display;
				?>
			</div><div class="bar" id="content"><div id="middle">
					<h1>&nbsp;Events</h1>
<<<<<<< HEAD:Events.php
					
					<a href="lightbox2-master/img/demopage/image-1.jpg" data-lightbox="example-1" title="my caption">image #1<img src="lightbox2-master/img/demopage/thumb-1.jpg" alt="thumb-1" width="150" height="150"> </a>
					
					
					
					<!-- 
					?php
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
					-->
=======
					<!--script that'll display pictures here

					require(Scripts/displayPhotos.php);
					
					-->
					<a href="Images/HHM/pic1.jpg" data-lightbox="HHM" title="pic_1"><img src="Images/HHM/pic1.jpg" alt="thumb-1" width="150" height="150"></br>HHM</a>
					<a href="Images/HHM/pic2.jpg" data-lightbox="HHM" title="pic_2"></a>
					<a href="Images/HHM/pic3.jpg" data-lightbox="HHM" title="pic_3"></a>
					<a href="Images/HHM/pic4.jpg" data-lightbox="HHM" title="pic_4"></a>
					<a href="Images/HHM/pic5.jpg" data-lightbox="HHM" title="pic_5"></a>
					<a href="Images/HHM/pic6.jpg" data-lightbox="HHM" title="pic_6"></a>
					
					
					
>>>>>>> Multiple Changes:Events.php
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
							<a href="FAQ.php"><h3>FAQ</h3></a>
						</td>
					</tr>
			</div>
		</div>
	</body>
</html>