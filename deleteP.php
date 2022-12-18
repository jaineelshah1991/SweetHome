<?php
session_start();  
if(isset($_SESSION['userID'])){
    define("IN_CODE",1);
  include 'config.php';
$ID=$_SESSION['userID'];
	$id=$_GET['link'];
	$sql="delete from property where propertyID=$id";
	$re=mysqli_query($con,$sql);
		$sql2="delete from NearbyArea where propertyID=$id";
			$re2=mysqli_query($con,$sql2);


	if($re){
	header("Location: showP.php");
	}
	
	
	
	
	
	
}

	else{
	header("Location: index.php");

	
}