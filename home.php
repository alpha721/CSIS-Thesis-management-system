<?php
  session_start();
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
<br><br><br><br><br><br><br>
<div class="row">
  	<h2 class="text-center">CSIS DRC Portal</h2>
</div>
</div>	
<div class="text-center">
    <h2 class="text-primary">
    <?php echo "Hello, ";
          echo $_SESSION['username']; ?>
    </h2><br>
</div>
<div class="container-fluid">
			
		
<div role="tabpanel" style="padding-top: 2em;">
    <!-- Nav tabs -->
    <div class="col-md-3">
     </div>
     <!-- Tab panes -->
   <div class="col-md-9">
    <div class="tab-content">
      
              <div role="tabpanel" class="tab-pane fade in active " id="home">
              

  <script>
    $(function() {
        $('input[name="date"]').daterangepicker({
          locale: {
            format: 'DD-MM-YYYY'
          },
            singleDatePicker: true,
            showDropdowns: true
        }, 
        function(start, end, label) {
            var years = moment().diff(start, 'years');
        });
    });
  </script>
	</div><!--container-->
	<script src="./files/jquery-2.1.4.min.js"></script>
	<script src="./files/bootstrap.min.js"></script>

</body></html>

