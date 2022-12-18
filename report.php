<?php
session_start(); 
define("IN_CODE",1);
include 'config.php';
if(isset($_SESSION['userID'])){
$ID=$_SESSION['userID'];
$address="";
$price="";
$status="";
?>
<!DOCTYPE html>
<style id="applicationStylesheet" type="text/css">








	.inputForm {
	

	width: 280px;
	height: 10px;
	text-align: left;
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
	

	width: 280px;
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
  padding: 6px 20px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px 5px #999;
}

.submitButton:hover {background-color: #3e8e41}

.submitButton:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web 1280 – 1</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="CSS/user.css"/>
<script id="applicationScript" type="text/javascript" src="Js/user.js"></script>
</head>
<body>
<div id="Web_1280__1" class="Web_1280__1_Class">
	<svg data-type="Rectangle" data-name="Rectangle 2" class="Rectangle_2">
		<rect class="Rectangle_2_Class" rx="0" ry="0" x="0" y="0" width="1217" height="683">
		</rect>
	</svg>
	<svg data-type="Rectangle" data-name="Rectangle 1" class="Rectangle_1">
		<rect class="Rectangle_1_Class" rx="31" ry="31" x="0" y="0" width="1172" height="96">
		</rect>
	</svg>
	<img data-type="Rectangle" data-name="AdobeStock_310434732" class="AdobeStock_310434732_Class" src="image/AdobeStock_310434732.png" srcset="image/AdobeStock_310434732.png 1x, image/AdobeStock_310434732@2x.png 2x">
		
	<div data-type="Text" data-name="©2022- Software Engineering 
Developer Nahla Al Hamad
Dr. Jean Chu" class="n_022-_Software_Engineering__D_Class">
		<span>©2022- Software Engineering <br/>Developer Nahla Al Hamad<br/>Dr. Jean Chu</span>
	</div>
	<div data-type="Text" data-name="Sweet Home" class="Sweet_Home_Class">
		<span>Sweet Home</span>
	</div>
	<img data-type="Rectangle" data-name="lo" class="lo_Class" src="image/lo.png" srcset="image/lo.png 1x, image/lo@2x.png 2x">
		
	<div data-type="Text" data-name="Home   |   Log-out" class="Home______Log-out_Class">
		<span><a href="index.php">Home</a>   |   <a href="logout.php">Log-out</a></span>
	</div>
	<svg data-type="Rectangle" data-name="Rectangle 7" class="Rectangle_7">
		<rect class="Rectangle_7_Class" rx="43" ry="43" x="0" y="0" width="1144" height="439">
		</rect>
	</svg>
	<div data-type="Text" data-name="Welcome " class="Welcome__Class">
		<span>Welcome Agent </span>
	</div>
	<div data-type="Text" data-name="My Like List" class="My_Like_List_Class">
		<span>My Report Page</span>
	</div>
	<svg data-type="Line" data-name="Line 1" class="Line_1" viewBox="0 0 960 1">
		<path class="Line_1_Class" d="M 0 0 L 960 0">
		</path>
	</svg>
	<div data-type="Text" data-name="Add Property ..………….Go" class="Home1Go_Class">
		<span>
		
			
			
			
			
			
	
	<form action="report.php" method="post">
		
	Status  <select name="status" required class="inputForm2">
				<option value="Available">Available</option>
				<option value="Foreclosure">Foreclosure </option>
                <option value="Sold">Sold</option>
             <option value="Rented">Rented</option></select>
			<input type="submit" name="submit" value="Show" class="submitButton"><br></form>
			<br>
			
			
			
			<?php 
	if(isset($_POST['submit'])) {
    $status=$_POST["status"];
	$sql="select * from property where status='$status' and userID=$ID";
	$res=mysqli_query($con,$sql);
	if (mysqli_num_rows($res) > 0) {
		 echo "<table border='1' cellpadding='6' ><tr><th>Address</th> <th>Price</th></tr>";
	  while($row= mysqli_fetch_array($res)){
		  $address=$row['address'].",".$row['city'].",".$row['state'].",".$row['zipcode']."................    ";
		  $price="<font color='green'>".$row['price']."</font>";
echo"<tr><td>$address</td><td>$price</td></tr>";
	  }
			
		echo"</table>";	
	}
	else{ echo "No Records are shown for this option ";}
	}//end of if submit form
			
			?>
	
			
			
			
			
			


			

			
			
			
			
			
			
	
			
			
			
			
			
		
		
		
		</span>
	</div>
</div>
</body>
</html>
			<?php 	  }//end of session
else
	header("Location: index.php");


?>
