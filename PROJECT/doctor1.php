<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body style="position: relative; top: 140px;" >
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
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <img style="height: 100px; width: 100px;" src="images/<?php echo $row['photo']?>" class="card-img-top" alt="images">
         <h2 class="card-title"> <?php   echo $row['name']; ?></h2>
          <h3 class="card-title"> <?php   echo $row['specilization']; ?></h3>
           <h4 class="card-title"> <?php   echo $row['available timings']; ?></h4>
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

</body>
</html>