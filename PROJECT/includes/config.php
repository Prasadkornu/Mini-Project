<?php
$host="localhost";
$user="root";
$pass="";
$db="hospital";
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
	echo "Success";
}
else
{
	echo "Failed to connect";
}

?>