<?php
$error=$fName=$lName=$email=$tel=$password=$cPassword=$type='';
$flag=0;
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}
if(isset($_POST["submit"])){
define("IN_CODE",1);
include 'config.php';
$fName=test_input($_POST['fName']);
$lName=test_input($_POST['lName']);
$tel=test_input($_POST['tel']);	
$email=test_input($_POST['email']);	
$cPassword=test_input($_POST['cPassword']);
$type=test_input($_POST['type']);
$password=test_input($_POST['password']);
if(!preg_match("/^[a-zA-Z-' -]{2,26}/",$fName)){
$error = "*First Name is invalid<br>";
$flag=1;
}
	/////////////////////
if(!preg_match("/^[a-zA-Z-' -]{2,26}/",$lName)){
$error =$error. "*Last Name is invalid<br>";
$flag=1;
}
	
//////////////////////////////////////////////////////

if(preg_match("/[0-9]{10}/", $tel) === 0){
$error = $error."*Phone number is invalid<br>";
$flag=1;
}
	///////////////////////////////////////////////////

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$error = $error. "*Invalid email format<br>";
$flag=1;
}
///////////////////////////////////////////////		
if(preg_match("/[0-9A-Za-z!@#$%]{8,20}/", $password) === 0) {
$error="*Password is invalid";
$flag=1;
}
////////////////////////////////////////////////
if($password != $cPassword) {
$error="*Passwords are not matching<br>";
$flag=1;
}

///////////////////////////////////////////////	
if($flag!=1){
	$query="";
if($type=="user"){
$query="insert into User(FName,LName,PhoneNumber,email)values('$fName','$lName','$tel','$email')";
$query_run=mysqli_query($con,$query);
if($query_run){
$sqlID="select max(UserID)from User where email='$email' ";
$result=mysqli_query($con,$sqlID);
$last_id = mysqli_fetch_array($result, MYSQLI_NUM);

$query2="insert into login(username,password,type,userID)values('$email','$password','user',$last_id[0])";
$query_run2=mysqli_query($con,$query2);

if($query_run2){header('Location:user.php');}
}



}
////////
elseif($type=="agent"){
$query="insert into Agent(FName,LName,PhoneNumber,email)values('$fName','$lName','$tel','$email')";
$query_run=mysqli_query($con,$query);
if($query_run){
$sqlID="select max(AgentID)from Agent where email='$email' ";
$result=mysqli_query($con,$sqlID);
$last_id = mysqli_fetch_array($result, MYSQLI_NUM);

$query2="insert into login(username,password,type,userID)values('$email','$password','agent',$last_id[0])";
$query_run2=mysqli_query($con,$query2);

if($query_run2){header('Location:agent.php');}
}


	
}	
	
}//flag
}//first if
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web 1280 – 1</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="CSS/signup.css"/>
<script id="applicationScript" type="text/javascript" src="Js/signup.js"></script>
</head>
<body>
s
<div id="Web_1280__1" class="Web_1280__1_Class">
	<svg data-type="Rectangle" data-name="Rectangle 2" class="Rectangle_2">
		<rect class="Rectangle_2_Class" rx="0" ry="0" x="0" y="0" width="1217" height="683">
		</rect>
	</svg>
	<svg data-type="Rectangle" data-name="Rectangle 1" class="Rectangle_1">
		<rect class="Rectangle_1_Class" rx="31" ry="31" x="0" y="0" width="1172" height="96">
		</rect>
	</svg>
	<img data-type="Rectangle" data-name="AdobeStock_310068266" class="AdobeStock_310068266_Class" src="image/AdobeStock_310068266.png" srcset="image/AdobeStock_310068266.png 1x, image/AdobeStock_310068266@2x.png 2x">
		
	<div data-type="Text" data-name="©2022- Software Engineering 
Developer Nahla Al Hamad
Dr. Jean Chu" class="n_022-_Software_Engineering__D_Class">
		<span>©2022- Software Engineering <br/>Developer Nahla Al Hamad<br/>Dr. Jean Chu</span>
	</div>
	<div data-type="Text" data-name="Sweet Home" class="Sweet_Home_Class">
		<span>Sweet Home</span>
	</div>
	<img data-type="Rectangle" data-name="lo" class="lo_Class" src="image/lo.png" srcset="image/lo.png 1x, image/lo@2x.png 2x">
		
	<svg data-type="Rectangle" data-name="Rectangle 5" class="Rectangle_5">
		<rect class="Rectangle_5_Class" rx="31" ry="31" x="0" y="0" width="714" height="442">
		</rect>
	</svg>
	<div data-type="Text" data-name="Sign up" class="Sign_up_Class">
		<span>Sign up</span>
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_Class">
		<span>First Name</span>
	</div>
	<form action="signup.php" method="post">
	<div data-type="Text" data-name="First Name" class="First_Name_p_Class">
		<span><input type="text" name="fName" class="inputsignup" required placeholder="2-26 digit of alphapet,white Space,',-"></span>
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_q_Class">
		<span><input type="text" name="lName" class="inputsignup" required placeholder="2-26 digit of alphapet,white Space,',-"></span>
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_r_Class">
		<span><input name="tel" type="tel" required class="inputsignup" maxlength="10" placeholder="10 digits of Numbers"></span>
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_s_Class">
		<span><input type="email" name="email" class="inputsignup" required placeholder="example:name@gmail.com"></span>
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_t_Class">
		<span><input type="password" name="password" class="inputsignup" required placeholder="8-20 digit of Numbers,Character,!,#,%">
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_u_Class">
		<span><input type="password" name="cPassword" class="inputsignup" required></span>
	</div>
	<div class="First_Name_v_ClassRadio">
		<p>
		  <label>
		    <input type="radio" name="type" value="agent" required>
		    </label>Real Estate Agent
		 
		  <label>
		    <input type="radio" name="type" value="user"  required>
		    House Seeker</label>
		  
	  </p>
		<span></span>
	</div>
	<div data-type="Text" data-name="First Name" class="First_Name_w_Class">
		<span><input type="submit" name="submit" value="Submit" class="submitButton" required></span>
	</div>
		</form>
		<div class="errorg">
		<p><?php echo $error;?></p>
	</div>
	<div data-type="Text" data-name="Last Name" class="Last_Name_Class">
		<span>Last Name</span>
	</div>
	<div data-type="Text" data-name="Email" class="Email_Class">
		<span>Email</span>
	</div>
	<div data-type="Text" data-name="Phone Number" class="Phone_Number_Class">
		<span>Phone Number</span>
	</div>
	<div data-type="Text" data-name="Password" class="Password_Class">
		<span>Password</span>
	</div>
	<div data-type="Text" data-name="Confirm Password:" class="Confirm_Password_Class">
		<span>Confirm Password</span>
	</div>
	<div data-type="Text" data-name="Are you?" class="Are_you_Class">
		<span>Are you?</span>
	</div>
		
	<svg data-type="Line" data-name="Line 1" class="Line_1" viewBox="0 0 671 1">
		<path class="Line_1_Class" d="M 0 0 L 671 0">
		</path>
	</svg>
</div>
</body>
</html>