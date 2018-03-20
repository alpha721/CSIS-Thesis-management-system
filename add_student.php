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
</nav>
<br><br><br>
      <div class="container-fluid">
          
              <center><h1 class="hidden-xs">Add Student</h1></center>
              
      <br><br><br>
      <style>a{color:#2c3e50}</style>
        <!--<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">-->
          <form method="POST" action="add_student.php" role="form" class="form-horizontal" id = "student_form" readonly>

            <div class = "col-sm-6 col-sm-offset-3">
            <legend class="text-primary" style="display:block;">Student Details</legend>
              <div class="form-group">
              <!--<div class="form-group" style="border-top-style: solid;border-right-style: dotted;border-bottom-style: solid;border-left-style: solid;">-->
            
                <label class="control-label col-md-3 col-sm-3">Name :</label>
                <div class="container col-md-9 col-sm-9">
                  <input type="text" class="form-control" required="required" name="name" id="name">
                </div>

                <label class="control-label col-md-3 col-sm-3">ID :</label>
                <div class="container col-md-9 col-sm-9">
                  <input type="text" class="form-control" name="id" id="id" required="required" placeholder="201XXXPSXXXXH">
                </div>

                <label class="control-label col-md-3 col-sm-3">Address :</label>
                <div class="container col-md-9 col-sm-9">
                  <input type="text" class="form-control" name="address" id="address" required="required">
                </div>

                <label class="control-label col-md-3 col-sm-3">Phone No:</label>
                <div class="container col-md-9 col-sm-9">
                  <input placeholder="10 digit No." required="required" type="text" class="form-control" name="phone" id="phone">
                </div>

                <label class="control-label col-md-3 col-sm-3">Mail ID :</label>
                <div class="container col-md-9 col-sm-9">
                  <input type="email" class="form-control" required="required" name="mail" id="mail"><br>
                </div>
              
              <legend class="text-primary">Thesis Details</legend>
                
                <label class="control-label col-md-3 col-sm-3" for="thesis_type">Thesis Type :</label>
                        <div class="container col-md-9 col-sm-9">
                          <select class="form-control" name="thesis_type" onchange="btntoggle()" id="thesis_type" form = "student_form">
                    <option value = "1">On Campus</option>
                            <option value = "2">Off Campus</option>
                          </select>
                      </div>

                <label class="control-label col-md-3 col-sm-3">Thesis Title :</label>
                <div class="container col-md-9 col-sm-9">
                 <input type="text" class="form-control" required="required" name="thesis_title" id="thesis_title" placeholder="Thesis Title">
                </div>

                <label class="control-label col-md-3 col-sm-3" for="thesis_dept">Department :</label>
                  <div class="container col-md-9 col-sm-9">
                    <select class="form-control" name="thesis_dept" id="thesis_dept" form = "student_form">
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

                <div id = "offcampus">
                  
                </div>
              </div>
            </div>
            <div class = "col-sm-6 col-sm-offset-3">
              
              <div class="form-group"><br>
                <legend class="text-primary">Supervisor Details</legend>

                  <label class="control-label col-md-3 col-sm-3" for="supervisor">Supervisor :</label>
                  <div class="container col-md-9 col-sm-9">
                    <select class="form-control" name="supervisor" id="supervisor" form = "student_form">
                      <?php
                        $sql = "select * from faculty";
                        $result = mysqli_query($con,$sql);
                        while( $row = mysqli_fetch_array($result))
                        {
                          $faculty_id = $row['fid'];
                          $faculty_name = $row['name'];

                          echo "<option value = {$faculty_id}> {$faculty_name} </option>";
                        }
                      ?> 
                    </select>
                  </div>
              
                <label class="control-label col-md-3 col-sm-3" for="co_supervisor">Co-supervisor :</label>
                  <div class="container col-md-9 col-sm-9">
                    <select class="form-control" name="co_supervisor" id="co_supervisor" form = "student_form">
                      <?php
                        $sql = "select * from faculty";
                        $result = mysqli_query($con,$sql);
                        while( $row = mysqli_fetch_array($result))
                        {
                          $faculty_id = $row['fid'];
                          $faculty_name = $row['name'];

                          echo "<option value = {$faculty_id}> {$faculty_name} </option>";
                        }
                      ?> 
                    </select>
                  </div>
            
              <legend class="text-primary">Examiner Details</legend>

                <label class="control-label col-md-3 col-sm-3" for="examiner1">Examiner 1:</label>
                  <div class="container col-md-9 col-sm-9">
                    <select class="form-control" name="examiner1" id="examiner1" form = "student_form">
                      <?php
                        $sql = "select * from faculty";
                        $result = mysqli_query($con,$sql);
                        while( $row = mysqli_fetch_array($result))
                        {
                          $faculty_id = $row['fid'];
                          $faculty_name = $row['name'];

                          echo "<option value = {$faculty_id}> {$faculty_name} </option>";
                        }
                      ?> 

                    </select>
                  </div>

                <label class="control-label col-md-3 col-sm-3" for="examiner2">Examiner 2:</label>
                  <div class="container col-md-9 col-sm-9">
                    <select class="form-control" name="examiner2" id="examiner2" form = "student_form">
                      <?php
                        $sql = "select * from faculty";
                        $result = mysqli_query($con,$sql);
                        while( $row = mysqli_fetch_array($result))
                        {
                          $faculty_id = $row['fid'];
                          $faculty_name = $row['name'];

                          echo "<option value = {$faculty_id}> {$faculty_name} </option>";
                        }
                      ?> 

                    </select>
                  </div>
            
                <div class="col-md-4 col-md-offset-5 col-sm-offset-4"><br>
                  <button name="submit_btn" id="subbutton" class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
              </div>
              <div class="col-md-2 col-md-offset-5 col-sm-offset-4"><br><br>
              </div>
              </div>
            </div>
         
      
          </form>
                        
        </div>
  
  <script src="./files/jquery-2.1.4.min.js"></script>
  <script src="./files/bootstrap.min.js"></script>
  <script>
            function btntoggle() {
              if(document.getElementById("thesis_type").selectedIndex == "1")
              {
                document.getElementById("offcampus").innerHTML = '<label class="control-label col-md-3 col-sm-3">Institution Name :</label>                  <div class="container col-md-9 col-sm-9">                    <input type="text" class="form-control" required="required" name="institution_title" id="institution_title" placeholder="Institution Name">                  </div>';
              }
              else
              {
                document.getElementById("offcampus").innerHTML = ' ';
              }
            }
  </script>
    </body>
</html>


<?php

require 'config.php';


if( isset($_POST['submit_btn'])){

    // collect student details 
    $name = $_POST['name'];
    $sid = $_POST['id'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];

    // collect thesis details

    $institute = "BITS Hyderabad";
    $thesis_type = $_POST['thesis_type'];
    $thesis_title = $_POST['thesis_title'];
    $thesis_dept = $_POST['thesis_dept'];
    if( $thesis_type == 2)
      $institute  = $_POST['institution_title'];
    //collect faculty details
    $supervisor_id = $_POST['supervisor'];
  
    $cosupervisor_id = $_POST['co_supervisor'];
  
    $examiner1_id = $_POST['examiner1'];
  
    $examiner2_id = $_POST['examiner2'];
  
    $sql = "INSERT INTO student (name, bits_id, address, phone, mail) 
          VALUES ('$name', '$sid', '$address', '$phone', '$mail')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        $student_id = mysqli_insert_id($con);
        echo "New record created successfully. Last inserted ID is: " . $student_id;
    } else {
        echo mysqli_error($con); 
    }

    mysqli_free_result( $result );


    $sql = "INSERT INTO thesis(title,type,institute,did,supervisor,cosupervisor,examiner1,examiner2,sid)     
          VALUES ('$thesis_title', '$thesis_type', '$institute', '$thesis_dept', '$supervisor_id', '$cosupervisor_id', '$examiner1_id', '$examiner2_id', '$student_id')";
  
  
    $result = mysqli_query($con,$sql);

    if( $result)
    {
       header("Location: search_student.php");
      echo "successful";
    }
    else echo mysqli_error($con);

}



?>
