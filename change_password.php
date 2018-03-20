<?php

require 'config.php';

session_start();

if( isset($_POST['submit'])){
  $current_password = $_POST['password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['new_password2'];
  $username = $_SESSION["username"];

  if( $current_password == $_SESSION["password"])
  {
      if( $new_password == $confirm_password)
      {
        $sql = "UPDATE login SET password='$new_password' WHERE username= '$username'";
        $result = mysqli_query($con,$sql);
        if( $result)
        {
          $_SESSION["password"] = $new_password;
          //$_SESSION["msg"] = "password updated succesfully";
          header("Location: home.php");
        }
        else echo mysqli_error($con);

      }
      else 
      {
        echo "new password and confirm password do not match";
      }
  }
  else 
  {
    echo "cannot update password, the password entered does not match current password";
  }
  
}

?>
