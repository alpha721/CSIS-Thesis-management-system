<?php

require 'config.php';
?>


<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Add Faculty</title>
		<link rel="stylesheet" href="./files/bootstrap.min.css">
		<link rel="stylesheet" href="./files/nav_styling.css">
    <link rel="stylesheet" href="./files/styling.css">
	</head>
	
  <body id="edit">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Students <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./add_student.php">Add Student</a></li>
          <li><a href="./search_student.php">Search Student</a></li>
          <li><a href="./add_grade.html">Enter Grades</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Faculty <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./add_faculty.php">Add Faculty</a></li>
          <li><a href="./view_faculty.php">View Faculty</a></li>
        </ul>
      </li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Leave <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./leave_application.html">Add Leave</a></li>
          <li><a href="./view_leaves.php">View Leaves</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Account <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./change_password.html">Change Password</a></li>
          <li><a href="./logout.php">Logout</a></li>
        </ul>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
  </div>
</nav><br><br><br>
	  <div class="container-fluid">
        <br>  
			  <center><h1 class="hidden-xs">Add Faculty</h1></center>
        <br>

      <div class="row">
      <style>a{color:#2c3e50}</style>
        <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
        <form method="POST" action="add_faculty.php" role="form" class="form-horizontal" id = "faculty_form">
          <!--<legend class="text-primary" style="display:block;"></legend>
            <div class="form-group">
            <div class="form-group" style="border-top-style: solid;border-right-style: dotted;border-bottom-style: solid;border-left-style: solid;">-->
              <label class="control-label col-md-3 col-sm-3">Name :</label>
              <div class="container col-md-9 col-sm-9">
                <input required="required" type="text" class="form-control" name="faculty_name" id="faculty_name">
              </div>

              <label class="control-label col-md-3 col-sm-3" for="department">Department :</label>
                  <div class="container col-md-9 col-sm-9">
                    <select class="form-control" name="department" id="department" form = "faculty_form">
                    <?php
                      $sql = "select * from department";
                      $result = mysqli_query($con,$sql);
                      while( $row = mysqli_fetch_array($result))
                      {
                        $dept_id = $row['did'];
                        $dept_name = $row['dname'];

                        echo "<option value = {$dept_id}> {$dept_name} </option>";
                      }
                    ?> 
                    </select>
                  </div>
              <label class="control-label col-md-3 col-sm-3">Phone No:</label>
                <div class="container col-md-9 col-sm-9">
                  <input placeholder="10 digit No." required="required" type="text" class="form-control" name="phone" id="phone">
                </div>

                <label class="control-label col-md-3 col-sm-3">Mail ID :</label>
                <div class="container col-md-9 col-sm-9">
                  <input type="email" class="form-control" required="required" name="mail" id="mail"><br>
                </div>
        </div>
        </div>
        <div class="col-md-2 col-md-offset-5 col-sm-offset-4"><br>
              <button name="submit" id="subbutton" class="btn btn-primary btn-block" type="submit">Submit</button>
        </div>
        <div class="col-md-2 col-md-offset-5 col-sm-offset-4"><br><br>
        </div>
      </form>
		  </div>			
	  </div>

	<script src="./files/jquery-2.1.4.min.js"></script>
	<script src="./files/bootstrap.min.js"></script>
	</body>
</html>

<?php

if( isset($_POST['submit'])){
  $faculty_name = $_POST['faculty_name'];
  $department = $_POST['department'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];

  $sql = "INSERT INTO faculty (name, dept, phone, email) 
          VALUES ('$faculty_name','$department', '$phone', '$mail')";
  
  $result = mysqli_query($con,$sql);

  if ($result)
  {
    echo "update succesful";
  } 
  else
  {
      echo mysqli_error($con);
  }
}

?>
