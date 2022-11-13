<?php
include("includes/config.php");
$id=$_POST["id"];
$name=$_POST["name"];
$branch=$_POST["branch"];
$mobile=(int)$_POST["mobile"];
$gender=$_POST["gender"];
$age=(int)$_POST["age"];
$problem=$_POST["problem"];
$date1=date("Y/m/d");
	$query="INSERT INTO `appointment`(`id`, `name`, `branch`, `mobile`, `gender`, `age`, `problem`, `pharm`, `doct`,`date`) VALUES('$id','$name','$branch','$mobile','$gender','$age','$problem',0,0,'$date1');";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Appointment Successfull")</script>';
	header("Location:dash.html");   
?>