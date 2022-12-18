<?php
session_start(); 
if(isset($_SESSION['userID'])){
define("IN_CODE",1);
include 'config.php';
$ID=$_SESSION['userID'];
$link=$_GET['link'];
$msg="";
if($link !=""){
$_SESSION['pID']=$link;
}
$pID=$_SESSION['pID'];
if(isset($_POST['submit'])) {
    define("IN_CODE",1);
  include 'config.php';
$price=$_POST["price"];
$value=$_POST["value"];
$status=$_POST["status"];
$sql1="update property set price=$price, value=$value, status='$status' where propertyID=".$pID;
echo $sql1;
if(mysqli_query($con,$sql1)){ 
$msg="your property is updated successfully";
}

}//if

	?>
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
  padding: 12px 40px;
  font-size: 18px;
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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Property</title>
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
		<span><a href="agent.php">My Page</a></span>
	</div>
	<svg data-type="Line" data-name="Line 1" class="Line_1" viewBox="0 0 960 1">
		<path class="Line_1_Class" d="M 0 0 L 960 0">
		</path>
	</svg>
		<div data-type="Text" data-name="Add Property ..………….Go" class="Home1Go_Class"><ul>

	
	<?php
	if($link !=""){
	$sql="select status,price,value from property where propertyID=$link";
	$res=mysqli_query($con,$sql);
	  while($row= mysqli_fetch_array($res)){
	?>
	<form action="updateP.php" method="post">
	<li>Price <input type = "text" value="<?php echo $row['price']; ?>" name='price' maxlength="10" pattern="\d.*" required class="inputForm"></li>
	<li>Mortgage Value <input type = "text" value="<?php echo $row['value']; ?>" name='value' maxlength="10" pattern="\d.*" required class="inputForm"></li>		
	<li>Status 
 <select name="status" required class="inputForm2">
				<option value="Available">Available</option>
				<option value="Foreclosure">Foreclosure </option>
                <option value="Sold">Sold</option>
             <option value="Rented">Rented</option></select>

			
			</li>		<br> 		<input type="submit" name="submit" value="Update" class="submitButton"><br></form>
			<p><font color='blue'><?php echo $msg; ?></font></p>
			
			
			
			
			<?php 
	      	 }//end of while

	  }
			
			
			else {
			$sql="select status,price,value from property where propertyID=$pID";
	$res=mysqli_query($con,$sql);
	  while($row= mysqli_fetch_array($res)){
	?>
	<form action="updateP.php" method="post">
	<li>Price <input type = "text" value="<?php echo $row['price']; ?>" name='price' maxlength="10" pattern="\d.*" required class="inputForm"></li>
	<li>Mortgage Value <input type = "text" value="<?php echo $row['value']; ?>" name='value' maxlength="10" pattern="\d.*" required class="inputForm"></li>		
	<li>Status 
 <select name="status" required class="inputForm2">
				<option value="Available">Available</option>
				<option value="Foreclosure">Foreclosure </option>
                <option value="Sold">Sold</option></select>
			
			</li>		<br> 		<input type="submit" name="submit" value="Update" class="submitButton"><br></form>
			<p><font color='blue'><?php echo $msg; ?></font></p>
			
			
			
			
			<?php 
	      	 }//end of while

	  }?>

			

			
			
			
			
			
			
	
	</ul></div>
</div>
</body>
</html>
<?php }
else{
	header("Location: index.php");

	
}
?>