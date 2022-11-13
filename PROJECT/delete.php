<?php
include("includes/config.php");
$id=$_POST["id"];
	$query="UPDATE appointment set pharm=1 WHERE id='$id';";
	$result=mysqli_query($con,$query);
	header("Location:pharm_patient.php");
?>