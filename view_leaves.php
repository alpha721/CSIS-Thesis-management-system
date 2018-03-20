<?php
require 'config.php';
session_start();
$sql = "select * from application";
$result = mysqli_query($con,$sql);
if( !$result)
  echo mysqli_error($con);

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
</nav>
  <br><br><br>
  <style>
  div.cell {
    background-color:#ecf0f1;
  }
  a {
    color : #2e302f;
  }
  </style>

  <center><h3 class="hidden-xs">Leaves</h3></center><br><br>

  <div class="container-fluid" style = "font-size:18px;">
  <div class = "col-md-10 col-md-offset-1">
    <div class="row" style = "font-weight:bold;">
      <div class="col-xs-2 col-md-2 cell">ID</div>
      <div class="col-xs-3 col-md-3">Name</div>
      <div class="col-xs-4 col-md-2 cell">Start</div>
      <div class="col-xs-1 col-md-2 ">End</div>
      <div class="col-xs-1 col-md-3 cell">Reason</div><br>
    </div><br>
  </div>
  <div class = "col-md-10 col-md-offset-1" id = "table">
    <?php
        while ($row = mysqli_fetch_array($result)) 
        {
            $student_id = $row['sid'];
            $start_date = $row['start'];
            $end_date = $row['end'];
            $reason = $row['reason'];


            $fetch_student_details = "select * from student where sid = '$student_id'";
            $details = mysqli_query($con,$fetch_student_details);
            while ($details_row = mysqli_fetch_array($details)) 
            {
              $student_name = $details_row['name'];
              $bits_id = $details_row['bits_id'];
            }
      ?>
           <div class="row" id = <?php $bits_id ?>>
            <div class="col-xs-2 col-md-2 cell"><?php echo "<a href = './student_details.php?id= {$student_id}'> {$bits_id} </a>"; ?></div>
            <div class="col-xs-3 col-md-3"><?php echo $student_name ?></div>
            <div class="col-xs-4 col-md-2 cell"><?php echo $start_date ?></div>
            <div class="col-xs-1 col-md-2"><?php echo $end_date ?></div>
            <div class="col-xs-1 col-md-3 cell"><?php echo $reason ?><br></div>
          </div>
      <?php  }
      ?>
  </div>
  </div>
    <script src="./files/jquery-2.1.4.min.js"></script>
    <script src="./files/bootstrap.min.js"></script>
  </body>
</html>

