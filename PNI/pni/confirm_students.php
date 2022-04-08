<?php

ob_start();

?>

<?php
 
require('dbcon.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from students_app where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$row_name = $row['stud_name']; 
$row_age = $row['age']; 
$row_curr = $row["curr_yr"];
$row_curr_sy = $row['curr_sy'];
$row_date_reg = $row['date_reg'];
$row_sex = $row['sex'];
$row_bdate = $row['date_birth'];
$row_bplace = $row['place_birth'];
$row_fn = $row['father_name'];
$row_fo = $row['father_occ'];
$row_mn = $row['mother_name'];
$row_mo = $row['mother_occ'];
$row_pa = $row['parents_addr'];
$row_gn = $row['guardian_name'];
$row_go = $row['guardian_occ'];
$row_ga = $row['guardian_addr'];
$row_elem = $row['elem'];
$row_es = $row['elem_sy'];
$row_ea = $row['elem_addr'];
$row_ls = $row['last_school_attend'];
$row_lss = $row['last_school_sy'];
$row_lsa = $row['last_school_addr'];
$row_ss = $row['student_status'];
$row_currlabel = $row['curr_label'];


?>

<?php

require('dbcon.php');
$id=$_REQUEST['id'];
$sql = "INSERT INTO students_info (`stud_name`, `age`, `curr_yr`, `curr_sy`, `date_reg`, `sex`, `date_birth`, `place_birth`, `father_name`, `father_occ`, `mother_name`, `mother_occ`, `parents_addr`, `guardian_name`, `guardian_occ`, `guardian_addr`, `elem`, `elem_sy`, `elem_addr`, `last_school_attend`, `last_school_sy`, `last_school_addr`, `student_status`, `curr_label`) VALUES ('$row_name', '$row_age', '$row_curr', '$row_curr_sy', '$row_date_reg', '$row_sex', '$row_bdate', '$row_bplace', '$row_fn', '$row_fo', '$row_mn', '$row_mo', '$row_pa', '$row_gn', '$row_go', '$row_ga', '$row_elem', '$row_es', '$row_ea', '$row_ls', '$row_lss', '$row_lsa', '$row_ss', '$row_currlabel')";


					if ($con->query($sql) === TRUE) {

						include 'delete.php';
							ob_end_flush();
					} else {
  						echo "Error: " . $sql . "<br>" . $con->error;
					}

?>