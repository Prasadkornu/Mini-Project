<?php
include ("includes/config.php");
$id=$_POST['id'];
$pass4=$_POST['pass'];
$query="SELECT password,name FROM student where id='$id'";
$result=mysqli_query($con,$query);
session_start();
$_SESSION['id']=$id;
while($temp= $result->fetch_assoc())
{
	$dbpass=$temp["password"];
	$dbfname=$temp["name"];
}
$pass=password_verify($pass4, $dbpass);

if($pass)
{
	if($dbfname=="doctor")
	{
		header("Location:doctor.html");
	}
	else if($dbfname=="pharmacist")
	{
		header("Location:pharm.html");
	}
	else if($dbfname=="admin")
	{
		header("Location:admin.html");
	}
	else
	{
			header("Location:dash.html");

	}
}

else
{  
	echo '<script>alert("Password not matched")</script>';
	header("Location:hms.html");
	exit();
	
}
?>