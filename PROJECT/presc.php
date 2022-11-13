<?php
  $id=$_GET['id'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>SIGN UP </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="signup.css"> 
    <script src=""></script>
  </head>
  <body>
    <div class="head">
    <h3 style="margin-left: 80px;">ADD    <span style="color: #f1575b ;">Prescription</span></h3>
    <div class="forgot">
      <form action="presc1.php" method="POST">
      <div>
        <input  name="id" type="text" value=<?php echo $id; ?> readonly>
      </div><br>
      <div>
        <label> Prescription</label>
        <input name="presc" style="height: 180px;width: 180px; color: white;"  type="card-text" name="pass2" placeholder="">
      </div><br>
        
    </div>
        <input class="h" style="margin-top: 25px; margin-left: 100px; padding: 7px 20px; border-radius: 10px ; cursor: pointer; background-color: #f9004d;"    type="Submit" name="Sign Up">
        </form>
        </div>
  </body>
</html>

