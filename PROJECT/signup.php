<?php
include("includes/config.php");
$id=$_POST["id"];
$name=$_POST["name"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
$que=$_POST["que"];
$ans=$_POST["ans"];
$pass=password_hash($pass1, PASSWORD_DEFAULT);
if($pass1==$pass2)
{
	$query="INSERT INTO student VALUES('$id','$name','$pass','$que','$ans')";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Sign Up Sucessfull")</script>';
	header("Location:hms.html");
}
else 
{   
	echo '<script>alert("Password not matched")</script>';
	header("Location:signup.html");
}
?>