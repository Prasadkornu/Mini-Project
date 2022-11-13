<?php
include("includes/config.php");
$id=$_POST["id"];
$ans1=$_POST["ans1"];
$que1=$_POST["que1"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
$pass3=password_hash($pass1, PASSWORD_DEFAULT);
$query="SELECT ans,que FROM student WHERE id='$id'" ;
$result=mysqli_query($con,$query);
while ($temp=$result->fetch_assoc()) {
	$ans2=$temp["ans"];
	$que2=$temp["que"];
}
if($ans1==$ans2 && $que1==$que2)
{
	if($pass1==$pass2)
	{
		$query="UPDATE student set password='$pass3' WHERE id='$id'" ;
		$result=mysqli_query($con,$query);
		echo '<script>alert("Password reset Sucessfully")</script>';
		header("Location:hms.html");
		exit();
	}
	else
	{
		echo '<script>alert("Password did not match");</script>';
		header("Location:forgot.html");
		exit();
	}
}
else
{
		
		header("Location:forgot.html");
		echo '<script>alert("Authentication failed");</script>';
		exit();
}

?>