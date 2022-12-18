<?php
define("IN_CODE",1);
include 'config.php';
$to="";
$subject="";
$body="";

if($_POST['to']!="") {

$to=$_REQUEST['to'];
$subject=$_REQUEST['subject'];
$body=$_REQUEST['body'];
$date=date("Y/m/d");
$body1=$date."\n".$body;
mail($to, $subject, $body1);
echo "The email was successfully sent";
	
}
else
	echo "Please Fill in the To field";
	?>