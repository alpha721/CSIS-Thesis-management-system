<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Login</title>
    <link rel="stylesheet" href="./files/bootstrap.min.css">
    <link rel="stylesheet" href="./files/nav_styling.css">
    <link rel="stylesheet" href="./files/styling.css">
  </head>
  
  <body>
    <br><br><br><br><br>
    <div class="container-fluid">
    
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4 ">
          <div><center><h5><?php echo $_GET['msg']; ?></h5></center></div>

          <center><h2> CSIS DRC Portal</h2></center>
        </div>
        <br><br><br><br>
        <div class="col-sm-4 col-sm-offset-4 " style="border-width:2px;border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;">
          <div class="form-group"><br><br>
            <form method="POST" action="login.php" role="form" class="form-horizontal">
              
              
              <label class="control-label col-md-4 col-sm-4">Username :</label>
              <div class="container col-md-8 col-sm-8">
               <input type="text" class="form-control" required="required" name="username" id="username">
              </div>
          
              <label class="control-label col-md-4 col-sm-4">Password :</label>
              <div class="container col-md-8 col-sm-8">
                <input type="password" class="form-control" required="required" name="password" id="password">
              </div>
              <div class="col-md-4 col-md-offset-4 col-sm-offset-4"><br>
                <button name="submit" id="subbutton" class="btn btn-primary btn-block" type="submit">Submit</button>
              </div>
              <div class="col-md-2 col-md-offset-5 col-sm-offset-4">
                <br><br>
              </div>
        
            </form>
        </div>
        </div>
      </div>
  </div>
  <script src="./files/bootstrap.min.js"></script>
  </body>
</html>



<?php

require 'config.php';


if( isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "select * from login where username= '$username' and password = '$password'";// and role = '$type'";

  $result = mysqli_query($con,$sql);

  if (mysqli_num_rows($result) == 1)
  {
      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      
      header("Location: home.php");
  } 
  else
  {
      header("Location: login.php?msg=Login Failed");
  }
}

?>

