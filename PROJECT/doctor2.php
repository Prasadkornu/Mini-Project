<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" type="text/css"  href="dash.css">
     <link rel="stylesheet" type="text/css" href=" Appoint.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body style="position: flex;overflow-x: hidden">


   <div class="wrapper">
    <div class="main">
    <div class="navbar">
        
      <div class="Bord"></div>        
    <div class="sidebar">
      <a href="dash.html" style="background-color: #2c2c2c;"href="dash.html" class="active">

        <span>Student Dashboard</span>
      
      </a>
      <a  href="Appoint1.html">
    <span > Appointment</span>
      </a>
      <a  style="background-color: #b93632" href=" doctor1.php" >
     
        <span>Doctors Availabiltiy</span>
      </a>
      <a href="history.php">
       
        <span>History</span>


      </a>
      <a href="">
       
        <span>LOG OUT</span>


      </a>


    </div>
    <div id="content" style="position:relative;top:140px">
        <?php
          require 'includes/config.php';
            $query="SELECT * FROM doctor";
           $run=mysqli_query($con,$query);
          $check_doctors=mysqli_num_rows($run)>0;
 
 if($check_doctors)
 {
   while ($row=mysqli_fetch_array($run))
    {
      
    ?>

      <div  class="container py-5">
  <div  class ="row mt-4">
    <div class="col-md-6">
      <div style="position: relative;left:300px" class="card">
        <div class="card-body">
          <img style="height: 200px; width: 200px;" src="images/<?php echo $row['photo']?>" class="card-img-top" alt="images">
         <h2 class="card-title"> <?php   echo $row['name']; ?></h2>
          <h3 class="card-title"> <?php   echo $row['specilization']; ?></h3>
         <p class="card-text">  <?php   echo $row['mobile']; ?></p>
          
        </div>
      </div> 
    </div>
 
   <?php
      
   }
   
 }
 else
 {
  echo "no record";
 }

?>

 </div>
  </div>
    </div>
    </div>
  </div>
  </div>
</body>
</html>