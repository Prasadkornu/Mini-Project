<?php
include("includes/config.php");
$dname=$_POST["dname"];
$mobile=(int)$_POST["mobile"];
$spec=$_POST["spec"];
$file=$_FILES['image'];
$file_name=$file['name'];
move_uploaded_file($file['tmp_name'], "images/".$file_name);
	$query="INSERT INTO doctor (`name`, `mobile`,`photo`, `specilization`)  VALUES('$dname','$mobile','$file_name','$spec')";
	$result=mysqli_query($con,$query);

	echo '<script>alert("Sucessfull")</script>';
	//header("Location:hms.html");

?>