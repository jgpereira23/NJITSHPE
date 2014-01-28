<?php	
//MYSQL Connection
$link = mysql_connect('localhost','root','america1') or die("Unable to Connect to MYsQL");
 
//Selecting a DB
$dbname = 'shpenjit';
mysql_select_db($dbname , $link);
?>