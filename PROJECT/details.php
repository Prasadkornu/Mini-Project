<?php
include("includes/config.php");
$pass1="admin";
$pass=password_hash($pass1, PASSWORD_DEFAULT);
$query="INSERT INTO student(`id`,`name`, `password`) VALUES('admin','admin','$pass')";
$result=mysqli_query($con,$query);
echo "Sucess";
?>