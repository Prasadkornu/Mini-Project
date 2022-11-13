 <?php 
include("includes/config.php");
$query="SELECT * FROM appointment WHERE doct=0;";
$result=mysqli_query($con,$query);
  ?>

  <?php
        while($temp=$result->fetch_assoc())
        {
        ?>
        <a href="student_info.php"><b><?php echo $temp['id'] ?></b></a>
        <b><?php echo $temp['name'] ?></b>
        <br>
        <?php
        }
      ?>