<?php

$servername = "localhost:3306";
$username = "neetu";
$password = "lancer@721";
$con_error = "could not connect";
$db_error = "no database connected";


$dbname = 'new_database';

$con = mysqli_connect($servername, $username, $password, $dbname);

if( !$con) {
  //echo mysqli_error($con);
  die(mysqli_error($con));
}
else echo "connected successfully";

?>