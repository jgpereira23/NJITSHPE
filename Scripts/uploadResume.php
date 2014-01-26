<?php
session_start();
require("connect.php");

//$_SERVER["DOCUMENT_ROOT"]='/afs/cad/web/ucs/html';

//What file extensions are allowed to upload
//$allowedExts = array("gif", "jpeg", "jpg", "png");
//$temp = explode(".", $_FILES["resumeLink"]["name"]);
//$extension = end($temp);

//check the file extension
//Creates a tmp copy of file

$fname = strtolower($extension);

$sql="SELECT * FROM User WHERE userID={$_SESSION['userID']}";
$row=mysql_query($sql);
$result = mysql_fetch_array($row);
if($result['middleName']!=''){
	$fname = $result['firstName']."-". $result['middleName']. "-".$result['lastName'];
}
else{
	$fname = $result['firstName']."-".$result['lastName'];
}

/*if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 20000000)
&& in_array($fname, $allowedExts))
  {*/
	if($_FILES["resumeLink"]['error'] != UPLOAD_ERR_OK){
		if ($_FILES["resumeLink"]["error"] > 0)
		{
			echo "Return Code: " . "<br>";
		}
		else
		{
			//Saving the tmp copy of the file into specified location
			/*if (file_exists("uploads/". $fname))
			{
			  echo $_FILES["file"]["name"] . " already exists."."<br>";
			}
			else
			{*/
				//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				//echo "Type: " . $_FILES["file"]["type"] . "<br>";
				//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			move_uploaded_file($_FILES["resumeLink"]["tmp_name"],"uploads/". $fname);
				//echo "Stored in: " . "C:/wamp/www/Soshul/upload/" . $_FILES["file"]["name"]."<br>";
				//adding picture into photo table in phpMyAdmin
			$sql = "UPDATE user
						SET resumeLink='{$fname}.pdf'
						WHERE userID='{$_SESSION[userID]}';";
			if(!mysql_query($sql)){
				echo"Error: ". mysql_error();
			}
			else{
				echo "1 photo added into the database table photo";
			}
				
				
			
		}
	}
  //}
	//else
  //{
  //echo "Invalid file type, needs to be a photo.";
  //}

//create dynamic html table respectful to the data in photo
//end goal to create Photo grid
  

?>