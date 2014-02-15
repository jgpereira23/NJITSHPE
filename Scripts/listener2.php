<?php
	require("connect.php");         

	// Link to PayPal Codes //
	// https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/e_howto_html_IPNandPDTVariables // 

	// read the post from PayPal system and add 'cmd' //
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
	 $value = urlencode(stripslashes($value));
	 $req .= "&$key=$value";
	}

	// post back to PayPal system to validate //
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Host: www.sandbox.paypal.com\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);

	// assign posted variables to local variables //
	$item_name = $_POST['item_name'];
	$item_number = $_POST['item_number'];
	$payment_status = $_POST['payment_status'];
	$payment_amount = $_POST['mc_gross'];
	$payment_currency = $_POST['mc_currency'];
	$txnId = $_POST['txn_id'];
	$receiverEmail = $_POST['receiver_email'];
	$payerEmail = $_POST['payer_email'];
	$queryID = $_POST['custom'];
	if (!$fp) {

	} 
	else {
		fputs ($fp, $header . $req);
		while (!feof($fp)) {
			$res = $res . '\n' . fgets ($fp, 1024);
		}
		if (strcmp ($res, "VERIFIED") == 0) {
			if ($payment_status=='Completed') {
			//if (mysql_num_rows($txnIdCheck) !=1) {

				// enter your email address associated with your paypal account here // 
				if ($receiverEmail=='njitshpe-facilitator@gmail.com') { 
					$sql = "SELECT * FROM `queries` WHERE `queryID` = '{$queryID}';";
					$row = mysql_query($sql);
					$result = mysql_fetch_array($row);
					$sql2=$result['text'];
					$blah=$sql2;
					if(!mysql_query($sql2)){
						echo "Error: " . mysql_error();
					}
					//Make email unique in Home form. Make new user userID into session variable
				}
				/* when a new premium member makes payment paypal will update our database. The txn_id from paypal, members email address, date of payment and members id we gave them when they joined our site will be inserted into the log table. At the same time the memberAdmin table for the member will be updated by adding a '1' to premium and the date of payment so the new premium member will have access to premium areas of your site. */

				//Check if verified is launced          
				//$log_query_2 = mysql_query("INSERT INTO `log` VALUES (' ','yes','yes','yes','yes')");      

				//$log_query = mysql_query("INSERT INTO `log` VALUES (' ','".intval($id)."','".$txnId."','".$payerEmail."', now())");                   
			
				//$update_premium = mysql_query("UPDATE `memberAdmin` SET `premium`=1, `premiumDate`=now() WHERE `id`=".intval($id)."");    
			}       
			//}
		}
		
		else if (strcmp ($res, "INVALID") == 0) {         
		//Check if invalid is launced
		//$log_query_2 = mysql_query("INSERT INTO `log` VALUES (' ','no','no','no', 'no')");  
		}
	}
	$log_query_pre = mysql_query("INSERT INTO `log` VALUES (' ','$receiverEmail','$payment_status','{$res}', 'yes')"); 
	fclose ($fp);
?>