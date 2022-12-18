<?php   
session_start();  
unset($_SESSION['loginID']);
unset($_SESSION['type']); 
session_destroy();  
header("location:index.php");  
?> 