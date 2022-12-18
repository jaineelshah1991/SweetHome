<?php
session_start();
define("IN_CODE",1);
include 'config.php';
$get=$_GET['ID'];
if($get!=""){
	$_SESSION['get']=$get;
}





?>
<style id="applicationStylesheet" type="text/css">
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}




	.inputForm {
	width: 110px;
	height: 10px;
	text-align: center;
	font-family: Segoe UI;
	font-style: normal;
	font-weight: normal;
	font-size: 14px;
	color: rgba(184,41,70,1);
	 padding: 10px 10px;
		background: #EEEBEB;
  border: 2px solid black;
		border-radius: 4px;
  
	 
}
	
	
	.inputForm2 {
	

	width: 150px;
    border: 2px solid black;
	border-radius: 4px;
	
		font-size: 14px;
	color: rgba(184,41,70,1);
		background: #EEEBEB;
  
	 
}

	.submitbut{

position: absolute;
overflow: visible;	
align-content: center;
	
}
.submitButton {
  display: inline-block;
  padding: 7px 10px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #A14274;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px 5px #999;
}

.submitButton:hover {background-color: #A81A4E}

.submitButton:active {
  background-color: #A81A4E;
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
</style>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web 1280 – 1</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="Web_1280___1.css"/>
<script id="applicationScript" type="text/javascript" src="Web_1280___1.js"></script>
</head>
<body>
<div id="Web_1280__1" class="Web_1280__1_Class">
	<svg data-type="Rectangle" data-name="Rectangle 2" class="Rectangle_2">
		<rect class="Rectangle_2_Class" rx="0" ry="0" x="0" y="0" width="1242" height="903">
		</rect>
	</svg>
	<svg data-type="Rectangle" data-name="Rectangle 1" class="Rectangle_1">
		<rect class="Rectangle_1_Class" rx="31" ry="31" x="0" y="0" width="1172" height="96">
		</rect>
	</svg>
	<div data-type="Text" data-name="©2022- Software Engineering 
Developer Nahla Al Hamad
Dr. Jean Chu" class="n_022-_Software_Engineering__D_Class">
		<span>©2022- Software Engineering <br/>Developer Nahla Al Hamad<br/>Dr. Jean Chu</span>
	</div>
	<div data-type="Text" data-name="Sweet Home" class="Sweet_Home_Class">
		<span>Sweet Home</span>
	</div>
	<img data-type="Rectangle" data-name="lo" class="lo_Class" src="lo.png" srcset="lo.png 1x">
		
	<div data-type="Text" data-name="Home   |   Log-in" class="Home______Log-in_Class">
		<span><a href="index.php">Home</a>   |   <a href="signin.php">Log-in</a></span>
	</div>
	<img data-type="Rectangle" data-name="AdobeStock_265107629" class="AdobeStock_265107629_Class" src="AdobeStock_265107629.png" srcset="AdobeStock_265107629.png 1x">

			
			
			
	<div data-type="Text" data-name="Price Range " class="Price_Range__Class">
		<span></span>
	</div>
	<div data-type="Text" data-name="Bedrooms" class="Bedrooms_Class">
		<span></span>
	</div>
	<div data-type="Text" data-name="Bathrooms" class="Bathrooms_Class">
		<span><a href="user.php">Go to MY Page</a></span>
	</div>
			
	<div data-type="Text" data-name="City" class="City_Class">
		<span></span>
	</div>
	<div data-type="Text" data-name="State" class="State_Class">
		<span></span>
	</div>
	
	<div data-type="Text" data-name="City" class="searchClass">
		<span></span>
	</div>
	
	
	
	
	<svg data-type="Line" data-name="Line 1" class="Line_1" viewBox="0 0 960 1">
		<path class="Line_1_Class" d="M 0 0 L 960 0">
		</path>
	</svg>
		<div data-type="Text" data-name="Home1...………….Go" class="Home1Go_Class">
<ul>
	<?php

	$sql2="select * from property where propertyID=".$_SESSION['get'] ." and status ='Available'"; 
	 	$res2=mysqli_query($con,$sql2);
 while($row= mysqli_fetch_array($res2)){
 echo "<li>". $row['address']." , ".$row['city']." , ".$row['state']." , ".$row['zipcode']."</li>";
	 
 echo "<li><font color='green'>Price : ".$row['price']."</font></li>";
 echo "<li>Number of Bedrooms : ".$row['bedrooms']."</li>";
 echo "<li>Number of Bathrooms : ".$row['bathrooms']."</li>";
 echo "<li>Mortgage Value : ".$row['value']."</li>";
 echo "<li> Space : ".$row['space']." sqft</li>";
 echo "<li> Type : ".$row['type']."</li>"; 
	}//while 
	echo "<li>Near by Area: ";
	 $sql3="select * from NearbyArea where propertyID=".$_SESSION['get']; 
	 	$res3=mysqli_query($con,$sql3);
 while($row1= mysqli_fetch_array($res3)){   
	 echo "  *".$row1['name'];
    
 }//end of while
	echo "</li></ul><br>";
	 $sql4="select * from propertyImages where propertyID=".$_SESSION['get']; 
	 	$res4=mysqli_query($con,$sql4);
 while($row2= mysqli_fetch_array($res4)){    
	    ?>
	
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="<?php echo $row2['path']; ?>">
      <img src="<?php echo $row2['path']; ?>" alt="Sweet Home" width="400" height="400"></a>
  </div>
</div>
<?php }//while ?>

	
	
	</div>
	
	
	

</div>

</body>
</html>