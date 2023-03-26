 <?php 
include("includes/config.php");
session_start();
$id=$_SESSION['id'];
$query="SELECT * FROM appointment WHERE id='$id';";
$result=mysqli_query($con,$query);
  ?>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="dash.css">
     <link rel="stylesheet" type="text/css" href=" Appoint.css">
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
      <a href="dash.html" class="active">

        <span>Student Dashboard</span>
      
      </a>
      <a  href="Appoint1.html">
    <span > Appointment</span>
      </a>
      <a href=" doctor2.php" >
     
        <span>Doctors Availabiltiy</span>
      </a>
      <a style="background-color: #b93632;"  href="history.php">
       
        <span>History</span>


      </a>
      <a href="hms.html">
       
        <span>LOGOUT</span>


      </a>
    </div>
    <div id="content" style="position: relative; top: 150px; right: 200px;">
       <table class="responstable">
  <tr>
    <th style=" width: 100px;">Id</th>
    <th data-th="Driver details"><span> Name</span></th>
    <th  style=" width: 100px;">Gender</th>
    <th style=" width: 100px;">Mobile </th>
    <th style=" width: 100px;">Problem</th>
    <th style=" width: 200px;">prescription</th>
    <th style=" width: 200px;">Visit Date</th>
  
  </tr>
      <?php
        while($temp=$result->fetch_assoc())
        { 
        ?>  
  <tr>
    <td style=" width: 70px;"><?php echo $temp['id'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['name'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['gender'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['mobile'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['problem'] ?></td>
    <td style=" width: 100px;"><?php echo $temp['presc'] ?></td>
    <td style=" width: 500px;"><?php echo $temp['date'] ?></td>

  </tr>
        <?php
        }
      ?>
      </table> 
    </div>
    </div>
  </div>
  
</body>
</html>