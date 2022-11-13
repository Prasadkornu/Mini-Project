 <?php 
include("includes/config.php");
$query="SELECT * FROM appointment WHERE doct=1 AND pharm=0;";
$result=mysqli_query($con,$query);
  ?>

<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="dash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body >
    <div class="main">
    <div class="navbar">
      <div class="logo">
        <h4>RGUKT HOSPITAL MANAGEMENT SYSTEM </h4>
      </div>  
      <div class="Bord"></div>        
    <div class="sidebar">
      <a href="pharm.html" class="">
        
        <span>Chemist Dashboard</span>
      
      </a>
      <a style="background-color: #b93632;" href="">
    <span> <button onclick="appoint()">patients details</button></span>
      </a>
      <a href="medicine.php" onclick="appoint()">
     
        <span>medicines history</span>
      </a>
      <a href="hms.html">
       
        <span>LOGOUT</span>
      </a>
    </div>
    <div id="content" style="position: relative; top: 200px; right: 400px;">
  <table class="responstable">
  <tr>
    <th style=" width: 100px;">Id  Number</th>
    <th data-th="Driver details"><span>Patient Name</span></th>
    <th  style=" width: 100px;">Gender</th>
    <th style=" width: 100px;">Mobile</th>
    <th style=" width: 100px;">Problem</th>
    <th style=" width: 100px;">Prescription</th>

  </tr>
      <?php
        while($temp=$result->fetch_assoc())
        { 
        ?>  
  <tr>
    <td style=" width: 70px;"><a href="presc.php"><?php echo $temp['id'] ?></a></td>
    <td style=" width: 100px;"><?php echo $temp['name'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['gender'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['mobile'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['problem'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['presc'] ?></td>
    <td style=" width: 100px;">
    <form action="delete.php" method="POST">
      <input style=" visibility: hidden;position: absolute;" type="text" name="id" value="<?php echo $temp['id'] ?>">
      <button style="color: red;cursor: pointer;">SUBMIT</button>
    </form>
    </td>
  </tr>
        <?php
        }
      ?>
      </table>
    </div>
        <button style="background: red;cursor: pointer;" onclick="appoint()"></button>
    </div>
    </div>
  </div>
<script>
  function appoint() 
  {let t= document.getElementById('content');
   t.load("Appoint.html");
  }
</script>
    
</body>
</html>