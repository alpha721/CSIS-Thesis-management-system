

<?php
require 'config.php';

if( isset($_POST['submit'])){
  $student_id = $_POST['id'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $reason = $_POST['reason'];
  $sql = "select sid from student where bits_id= '$student_id'";

  $result = mysqli_query($con,$sql);

  while ($row = mysqli_fetch_array($result)) 
  {
    $sid = $row['sid'];  
  }

  if ($result) {
        $student_id = $sid;
        echo "Id selected is : " . $student_id;
  } else {
        echo mysqli_error($con); 
  }

  mysqli_free_result( $result );

  $sql = "INSERT INTO application (sid, start, end, reason) 
                    VALUES ('$student_id', '$start_date', '$end_date', '$reason')";

  $result = mysqli_query($con,$sql);

  if ($result) {
    $application = mysqli_insert_id($con);
    header("Location: view_leaves.php");
    //echo "New record created successfully. Last inserted application ID is: " . $application;
  } else {
    echo mysqli_error($con); 
  
  }

  }

?>
