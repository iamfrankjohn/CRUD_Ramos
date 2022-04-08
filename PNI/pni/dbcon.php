<?php
$con = mysqli_connect("localhost","root","","pni_students_database");
error_reporting(0);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>