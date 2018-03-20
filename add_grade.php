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
    $sql = "UPDATE thesis SET midsem_grade='$grade' WHERE sid= '$sid'";
  }
  elseif( $grade_type == 2)
  {
    $sql = "UPDATE thesis SET endsem_grade='$grade' WHERE sid= '$sid'";
  }

  $result = mysqli_query($con,$sql);

  if ($result)
  {
    header("Location: search_student.php");
    //echo "update succesful";
  } 
  else
  {
      echo mysqli_error($con);
  }
}

?>
