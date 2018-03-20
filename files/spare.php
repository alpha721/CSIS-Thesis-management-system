	// ensure the details are filled correctly
  <div><h5 class="text-center"><?php echo $_SESSION['msg'] ?></h5></div>
	
		// name of the student is required
		/*if( empty($name)){
			array_push($errors,"Name of student is required");
		}

		// Id of the student is required
		if( empty($sid)){
			array_push($errors,"Id of student is required");
		} 	  	
	  	
	  	// address of the student is required
		if( empty($address)){
			array_push($errors,"Address of student is required");
		}

		// phone of the student is required
		if( empty($phone)){
			array_push($errors,"Phone of student is required");
		} 	  	
	  	
	  	// thesis of the student is required
		if( empty($thesis_type)){
			array_push($errors,"thesis type is required");
		} 	  	
	  	
	  	// thesis title of the student is required
		if( empty($thesis_title)){
			array_push($errors,"thesis title is required");
		} 	  	

		// name of the student is required
		if( empty($name)){
			array_push($errors,"Name of student is required");
		} 	  	
	  	
	  	// name of the student is required
		if( empty($name)){
			array_push($errors,"Name of student is required");
		} 	  	
	  	*/

	  	<!DOCTYPE html>
<html>
<head> 
  <title> Login </title>
</head>

<body>
  <div>
    <h2> Login </h2>
  </div>
  <form method="post", action = "login.php">
    <table>
      <tr>
        <td> Username</td>
        <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
        <td> Password</td>
        <td><input type="password" name="password" placeholder="password"></td>
      </tr>
      <tr>
        <td> &nbsp;</td>
        <td><input type="submit" name="submit" value="Login"></td>
      </tr>

    </table>
  </form>
</body>
</html> 

<?php

//require 'config.php';


/*$servername = "localhost";
$username = "root";
$password = "lancer";
$con_error = "could not connect";
$db_error = "no database connected";
//$con = mysql_connect($servername, $username, $password);
*/

//$mysql_db = 'database';
//mysql_connect($servername, $username, $password) or die("could not connect to server");
//$con = mysql_connect($servername, $username, $password);
//$db = mysql_select_db("database",$con);



/*if(!$con)
{
  //  die($con_error);
  echo "connected.";
}*/
//echo "connection failed.";
//if (!$db)
//{
//    die($db_error);
//} 
//*/   

echo "connected."; 


/*if( isset($_POST['submit'])){
  //$type = $_POST['role'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "select * from login where username= '$username' and password = '$password'";// and role = '$type'";
  
  $result = mysql_query($query)  or die(mysql_error());
  
  while($row= mysql_fetch_array($result)){
    if($row['username'] == $username && $row['password'] == $password && $row['role'] == 'admin')
    {
      header("Location: admin.html");
    }
    elseif($row['username'] == $username && $row['password'] == $password && $row['role'] == 'hod')
    {
      header("Location: faculty.html");
    }
    elseif($row['username'] == $username && $row['password'] == $password && $row['role'] == 'staff')
    {
      header("Location: student.html");
    }
    else { echo "something's not right"; }
  }
}
   while($row = mysqli_fetch_assoc($result))
    {
    
        if($row['username'] == $username && $row['password'] == $password && $row['role'] == 'admin')
        {
          header("Location: admin.html");
        }
        elseif($row['username'] == $username && $row['password'] == $password && $row['role'] == 'hod')
        {
          header("Location: admin.html");
        }
        elseif($row['username'] == $username && $row['password'] == $password && $row['role'] == 'staff')
        {
          header("Location: admin.html");
        }
    }
 
*/

?>
if(!$con)
{
    die($con_error);
  echo "connected.";
}
else { echo "not connected"; }
<!DOCTYPE html>
<html>
<head> <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <link rel="stylesheet" href="./files/bootstrap.min.css">
    <link rel="stylesheet" href="./files/styling.css">
    <style>body{padding-top:50px;}</style>
  <title> Login </title>
</head>

<body>
  <div>
    <h2> Login </h2>
  </div>
  <form method="post", action = "login.php">
    <table>
      <tr>
        <td> Username</td>
        <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
        <td> Password</td>
        <td><input type="password" name="password" placeholder="password"></td>
      </tr>
      <tr>
        <td> &nbsp;</td>
        <td><input type="submit" name="login" value="Login"></td>
      </tr>

    </table>
  </form>
</body>
</html> 

              <label class="control-label col-md-3 col-sm-3" for="student_id">ID :</label>
              <div class="container col-md-9 col-sm-9">
                <input class="form-control" required = "required" name = "student_id" placeholder="201XXXPSXXXXH">
                <datalist name="students_id" id="students_id">
                  <option value = "2015A7PS0035H">2015A7PS0035H</option>
                  <option value = "2015A7PS0036H">2015A7PS0036H</option>
                </datalist>
              </div>

// add grades ..............

<?php

require 'config.php';
if( isset($_POST['submit'])){
  $student_id = $_POST['id'];
  $grade_type = $_POST['grade_type'];
  $grade = $_POST['grade'];

  echo $student_id;
  $get_id = "select sid from student where bits_id = '$student_id'";
  $get_result = mysqli_query($con,$get_id);
  while ($row = mysqli_fetch_array($get_result)) 
  {
    $sid = $row['sid'];  
  }
  echo $sid;

  if( $grade_type == 1)
  {
    $sql = "UPDATE thesis SET midsem_grade='$grade' WHERE s_id= '$sid'";
  }
  elseif( $grade_type == 2)
  {
    $sql = "UPDATE thesis SET endsem_grade='$grade' WHERE s_id= '$sid'";
  }
  echo $grade_type;
  echo $grade;
  if( $grade_type == 1)
    echo "true its 1";
  elseif ( $grade_type == 2)
    echo "true its 2";
  else echo "false";

  $result = mysqli_query($con,$sql);

  if ($result)
  {
    echo "update succesful";
  } 
  else
  {
      echo mysqli_error($con);
  }

  $p = "select midsem_grade from thesis where s_id = '$student_id'";
  $second_run = mysqli_query($con,$p);
  echo $second_run;
}

?>
//-------------------------------------------------------------

add_grade.php

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Add Grade</title>
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
          <li><a href="link_for search students">Search Student</a></li>
          <li><a href="./add_grades.php">Enter Grades</a></li>
        </ul>
      </li>
      <!--<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Supervisor <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./add_faculty.html">Add Supervisor</a></li>
          <li><a href="link_for search faculty">Search Supervisor</a></li>
        </ul>
      </li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Leave <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./leave_application.html">Add Leave</a></li>
          <li><a href="link_for search leaves">View Leaves</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Account <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="./change_password.html">Change Password</a></li>
          <li><a href="link for logout">Logout</a></li>
        </ul>
      </li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </ul>
  </div>
</nav><br><br><br>
	  <div class="container-fluid">
        <br>  
			  <center><h1 class="hidden-xs">Add Grade</h1></center>
        <br>
      
      <div class="row">
      <style>a{color:#2c3e50}</style>
        <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
        <form method="POST" action="add_grade.php" role="form" class="form-horizontal">
          <!--<legend class="text-primary" style="display:block;"></legend>
            <div class="form-group">
            <div class="form-group" style="border-top-style: solid;border-right-style: dotted;border-bottom-style: solid;border-left-style: solid;">-->
              <label class="control-label col-md-3 col-sm-3">ID :</label>
              <div class="container col-md-9 col-sm-9">
                <input type="text" class="form-control" name="id" id="id" required="required" placeholder="201XXXPSXXXXH">
              </div>
              
              <label class="control-label col-md-3 col-sm-3" for="grade_type">Grading :</label>
              <div class="container col-md-9 col-sm-9">
                <select class="form-control" name="grade_type" id="grade_type">
                  <option value = "1">Mid Semester</option>
                  <option value = "2">End Semester</option>
                </select>
              </div>

              <label class="control-label col-md-3 col-sm-3" for="grade">Thesis Type :</label>
              <div class="container col-md-9 col-sm-9">
                <select class="form-control" name="grade" id="grade">
                  <option value = "A+">A+</option>
                  <option value = "A">A</option>
                  <option value = "B+">B+</option>
                  <option value = "B">B</option>
                  <option value = "C+">C+</option>
                  <option value = "C">C</option>
                  <option value = "D">D</option>
                  <option value = "E">E</option>   
                </select>
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

require 'config.php';
if( isset($_POST['submit'])){
  $student_id = $_POST['id'];
  $grade_type = $_POST['grade_type'];
  $grade = $_POST['grade'];

  $get_id = "select sid from student where bits_id = '$student_id'";
  $get_result = mysqli_query($con,$get_id);
  while ($row = mysqli_fetch_array($get_result)) 
  {
    $sid = $row['sid'];  
  }

  if( $grade_type == 1)
  {
    $sql = "UPDATE thesis SET midsem_grade='$grade' WHERE s_id= '$sid'";
  }
  elseif( $grade_type == 2)
  {
    $sql = "UPDATE thesis SET endsem_grade='$grade' WHERE s_id= '$sid'";
  }

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
//-------------------------------------------------
  $sql = "INSERT INTO thesis (title, type, institute,did, supervisor, cosupervisor, examiner1, examiner2,s_id ) 
      VALUES ('$thesis_title', '$thesis_type',NULL, '$thesis_dept', '$supervisor_name', '$supervisor_dept', '$supervisor_phone', '$cosupervisor_name', '$cosupervisor_dept','$cosupervisor_phone', '$examiner1_name', '$examiner1_dept', '$examiner1_phone', '$examiner2_name', '$examiner2_dept', '$examiner2_phone', '$student_id')";
  