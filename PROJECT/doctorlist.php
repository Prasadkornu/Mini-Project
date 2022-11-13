

<!DOCTYPE html>
<html>
  <head>
    <title>ADD DOCTORS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="forgot.css"> 
    <script src=""></script>
  </head>
  <body>
    <div class="head">
    <h3 style="margin-left: 100px;">ADD<span style="color: #f1575b ;">DOCTORS</span></h3>
    <div class="forgot">
      <form action="adddoctors.php" method="POST" enctype="multipart/form-data">
      <div>
        <input type="text" name="dname" placeholder="Doctor name" >
      </div><br>
      <div>
        <input style=" padding: 10px 20px; border-radius: 25px;background: white;
 font-weight: bold;" name="mobile" type="text" placeholder=" Mobile">
      </div><br>
      <div>
        <input style=" padding: 10px 20px; border-radius: 25px;background: white;
 font-weight: bold; width: 168px;" type="file" name="image" placeholder=" " >
      </div><br>
      <div>
        <input style=" height: 80px;" type="text" name="spec" placeholder="specialization" >
      </div><br>
        
    </div>
        <input class="h" style="margin-top: 35px; margin-left: 100px; padding: 7px 20px; border-radius: 10px ; cursor: pointer; background-color: #f9004d;"    type="Submit" name="Sign Up">
        </form>
        </div>
  </body>
</html>

