 <?php 
include("includes/config.php");
$date1=date("Y/m/d");
$query="SELECT * FROM appointment WHERE `date`='$date1' AND doct=1;";
$result=mysqli_query($con,$query);
  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="table.css">
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
      <a  href="doctor.html" >
        
        <span>Doctor Dashboard</span>
      
      </a>
      <a href="doctor_app.php">
    <span> <button style="cursor: pointer;" onclick="appoint()">Appointment list</button></span>
      </a>
      <a style="background-color: #b93632;" href="phistory.php">
       
        <span> patient History</span>
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
  </tr>
      <?php
        while($temp=$result->fetch_assoc())
        { 
        ?>  
  <tr>
    <td style=" width: 70px;"><?php echo $temp['id'] ?></a></td>
    <td style=" width: 100px;"><?php echo $temp['name'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['gender'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['mobile'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['problem'] ?></td>
  </tr>
        <?php
        }
      ?>
      </table>
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