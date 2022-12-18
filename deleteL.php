
text/x-generic deleteP.php ( PHP script text )
<?php
session_start();  
if(isset($_SESSION['userID'])){
    define("IN_CODE",1);
  include 'config.php';
$ID=$_SESSION['userID'];
	$id=$_GET['link'];
	$sql="delete from likeList where propertyID=$id and userID=$ID";
	$re=mysqli_query($con,$sql);
		


	if($re){
	header("Location: user.php");
	}
	
	
	
	
	
	
}

	else{
	header("Location: index.php");

	
}