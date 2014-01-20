<!DOCTYPE? html>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
		<script src="paypal-button.min"></script>
		<script type="text/javascript">
			function validateForm1()
			{
				var x=document.forms["Register"]["firstName"].value;
				if (x==null || x=="")
				{
					alert("First name must be filled out");
					return false;
				}
				x=document.forms["Register"]["middleName"].value;
				if (x==null || x=="")
				{
					alert("Middle name must be filled out");
					return false;
				}
				x=document.forms["Register"]["lastName"].value;
				if (x==null || x=="")
				{
					alert("Last name must be filled out");
					return false;
				}
				x=document.forms["Register"]["gender"].value;
				if (x==null || x=="")
				{
					alert("Gender must be selected");
					return false;
				}
				x=document.forms["Register"]["dateOfBirth"].value;
				if (x==null || x=="")
				{
					alert("Birthday must be selected");
					return false;
				}
				x=document.forms["Register"]["email"].value;
				if (x==null || x=="")
				{
					alert("E-mail must be filled out");
					return false;
				}
				var atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
				{
					alert("Not a valid e-mail address");
					return false;
				}
				x=document.forms["Register"]["number"].value;
				if (x==null || x=="")
				{
					alert("Number must be filled out");
					return false;
				}
				var phoneno = /^\d{10}$/; 
				if(x.match(phoneno))  
				{    
				}
				else{
					alert("Number not valid. Please enter 10 digits. i.e. 5556667777");  
					return false;
				}
				x=document.forms["Register"]["ethnicity"].value;
				if (x==null || x=="")
				{
					alert("Ethnicity must be filled out");
					return false;
				}
				x=document.forms["Register"]["legalStatus"].value;
				if (x==null || x=="")
				{
					alert("Legal Status must be selected");
					return false;
				}
				pageChange(1,2);
			}
			function validateForm2(){
				var x=document.forms["Register"]["address"].value;
				if (x==null || x=="")
				{
					alert("Street Adress must be filled out");
					return false;
				}
				x=document.forms["Register"]["city"].value;
				if (x==null || x=="")
				{
					alert("City must be filled out");
					return false;
				}
				x=document.forms["Register"]["state"].value;
				if (x==null || x=="")
				{
					alert("Gender must be selected");
					return false;
				}
				var y=document.forms["Register"]["country"].value;
				if (x==null || x=="")
				{
					alert("Gender must be selected");
					return false;
				}
				if(x=="Not in US" && y=="United States of America"){
					alert("Country must be other than US if state is not in US");
					return false;
				}
				if(x!="Not in US" && y!="United States of America"){
					alert("Country must be US if state is in US");
					return false;
				}
				x=document.forms["Register"]["state"].value;
				if(/(^\d{5}$)|(^\d{5}-\d{4}$)/.test(x){
					alert("Zip code is not valid");
					return false;
				}
			}
			function pageChange(frompage, topage) {
				var page=document.getElementById('formpage_'+frompage);
				if (!page) return false;
				page.style.visibility='hidden';
				page.style.display='none';
				
				page=document.getElementById('formpage_'+topage);
				if (!page) return false;
				page.style.display='block';
				page.style.visibility='visible';
				return true;
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
		<!--<div id="vid"><iframe width="640" height="480" name="action" frameborder="0"></iframe></div>-->
		<div id="inactive"></div>
		<div id="container">
			<div class="bar" id="nav">
				<?php
					session_start();
					$_SESSION['curr'] = 0;
					$display = include "Scripts/navBar.php";
					echo $display;
				?>
			</div><div class="bar" id="content"><div id="middle"></br>
				<p style="margin-left=5px">
					<FORM name="Register" METHOD=POST ACTION="Scripts/signup.php">
						<div id="formpage_1" style="visibility: visible; display: block;">
							<CENTER><h2>Personal Information</h2></CENTER>
							<INPUT class="input" type="text" placeholder="First Name" name="firstName" size="20" required> &nbsp &nbsp &nbsp 
							<INPUT class="input" type="text" placeholder="MI" name="middleName" value="" size="1" maxlength="1"> &nbsp &nbsp &nbsp 
							<INPUT class="input" name="lastName" placeholder="Last Name" size="20" required><BR><BR>
							<p><select name="gender" required>
								<option value="" disabled selected>Gender</option>
								<option value="F">Female</option>
								<option value="M">Male</option>
							</select> &nbsp  &nbsp &nbsp 
							Birthday: &nbsp <INPUT type="date" name="dateOfBirth" value="birthdate" required>
							<BR><BR> </p>
							<INPUT class="input" type ="email" placeholder=" E-mail" name="email" value="" size="18" required>&nbsp &nbsp &nbsp 
							<input type="tel" placeholder="Phone Number" name="number"><BR><BR>
							<INPUT class="input" name="ethnicity" placeholder="Ethnicity (Nationality)" size="20" required> &nbsp &nbsp &nbsp 
							<select id="legalStatus" name="legalStatus" required>
								<option value="" disabled selected>Legal Status</option>
								<option value="U.S. Citizen">U.S. Citizen</option>
								<option value="Permanent Resident">Permanent Resident</option>
								<option value="Student Visa F-1">Student Visa F-1</option>
								<option value="Student Visa J-1">Student Visa J-1</option>
								<option value="Student Visa J-1">Student Visa</option>
								<option value="L-2 Pending">L-2 Pending</option>
								<option value="J-2">J-2</option>
								<option value="Other">Other</option>
							</select>
							<BR><BR>
							<input type="button" class="right" style="float:right;" value="Next" onclick="validateForm1();"><br>
						</div>
						<div id="formpage_2"  style="visibility: hidden; display: none;">
							<CENTER><h2>Permanent Address</h2></CENTER>
							<INPUT class="input" type="text" placeholder="Street Address" name="address" required>
							<INPUT class="input" type="text" name="city" placeholder="City" size="15" required>
							<select name="state" required>
								<option value="" disabled selected>State</option>
								<option value="Not in US">Not in US</option>
								<option value="Alabama">Alabama</option>
								<option value="Alaska">Alaska</option>
								<option value="Arizona">Arizona</option>
								<option value="Arkansas">Arkansas</option>
								<option value="California">California</option>
								<option value="Colorado">Colorado</option>
								<option value="Connecticut">Connecticut</option>
								<option value="Delaware">Delaware</option>
								<option value="Florida">Florida</option>
								<option value="Georgia">Georgia</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Idaho">Idaho</option>
								<option value="Illinois">Illinois</option>
								<option value="Indiana">Indiana</option>
								<option value="Iowa">Iowa</option>
								<option value="Kansas">Kansas</option>
								<option value="Kentucky">Kentucky</option>
								<option value="Louisiana">Louisiana</option>
								<option value="Maine">Maine</option>
								<option value="Maryland">Maryland</option>
								<option value="Massachusetts">Massachusetts</option>
								<option value="Michigan">Michigan</option>
								<option value="Minnesota">Minnesota</option>
								<option value="Mississippi">Mississippi</option>
								<option value="Missouri">Missouri</option>
								<option value="Montana">Montana</option>
								<option value="Nebraska">Nebraska</option>
								<option value="Nevada">Nevada</option>
								<option value="New Hampshire">New Hampshire</option>
								<option value="New Jersey">New Jersey</option>
								<option value="New Mexico">New Mexico</option>
								<option value="New York">New York</option>
								<option value="North Carolina">North Carolina</option>
								<option value="North Dakota">North Dakota</option>
								<option value="Ohio">Ohio</option>
								<option value="Oklahoma">Oklahoma</option>
								<option value="Oregon">Oregon</option>
								<option value="Pennsylvania">Pennsylvania</option>
								<option value="Rhode Island">Rhode Island</option>
								<option value="South Carolina">South Carolina</option>
								<option value="South Dakota">South Dakota</option>
								<option value="Tennessee">Tennessee</option>
								<option value="Texas">Texas</option>
								<option value="Utah">Utah</option>
								<option value="Vermont">Vermont</option>
								<option value="Virginia">Virginia</option>
								<option value="Washington">Washington</option>
								<option value="West Virginia">West Virginia</option>
								<option value="Wisconsin">Wisconsin</option>
								<option value="Wyoming">Wyoming</option>
							</select>
							<BR><BR><select name="country" required>
								<option value="" disabled selected>Country</option>
								<option value="United States of America">United States of America</option>
								<option value="Afganistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bonaire">Bonaire</option>
								<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
								<option value="Brunei">Brunei</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canary Islands">Canary Islands</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Channel Islands">Channel Islands</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos Island">Cocos Island</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote DIvoire">Cote D\'Ivoire</option>
								<option value="Croatia">Croatia</option>
								<option value="Cuba">Cuba</option>
								<option value="Curaco">Curacao</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands">Falkland Islands</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Ter">French Southern Ter</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Great Britain">Great Britain</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Isle of Man">Isle of Man</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea North">Korea North</option>
								<option value="Korea Sout">Korea South</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Malawi">Malawi</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Midway Islands">Midway Islands</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Nambia">Nambia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherland Antilles">Netherland Antilles</option>
								<option value="Netherlands">Netherlands (Holland, Europe)</option>
								<option value="Nevis">Nevis</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau Island">Palau Island</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Phillipines">Philippines</option>
								<option value="Pitcairn Island">Pitcairn Island</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Republic of Montenegro">Republic of Montenegro</option>
								<option value="Republic of Serbia">Republic of Serbia</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russia">Russia</option>
								<option value="Rwanda">Rwanda</option>
								<option value="St Barthelemy">St Barthelemy</option>
								<option value="St Eustatius">St Eustatius</option>
								<option value="St Helena">St Helena</option>
								<option value="St Kitts-Nevis">St Kitts-Nevis</option>
								<option value="St Lucia">St Lucia</option>
								<option value="St Maarten">St Maarten</option>
								<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
								<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
								<option value="Saipan">Saipan</option>
								<option value="Samoa">Samoa</option>
								<option value="Samoa American">Samoa American</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Tahiti">Tahiti</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Erimates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Uraguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State">Vatican City State</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietnam">Vietnam</option>
								<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
								<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
								<option value="Wake Island">Wake Island</option>
								<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
								<option value="Yemen">Yemen</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
							<INPUT class="input" type="number" placeholder="Zip Code" name="postalCode" maxlength="5" required><BR><BR>
							<input type="button" class="right" style="float:left;" value="Back" onclick="pagechange(2,1);">
							<input type="button" class="right" style="float:right;" value="Next" onclick="validateForm2();"><br>
						</div>
						<div id="formpage_3" style="visibility: hidden; display: none;">
							<BR><BR>
							<input type="button" class="right" style="float:left;" value="Back" onclick="pagechange(3,2);">
							<input type="submit" class="right" style="float:right;" value="Submit"><br>
						</div>
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
							<p class="Updates" id="UpdateTxt">&nbsp;</p>

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