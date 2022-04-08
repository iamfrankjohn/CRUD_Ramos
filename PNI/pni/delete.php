<?php

require('dbcon.php');
$id=$_REQUEST['id'];
$query1 = "DELETE FROM `students_app` WHERE id=$id"; 
$query2= "DELETE FROM `students` WHERE id=$id";
$result1 = mysqli_query($con,$query1) or die ( mysqli_error());
$result2 = mysqli_query($con,$query2) or die ( mysqli_error());
header("Location: pni_confirmation.php"); 
?>