<?php
	//session_start();
	$userAcc = "";
	if(isset($_SESSION['success']) && $_SESSION['success']==true){
		$userAcc = "<li><a href='UserAccount.php'>ACCOUNT</a></li>";
	}
	if($_SESSION['curr']==1){
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						<div id='current'>OPPORTUNITIES</div>
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						GALLERY
					</li>".$userAcc."
				</ul>
				</div>";
	}
	else if($_SESSION['curr']==2){
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div><div id='current'>E-BOARD</div>
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						GALLERY
					</li>".$userAcc."
				</ul>
				</div>";
	}
	else if($_SESSION['curr']==3){
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						<div id='current'>ABOUT US</div>
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						GALLERY
					</li>".$userAcc."
				</ul>
				</div>";
	}
	else if($_SESSION['curr']==4){
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						<div id='current'>EVENTS</div>
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						GALLERY
					</li>".$userAcc."
				</ul>
				</div>";
	}
	else if($_SESSION['curr']==5){
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						<div id='current'>GALLERY</div>
					</li>".$userAcc."
				</ul>
				</div>";
	}
	else if($_SESSION['curr']==6){
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						GALLERY
					</li><li><a href='UserAccount.php'></a><div id='current'>ACCOUNT</div></li>
				</ul>
				</div>";
	}
	else{
		return "<div id='navbar'>
					<div id='logo'><a href='Home.php'><img src='Images/SHPElogo.png'></a></div>
				<!--<a href='http://www.youtube.com/embed/BYW6C44zo24?autoplay=0' target='action'>-->
				<ul>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Scholarships.php'>Scholarships</a>
								</li>
								<li>
									<a href='Internships.php'>Internships</a>
								</li>
								<li>
									<a href='Miscellaneous.php'>Miscellaneous</a>
								</li>
							</ul>
						</div>
						OPPORTUNITIES
					</li>	
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='CurrentEBoard.php'>Current E-Board</a>
								</li>
								<li>
									<a href='Advisers.php'>Advisers</a>
								</li>
							</ul>
						</div>E-BOARD
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='MissionVision.php'>Mission & Vision</a>
								</li>
								<li>
									<a href='History.php'>History</a>
								</li>
								<li>
									<a href='Testimonials.php'>Testimonials</a>
								</li>
							</ul>
						</div>
						ABOUT US
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Calendar.php'>Calendar</a>
								</li>
								<li>
									<a href='PastEvents.php'>Past Events</a>
								</li>
								<li>
									<a href='FutureEvents.php'>Future Events</a>
								</li>
							</ul>
						</div>
						EVENTS
					</li>
					<li>
						<div class='submenu'>
							<ul>
								<li>
									<a href='Events.php'>Events</a>
								</li>
							</ul>
						</div>
						GALLERY
					</li>".$userAcc."
				</ul>
				</div>";
	}
?>