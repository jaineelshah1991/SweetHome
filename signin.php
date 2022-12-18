<?php
			 $error="";	
			 if(isset($_POST["submit"])){
				define("IN_CODE",1);
                include 'config.php';

                $username=strtolower($_POST['username']);
                $password=$_POST['password'];
                if(empty($username) or empty($password))
                {$error="<font color='red'><b>ERROR! All fields are required!</b> </font>";}
				else{ 
				 ///////////
				 $sql = "SELECT * FROM login WHERE LOWER(username) = '$username' and password='$password'";
                 $result = mysqli_query($con,$sql) ;
                 $numrows = mysqli_num_rows($result);
if ($numrows == 0) { $error= "<font color='red' aligh='center'><b>ERROR! Invalid username or password</b></font>"; }
else { 
while($row=mysqli_fetch_array($result))  
{  
session_start();  
$_SESSION['userID']=$row['userID'];
$_SESSION['type']=$row['type'];
if($row['type']=='agent'){
header("Location: agent.php");
	exit();}
elseif($row['type']=='user'){
header("Location: user.php");
	exit();}

}
				 
				 //////////
				}
			 }
			 }
                
              
               	?>
			
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web 1280 – 1</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="CSS/Web_1280___1.css"/>
<script id="applicationScript" type="text/javascript" src="Js/Web_1280___1.js"></script>
</head>
<body>
<div id="Web_1280__1" class="Web_1280__1_Class">
	<svg data-type="Rectangle" data-name="Rectangle 2" class="Rectangle_2">
		<rect class="Rectangle_2_Class" rx="0" ry="0" x="0" y="0" width="1245" height="683">
		</rect>
	</svg>
	<svg data-type="Rectangle" data-name="Rectangle 1" class="Rectangle_1">
		<rect class="Rectangle_1_Class" rx="31" ry="31" x="0" y="0" width="1172" height="96">
		</rect>
	</svg>
	<img style="position:absolute;width:599px;height:442px;left:54px;top:100px;overflow:visible;" data-type="Rectangle" data-name="AdobeStock_392143036" class="AdobeStock_392143036_Class" src="image/AdobeStock_392143036.png" srcset="image/AdobeStock_392143036.png 1x,image/AdobeStock_392143036@2x.png 2x">
		
	<svg data-type="Rectangle" data-name="Rectangle 5" class="Rectangle_5">
		<rect class="Rectangle_5_Class" rx="31" ry="31" x="0" y="0" width="555" height="442">
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
	<img style="position:absolute;width:88px;height:64px;left:72px;top:27px;overflow:visible;" data-type="Rectangle" data-name="lo" class="lo_Class" src="image/lo.png" srcset="image/lo.png 1x, image/lo@2x.png 2x">
	<form method="Post" action="signin.php">
	<div>
		<div class='parent'>
			<div class="msg"><p><?php echo $error; ?></p></div>

	<div data-type="Text" data-name="Username:" class="Username_Class">
		<span>Username</span></div>
		<div >
		<span><input type="email" class="Username_Class2" required name="username"></span>
		</div>
		
	</div>
				<div class='parent'>

	<div data-type="Text" data-name="Password:" class="Password_Class">
		<span>Password</span></div>
					
					<div><span><input type="password" class="Password_Class2" required name="password"></span><div class"submitbut">
			<span><input type="submit" name="submit" value="Sign in"></span>
			</div></div>
					
					
					
					<div class='parent'><div class="submitbut">
			<span><input type="submit" name="submit" value="Sign in" class="submitButton"></span>
			</div>

	</div>
		
					
		
		
		
		
		
		</div>
	</form>
	<div data-type="Text" data-name="Log in" class="Log_in_Class">
		<span>Log in</span>
	</div>
	<svg data-type="Line" data-name="Line 1" class="Line_1" viewBox="0 0 453 1">
		<path class="Line_1_Class" d="M 0 0 L 453 0">
		</path>
	</svg>
	<svg data-type="Line" data-name="Line 2" class="Line_2" viewBox="0 0 453 1">
		<path class="Line_2_Class" d="M 0 0 L 453 0">
		</path>
	</svg>
	<div data-type="Text" data-name="Don't have an account yet? Sign Up" class="Dont_have_an_account_yet_Sign__Class">
		<span>Don't have an account yet? <a href="signup.php">Sign Up</a></span>
	</div>
</div>
</body>
</html>