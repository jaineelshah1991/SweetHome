<?php
session_start();
define("IN_CODE",1);
include 'config.php';
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}

if(isset($_POST['submit'])) {
$city=test_input($_POST["city"]);
$_SESSION['state']=$_POST["state"];
$_SESSION['city']=$city;
}

else if(isset($_POST['search'])){
 $city1=test_input($_POST["city"]);
$_SESSION['state']=$_POST["state"];
$_SESSION['city']=$city1;  
}

?>
<style id="applicationStylesheet" type="text/css">
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
		<form action="search.php" method="post">
	<div data-type="Text" data-name="Price Range " class="Price_Range__Class">
		<span>Price <input type="text" name="pricefrom"  class="inputForm" id="pricefrom" oninput="myFunction2()" placeholder="From" pattern="\d*"><input type="text" name="priceto" id="priceto" class="inputForm" placeholder="To" pattern="\d*" oninput="myFunction()"></span>
	</div>
	<div data-type="Text" data-name="Bedrooms" class="Bedrooms_Class">
		<span><input type="number" max="10" min="1" name="bedrooms"  maxlength="2" class="inputForm" placeholder="Bedrooms" pattern="\d*"></span>
	</div>
	<div data-type="Text" data-name="Bathrooms" class="Bathrooms_Class">
		<span><input type="number" max="10" min="1" name="bathrooms"  maxlength="2" class="inputForm" placeholder="Bathrooms" pattern="\d*"></span>
	</div>
			
	<div data-type="Text" data-name="City" class="City_Class">
		<span><input type="text" name="city" required class="inputForm" placeholder="City" value="<?php echo $_SESSION['city']; ?>"></span>
	</div>
	<div data-type="Text" data-name="State" class="State_Class">
		<span><select name="state" required class="inputForm2">
	<option value="AL"<?php if($_SESSION['state']=='AL'){echo "selected";} ?>>Alabama</option>
	<option value="AK"<?php if($_SESSION['state']=='AK'){echo "selected";} ?>>Alaska</option>
	<option value="AZ"<?php if($_SESSION['state']=='AZ'){echo "selected";} ?>>Arizona</option>
	<option value="AR" <?php if($_SESSION['state']=='AR'){echo "selected";} ?>>Arkansas</option>
	<option value="CA" <?php if($_SESSION['state']=='CA'){echo "selected";} ?>>California</option>
	<option value="CO" <?php if($_SESSION['state']=='CO'){echo "selected";} ?>>Colorado</option>
	<option value="CT" <?php if($_SESSION['state']=='CT'){echo "selected";} ?>>Connecticut</option>
	<option value="DE"<?php if($_SESSION['state']=='DE'){echo "selected";} ?>>Delaware</option>
	<option value="DC"<?php if($_SESSION['state']=='DC'){echo "selected";} ?>>District Of Columbia</option>
	
	<option value="FL" <?php if($_SESSION['state']=='FL'){echo "selected";} ?>>Florida</option>
	<option value="GA" <?php if($_SESSION['state']=='GA'){echo "selected";} ?>>Georgia</option>
	<option value="HI"<?php if($_SESSION['state']=='HI'){echo "selected";} ?>>Hawaii</option>
	<option value="ID" <?php if($_SESSION['state']=='ID'){echo "selected";} ?>>Idaho</option>
	<option value="IL" <?php if($_SESSION['state']=='IL'){echo "selected";} ?>>Illinois</option>
	<option value="IN" <?php if($_SESSION['state']=='IN'){echo "selected";} ?>>Indiana</option>
	<option value="IA" <?php if($_SESSION['state']=='IA'){echo "selected";} ?>>Iowa</option>
	<option value="KS" <?php if($_SESSION['state']=='KS'){echo "selected";} ?>>Kansas</option>
	<option value="KY" <?php if($_SESSION['state']=='KY'){echo "selected";} ?>>Kentucky</option>
	<option value="LA" <?php if($_SESSION['state']=='LA'){echo "selected";} ?>>Louisiana</option>
	<option value="ME" <?php if($_SESSION['state']=='ME'){echo "selected";} ?>>Maine</option>
	<option value="MD" <?php if($_SESSION['state']=='MD'){echo "selected";} ?>>Maryland</option>
	<option value="MA" <?php if($_SESSION['state']=='MA'){echo "selected";} ?>>Massachusetts</option>
	<option value="MI" <?php if($_SESSION['state']=='MI'){echo "selected";} ?>>Michigan</option>
	<option value="MN" <?php if($_SESSION['state']=='MN'){echo "selected";} ?>>Minnesota</option>
	<option value="MS" <?php if($_SESSION['state']=='MS'){echo "selected";} ?>>Mississippi</option>
	<option value="MO" <?php if($_SESSION['state']=='MO'){echo "selected";} ?>>Missouri</option>
	<option value="MT" <?php if($_SESSION['state']=='MT'){echo "selected";} ?>>Montana</option>
	<option value="NE" <?php if($_SESSION['state']=='NE'){echo "selected";} ?>>Nebraska</option>
	<option value="NV" <?php if($_SESSION['state']=='NV'){echo "selected";} ?>>Nevada</option>
	<option value="NH" <?php if($_SESSION['state']=='NH'){echo "selected";} ?>>New Hampshire</option>
	<option value="NJ" <?php if($_SESSION['state']=='NJ'){echo "selected";} ?>>New Jersey</option>
	<option value="NM"<?php if($_SESSION['state']=='NM'){echo "selected";} ?>>New Mexico</option>
	<option value="NY"<?php if($_SESSION['state']=='NY'){echo "selected";} ?>>New York</option>
	<option value="NC"<?php if($_SESSION['state']=='NC'){echo "selected";} ?>>North Carolina</option>
	<option value="ND"<?php if($_SESSION['state']=='ND'){echo "selected";} ?>>North Dakota</option>
	<option value="OH"<?php if($_SESSION['state']=='OH'){echo "selected";} ?>>Ohio</option>
	<option value="OK"<?php if($_SESSION['state']=='OK'){echo "selected";} ?>>Oklahoma</option>
	<option value="OR"<?php if($_SESSION['state']=='OR'){echo "selected";} ?>>Oregon</option>
	<option value="PA"<?php if($_SESSION['state']=='PA'){echo "selected";} ?>>Pennsylvania</option>
	<option value="RI"<?php if($_SESSION['state']=='RI'){echo "selected";} ?>>Rhode Island</option>
	<option value="SC"<?php if($_SESSION['state']=='SC'){echo "selected";} ?>>South Carolina</option>
	<option value="SD"<?php if($_SESSION['state']=='SD'){echo "selected";} ?>>South Dakota</option>
	<option value="TN"<?php if($_SESSION['state']=='TN'){echo "selected";} ?>>Tennessee</option>
	<option value="TX"<?php if($_SESSION['state']=='TX'){echo "selected";} ?>>Texas</option>
	<option value="UT"<?php if($_SESSION['state']=='UT'){echo "selected";} ?>>Utah</option>
	<option value="VT"<?php if($_SESSION['state']=='VT'){echo "selected";} ?>>Vermont</option>
	<option value="VA"<?php if($_SESSION['state']=='VA'){echo "selected";} ?>>Virginia</option>
	<option value="WA"<?php if($_SESSION['state']=='WA'){echo "selected";} ?>>Washington</option>
	<option value="WV"<?php if($_SESSION['state']=='WV'){echo "selected";} ?>>West Virginia</option>
	<option value="WI"<?php if($_SESSION['state']=='WI'){echo "selected";} ?>>Wisconsin</option>
	<option value="WY"<?php if($_SESSION['state']=='WY'){echo "selected";} ?>>Wyoming</option>
</select></span>
	</div>
	
	<div data-type="Text" data-name="City" class="searchClass">
		<span><input type="submit" value="Search" class="submitButton" name="search"></span>
	</div>
	
	
	</form>
	
	<svg data-type="Line" data-name="Line 1" class="Line_1" viewBox="0 0 960 1">
		<path class="Line_1_Class" d="M 0 0 L 960 0">
		</path>
	</svg>
		<div data-type="Text" data-name="Home1...………….Go" class="Home1Go_Class">
<ul>
	<?php
if(isset($_POST['search'])) {
    $from=$_POST['pricefrom'];
    $to=$_POST['priceto'];
    $bathrooms=$_POST['bathrooms'];
    $bedrooms=$_POST['bedrooms'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $query1="";
    $query2="";
    $query3="";
    $_SESSION['state']=$state;
    $_SESSION['city']=$city;


    
	  	     if($from!="" && $to!="") {
	         $query1= " and price between $from and $to ";
	   }
	   //////////////////////////////
	   if($bathrooms!="") {
	         $query2= " and bathrooms=$bathrooms ";
	   }
	   //////////////////////////////
	    if($bedrooms!="") {
	         $query3= " and bedrooms=$bedrooms ";
	   }
	    /////////////////////////////////
	$sql2="select * from property where status!='Sold' and state='$state' and city like'%$city%' ".$query1.$query2.$query3." ORDER BY price ASC"; 
	 	$res2=mysqli_query($con,$sql2);
 while($row= mysqli_fetch_array($res2)){
 echo "<li>". $row['address'].",".$row['zipcode'].",".$row['city'].",".$row['state'].", <font color='green'>Price=".$row['price']."</font>...<a href='details.php?ID=".$row['propertyID']."'>more</a></li>";

		
	}//while   
	    
	    
	    
	    
	}//if
	else{
	$sql="select * from property where status!='Sold' and state='".$_SESSION['state']."' and city like'%".$_SESSION['city']."%'";
	$res=mysqli_query($con,$sql);
 while($row= mysqli_fetch_array($res)){
 echo "<li>". $row['address'].",".$row['zipcode'].",".$row['city'].",".$row['state'].", <font color='green'>Price=".$row['price']."</font>...<a href='details.php?ID=".$row['propertyID']."'>more</a></li>";

		
	}//while 
	}//else
	?>
	</ul></div>
	
	
	

</div>
<script>
function myFunction() {
  var x = document.getElementById("priceto").value;
  document.getElementById("pricefrom").setAttribute("required", "");
}

function myFunction2() {
  var x = document.getElementById("pricefrom").value;
  document.getElementById("priceto").setAttribute("required", "");
}
</script>
</body>
</html>