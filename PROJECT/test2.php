<?php
include("includes/config.php");
$id='admin';
$pass='admin';
$pass1=password_hash($pass, PASSWORD_DEFAULT);
$query="INSERT INTO `student`(`id`,  `password`) VALUES ('$id','$pass1')";
$result=mysqli_query($con,$query);
echo "hi";


?>