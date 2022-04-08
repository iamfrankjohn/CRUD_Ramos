<?php
 
require('dbcon.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from students_app where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paoay North Institute - View Application</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="PNI_Online_Enrollment.css" rel="stylesheet">
<link href="viewapp.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<div id="container">
</div>
<div id="wb_PageHeader">
<div id="PageHeader">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<a href="./index.html">
<picture id="wb_Picture1" style="display:block;width: 100%;height:54px;z-index:0">
<img src="images/LOGO.png" id="Picture1" alt="">
</picture>
</a>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
<div id="wb_Heading9" style="display:inline-block;width:100%;z-index:1;">
<h1 id="Heading9"><br>STUDENT PERSONAL DATA SHEET</h1>
</div>
</div>
</div>
</div>
</div>


<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_LayoutGrid9">
<div id="LayoutGrid9">
<div class="row">
<div class="col-1">
<div id="wb_Text13">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Name:</span>
</div>
<input type="text" id="editboxName" style="display:block;width: calc(100% - 10px);height:34px;z-index:3;" name="lname" value="<?php echo $row['stud_name'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text17">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Age:</span>
</div>
<input type="number" id="Editbox3" style="display:block;width: calc(100% - 10px);height:34px;z-index:5;" name="age" value="<?php echo $row['age'];?>" spellcheck="false" disabled>
</div>
<div class="col-3">
<div id="wb_Text11">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">Sex:</span>
</div>
<select name="ComboboxSex" size="1" id="Combobox1" style="display:block;width: 100%;height:27px;z-index:7;" disabled>
<option selected value="choose_sex"><?php echo $row['sex'];?></option>
<option value="male_sex">MALE</option>
<option value="female_sex">FEMALE</option>
</select>
</div>
<div class="col-4">
</div>
<div class="col-5">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<div id="wb_Text4">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;line-height:17px;">Curriculum Year:<br></span>
</div>
<select name="ComboboxGrade" size="1" id="Combobox2" style="display:block;width: 100%;height:33px;z-index:9;" disabled>
<option selected value="choose_grade"><?php echo $row['curr_yr'];?></option>
<option value="grade7">GRADE 7</option>
<option value="grade8">GRADE 8</option>
<option value="grade9">GRADE 9</option>
<option value="grade10">GRADE 10</option>
<option value="grade11">GRADE 11</option>
<option value="grade12">GRADE 12</option>
</select>
</div>
<div class="col-2">
<div id="wb_Text3">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; School Year:</span>
</div>
<input type="text" id="Editbox6" style="display:block;width: calc(100% - 10px);height:34px;z-index:11;" name="currsy" value="<?php echo $row['curr_sy'];?>" spellcheck="false" disabled>
</div>
<div class="col-3">
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Date Registered:</span>
</div>
<input type="date" id="Editbox4" style="display:block;width: calc(100% - 10px);height:34px;z-index:13;" name="datereg" value="<?php echo $row['date_reg'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Date of Birth:</span>
</div>
<input type="date" id="Editbox8" style="display:block;width: calc(100% - 10px);height:34px;z-index:15;" name="birthdate" value="<?php echo $row['date_birth'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text5">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Place of Birth:</span>
</div>
<input type="text" id="Editbox9" style="display:block;width: calc(100% - 10px);height:34px;z-index:17;" name="birthpalce" value="<?php echo $row['place_birth'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_Text18">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Father's Name:</span>
</div>
<input type="text" id="Editbox10" style="display:block;width: calc(100% - 10px);height:34px;z-index:19;" name="fathername" value="<?php echo $row['father_name'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text19">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Occupation:</span>
</div>
<input type="text" id="Editbox11" style="display:block;width: calc(100% - 10px);height:34px;z-index:21;" name="fatherocc" value="<?php echo $row['father_occ'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div id="wb_Text20">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Mother's Name:</span>
</div>
<input type="text" id="Editbox12" style="display:block;width: calc(100% - 10px);height:34px;z-index:23;" name="mothername" value="<?php echo $row['mother_name'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text21">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Occupation:</span>
</div>
<input type="text" id="Editbox13" style="display:block;width: calc(100% - 10px);height:34px;z-index:25;" name="motherocc" value="<?php echo $row['mother_occ'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div id="wb_Text24">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Address:</span>
</div>
<input type="text" id="Editbox14" style="display:block;width: calc(100% - 10px);height:34px;z-index:27;" name="parentaddr" value="<?php echo $row['parents_addr'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid7">
<div id="LayoutGrid7">
<div class="row">
<div class="col-1">
<div id="wb_Text22">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Guardian's Name:</span>
</div>
<input type="text" id="Editbox15" style="display:block;width: calc(100% - 10px);height:34px;z-index:29;" name="guardianname" value="<?php echo $row['guardian_name'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text23">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Occupations:</span>
</div>
<input type="text" id="Editbox16" style="display:block;width: calc(100% - 10px);height:34px;z-index:31;" name="guardianocc" value="<?php echo $row['guardian_occ'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid10">
<div id="LayoutGrid10">
<div class="row">
<div class="col-1">
<div id="wb_Text25">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Address:</span>
</div>
<input type="text" id="Editbox17" style="display:block;width: calc(100% - 10px);height:34px;z-index:33;" name="guardianaddr" value="<?php echo $row['guardian_addr'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid11">
<div id="LayoutGrid11">
<div class="row">
<div class="col-1">
<div id="wb_Text7">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Elementary Course Completed:</span>
</div>
<input type="text" id="Editbox19" style="display:block;width: calc(100% - 10px);height:34px;z-index:35;" name="elemschool" value="<?php echo $row['elem'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text6">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; School Year:</span>
</div>
<input type="text" id="Editbox20" style="display:block;width: calc(100% - 10px);height:34px;z-index:37;" name="elemsy" value="<?php echo $row['elem_sy'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid12">
<div id="LayoutGrid12">
<div class="row">
<div class="col-1">
<div id="wb_Text26">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Address:</span>
</div>
<input type="text" id="Editbox21" style="display:block;width: calc(100% - 10px);height:34px;z-index:39;" name="elemaddr" value="<?php echo $row['elem_addr'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid13">
<div id="LayoutGrid13">
<div class="row">
<div class="col-1">
<div id="wb_Text9">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Last School Attended:</span>
</div>
<input type="text" id="Editbox23" style="display:block;width: calc(100% - 10px);height:34px;z-index:41;" name="lastschool" value="<?php echo $row['last_school_attend'];?>" spellcheck="false" disabled>
</div>
<div class="col-2">
<div id="wb_Text8">
<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; School Year:</span>
</div>
<input type="text" id="Editbox24" style="display:block;width: calc(100% - 10px);height:34px;z-index:43;" name="lastsy" value="<?php echo $row['last_school_sy'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid14">
<div id="LayoutGrid14">
<div class="row">
<div class="col-1">
<div id="wb_Text27">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Address:</span>
</div>
<input type="text" id="Editbox25" style="display:block;width: calc(100% - 10px);height:34px;z-index:45;" name="lastaddr" value="<?php echo $row['last_school_addr'];?>" spellcheck="false" disabled>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid16">
<div id="LayoutGrid16">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text12">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;line-height:17px;"><br></span><span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:12px;line-height:17px;">Student Status:</span><span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;"><br></span>
</div>
<select name="ComboboxStatus" size="1" id="Combobox3" style="display:block;width: 100%;height:33px;z-index:47;" disabled>
<option selected value="status_student"><?php echo $row['student_status'];?></option>
<option value="current_student">Current Student</option>
<option value="new_trasferee">New Student/Transferee</option>
</select>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>

<div id="wb_LayoutGrid17">
<div id="LayoutGrid17">
<div class="row">
<div class="col-1">
</div>


<div class="col-2">

</div>

<div class="col-3">
<a href="confirm_students.php?id=<?php echo $row["id"]; ?>">
<input type="submit" id="Button1" name="confirm_butn" value="CONFIRM" style="display:inline-block;width:117px;height:39px;z-index:49;"  style="text-align: center;">
</a><br>
<a href="delete.php?id=<?php echo $row["id"]; ?>">
<input type="submit" id="Button3" name="submit_butn" value="Delete" style="display:inline-block;width:80px;height:39px;z-index:50;" style="text-align: center;">
</a>
</div>

<div class="col-4">
	
</div>

<div class="col-5">

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid15">
<div id="LayoutGrid15">
<div class="row">
<div class="col-1">
<div id="wb_Text10">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Copyright © Paoay North Institute, Inc. 2020. All Rights Reserved.</span>
</div>
</div>
</div>
</div>
</div>

</body>
</html>