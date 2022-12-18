<?php
session_start();
define("IN_CODE",1);
include 'config.php';
$get=$_GET['ID'];
$idd="";
if($get!=""){
	$_SESSION['get']=$get;
}

if(isset($_POST['submit'])) {
    if(isset($_SESSION['userID'])){
$ID=$_SESSION['userID'];
$sql1="insert into likeList (propertyID,userID)values(".$_SESSION['get'].",".$ID.")";
//echo $sql1;
if(mysqli_query($con,$sql1)){ 
echo '<script>alert("This House is Added to your like list")</script>';
}

}//session if


if(!(isset($_SESSION['userID']))){
	header("Location: signin.php");
}





}//submit if



?>
<style>
	
	.popup{
    background: rgba(245, 245, 245, 0.3);
    width: 100%;
    height: 100%;
    position: absolute;
    border=
    top: 0;
    display: none;
    justify-content: center;
    align-items: center;
}

.popup_overlay {
        	align-content: center;
	align-items: center;

	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 99; /* Sit on top */
	left: 0;
	right:0;
	top: 0;
	bottom:0;
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,3); /* Fallback color */
	background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}
.popup-content{
    	align-items: center;

    height: 400px;
    width: 700px;
    	align-content: center;

    background: #D2D2D2;
    padding: 20px;
    border-radius: 5px;
    position: relative;
	border: 4mm ridge rgba(211, 220, 50, .6);
}



.close{
    position: absolute;
    top: -15px;
    right: -15px;
    background: #fff;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
    cursor: pointer;
}
	
	
	
	
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
		<form action="details.php" method="post">
			
			
			
			
			
	<div data-type="Text" data-name="Price Range " class="Price_Range__Class">
		<span>Adding to your like list requires logging in</span>
	</div>
	<div data-type="Text" data-name="Bedrooms" class="Bedrooms_Class">
		<span></span>
	</div>
	<div data-type="Text" data-name="Bathrooms" class="Bathrooms_Class">
		<span><input type="submit" value="Add to my Like List" class="submitButton" name="submit"></span>
	</div>
			
	<div data-type="Text" data-name="City" class="City_Class">
		<span></span>
	</div>
	<div data-type="Text" data-name="State" class="State_Class">
		<span><a href='search.php'>Back</a></span>
	</div>
	
	<div data-type="Text" data-name="City" class="searchClass">
		<span></span>
	</div>
	
	
	</form>
	
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
     	 $idd=$row['userID'];

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
	 echo $idd;
	 echo "  *".$row1['name'];
    
 }//end of while
	//////////////
	 $sql4a="select * from Agent where AgentID=".$idd; 
	 	$res4a=mysqli_query($con,$sql4a);
 while($row2a= mysqli_fetch_array($res4a)){ 
	echo"<li><a href='#' id='sendEmail'>Contact the Agent</a><input type='hidden' id='hidden' value='".$row2a['email']."'>";

 }
	
	
	///////////////////////
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
<?php }//while

	
	?>
                           <div class="popup" id="popup" style="display:none">
                            <div class="popup-content">
                               <input type="text" name="to" id='to' required  placeholder="To" class="Username_Class2"><br><br>
                             <input type="text" name="subject"  id='subject' required  placeholder="Subject"  class="Username_Class2" ><br><br>
							<textarea name="body"  id="body" rows="10" cols="70" required  placeholder="insert your message here" ></textarea><br><br>
								<input type="submit" id="sendEB" value="Send Email" class="submitButton">
							
                                <button id="close" class="submitButton">close</button> 
                            </div>
                        </div>
	
	
	</div>
	
	
	

</div>
	

</body>
	<script>
	///////////////////////////send email/////////////
$(document).ready(function(){
  $("#sendEmail").click(function(){
	 	  document.getElementById('to').value=document.getElementById('hidden').value;
 	  
    $("#popup").css("display", "flex");
				 
			 
  });

	});
	//////////////////
	$(document).ready(function(){
$("#sendEB").click(function(){
	 
var to1=document.getElementById('to').value;
var subject1=document.getElementById('subject').value;
var body1=document.getElementById('body').value;


				$.ajax({
					url: "email.php",
					type: "POST",
					dataType: 'text',

					       // data:'userID='+userID +'&username='+username +'&avgvalue='+avgvalue +'&estvalue='+estvalue,

					data: {
						to:to1,
						subject:subject1,
						body: body1
						  },

					success: function(response){
						var answer = response;
						alert(answer);
						console.log(answer);
						
					},
					error: function(response) {
                        alert("error");
                    }
					
					
					
			});
			});
	});
///////////
	$(document).ready(function(){
  $("#close").click(function(){
    $("#popup").hide();
  });

	});
	
	
	</script>
</html>