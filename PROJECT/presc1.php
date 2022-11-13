<?php
include("includes/config.php");
$id=$_POST["id"];
$presc=$_POST["presc"];
	$query="UPDATE `appointment` SET `doct`=1,`presc`='$presc' WHERE id='$id';";
	$result=mysqli_query($con,$query);
	echo '<script>alert("Prescription ADDED")</script>';
	header("Location:doctor_app.php");
?>