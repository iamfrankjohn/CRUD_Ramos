<?php

ob_start();

$datenow = date('Y-m-d');

?>

<?php include('dbcon.php'); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paoay North Institute - Online Enrollment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="PNI_Online_Enrollment.css" rel="stylesheet">
<link href="online_form.css" rel="stylesheet">
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

<form action="#" method="post">
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
									<input type="text" id="editboxName" style="display:block;width: calc(100% - 10px);height:34px;z-index:2;" name="lname" required="required" value="" spellcheck="false" placeholder="LAST NAME" autofocus required>
								</div>
<div class="col-2">
<div id="wb_Text15">
<span style="background-color:#FFFFFF;color:#FFFFFF;font-family:Arial;font-size:9.3px;">.</span>
</div>
									<input type="text" id="Editbox1" style="display:block;width: calc(100% - 10px);height:34px;z-index:3;" name="gname" required="required" value="" spellcheck="false" placeholder="GIVEN NAME" required>
								</div>
<div class="col-3">
<div id="wb_Text16">
<span style="background-color:#FFFFFF;color:#FFFFFF;font-family:Arial;font-size:9.3px;">.</span>
</div>
									<input type="text" id="Editbox2" style="display:block;width: calc(100% - 10px);height:34px;z-index:4;" name="midin" required="required" value="" spellcheck="false" placeholder="MIDDLE NAME" required>
								</div>
<div class="col-4">
<div id="wb_Text17">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Age:</span>
</div>
									<input type="number" id="Editbox3" style="display:block;width: calc(100% - 10px);height:34px;z-index:5;" name="age"	required="required" value="" spellcheck="false" placeholder="AGE" required>
								</div>
								<div class="col-5">
									<div id="wb_Text11">
										<span style="color:#000000;font-family:Arial;font-size:9.3px;">Sex:</span>
									</div>
									<select name=pick_sex size="1" id="Combobox1" style="display:block;width: 100%;height:27px;z-index:7;">
										<option selected value="choose_sex">--SEX--</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
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
									<select name="pick_grade" size="1" id="Combobox2" style="display:block;width: 100%;height:33px;z-index:9;">
										<option selected value="choose_grade">--Curr. Yr.--</option>
										<option value="Grade 7">GRADE 7</option>
										<option value="Grade 8">GRADE 8</option>
										<option value="Grade 9">GRADE 9</option>
										<option value="Grade 10">GRADE 10</option>
										<option value="Grade 11">GRADE 11</option>
										<option value="Grade 12">GRADE 12</option>
									</select>
								</div>
								<div class="col-2">
									<div id="wb_Text3">
										<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; School Year:</span>
									</div>
									<input type="text" id="Editbox6" style="display:block;width: calc(100% - 10px);height:34px;z-index:11;" name="currsy" required="required" value="" spellcheck="false" placeholder="yyyy-yyyy" required>
								</div>
								<div class="col-3">
									<div id="wb_Text2">
										<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Date Registered:</span>
									</div>
									<input type="date" id="Editbox4" style="display:block;width: calc(100% - 10px);height:34px;z-index:13;" name="datereg" value="<?php echo $datenow ?>" spellcheck="false" placeholder="yyyy-yyyy" disabled>
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
									<input type="date" id="Editbox8" style="display:block;width: calc(100% - 10px);height:34px;z-index:15;" name="birthdate" required="required" value="" spellcheck="false" placeholder="Date of Birth" required>
								</div>
									<div class="col-2">
									<div id="wb_Text5">
									<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Place of Birth:</span>
									</div>
									<input type="text" id="Editbox9" style="display:block;width: calc(100% - 10px);height:34px;z-index:17;" name="birthpalce" required="required" value="" spellcheck="false" placeholder="Place of Birth" required>
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
								<input type="text" id="Editbox10" style="display:block;width: calc(100% - 10px);height:34px;z-index:18;" name="fathername" value="" spellcheck="false" placeholder="FATHER&#39;S NAME">
								</div>
								<div class="col-2">
								<div id="wb_Text19">
								<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Occupation:</span>
								</div>
									<input type="text" id="Editbox11" style="display:block;width: calc(100% - 10px);height:34px;z-index:19;" name="fatherocc" value="" spellcheck="false" placeholder="Occupation">
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
									<input type="text" id="Editbox12" style="display:block;width: calc(100% - 10px);height:34px;z-index:20;" name="mothername" value="" spellcheck="false" placeholder="MOTHER&#39;S NAME">
								</div>
								<div class="col-2">
								<div id="wb_Text21">
								<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Occupation:</span>
								</div>
									<input type="text" id="Editbox13" style="display:block;width: calc(100% - 10px);height:34px;z-index:21;" name="motherocc" value="" spellcheck="false" placeholder="Occupation">
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
									<input type="text" id="Editbox14" style="display:block;width: calc(100% - 10px);height:34px;z-index:22;" name="parentaddr" value="" spellcheck="false" placeholder="Parent&#39;s Address">
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
									<input type="text" id="Editbox15" style="display:block;width: calc(100% - 10px);height:34px;z-index:23;" name="guardianname" value="" spellcheck="false" placeholder="GUARDIAN&#39;S NAME">
								</div>
<div class="col-2">
<div id="wb_Text23">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; Occupations:</span>
									<input type="text" id="Editbox16" style="display:block;width: calc(100% - 10px);height:34px;z-index:24;" name="guardianocc" value="" spellcheck="false" placeholder="Occupation">
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
									<input type="text" id="Editbox17" style="display:block;width: calc(100% - 10px);height:34px;z-index:25;" name="guardianaddr" value="" spellcheck="false" placeholder="Guardian&#39;s Address">
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
									<input type="text" id="Editbox19" style="display:block;width: calc(100% - 10px);height:34px;z-index:27;" name="elemschool" required="required" value="" spellcheck="false" placeholder="Elementery Course Completed" required>
								</div>
								<div class="col-2">
									<div id="wb_Text6">
										<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; School Year:</span>
									</div>
									<input type="text" id="Editbox20" style="display:block;width: calc(100% - 10px);height:34px;z-index:29;" name="elemsy" required="required" value="" spellcheck="false" placeholder="yyyy-yyyy" required>
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
									<input type="text" id="Editbox21" style="display:block;width: calc(100% - 10px);height:34px;z-index:30;" name="elemaddr" required="required" value="" spellcheck="false" placeholder="Address" required>
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
									<input type="text" id="Editbox23" style="display:block;width: calc(100% - 10px);height:34px;z-index:32;" name="lastschool" value="" spellcheck="false" placeholder="Last School Attended">
								</div>
								<div class="col-2">
									<div id="wb_Text8">
										<span style="color:#000000;font-family:Arial;font-size:9.3px;">&nbsp; School Year:</span>
									</div>
									<input type="text" id="Editbox24" style="display:block;width: calc(100% - 10px);height:34px;z-index:34;" name="lastsy" value="" spellcheck="false" placeholder="yyyy-yyyy">
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
									<input type="text" id="Editbox25" style="display:block;width: calc(100% - 10px);height:34px;z-index:35;" name="lastaddr" value="" spellcheck="false" placeholder="Address">
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
										<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;line-height:17px;"><br></span><span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:11px;line-height:17px;">Student Status:</span><span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:9.3px;line-height:10px;"><br></span>
									</div>
									<select name="status_combo" size="1" id="Combobox3" style="display:block;width: 100%;height:33px;z-index:37;">
										<option selected value="status_student">--Status--</option>
										<option value="current_student">Current Student</option>
										<option value="new_trasferee">New Student/Transferee</option>
									</select>
								</div>
								<div class="col-3">
								</div>
							</div>
						</div>
					</div>
					<div id="wb_Text14">
						<span style="color:#B22222;"><br><br><br><br></span>
					</div>
</div>
					<input type="submit" id="Button1" name="addstudent" value="Submit" style="display:inline-block;width:92px;height:39px;z-index:52;">
				</div>
			</div>
		</div>
	</div>
</form>

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


<?php
	if (isset($_POST['addstudent']))
		{
			$l_name = mysqli_real_escape_string($con, $_POST['lname']);
			$g_name = mysqli_real_escape_string($con, $_POST['gname']);
			$mid_in = mysqli_real_escape_string($con, $_POST['midin']);
			$age_txt = mysqli_real_escape_string($con, $_POST['age']);
			$sex_txt = mysqli_real_escape_string($con, $_POST['pick_sex']);
			$grade_txt = mysqli_real_escape_string($con, $_POST['pick_grade']);
			$currsy_txt = mysqli_real_escape_string($con, $_POST['currsy']);
			$datereg_txt = $datenow;
			$birthdate_txt = mysqli_real_escape_string($con, $_POST['birthdate']);
			$birthpalce_txt = mysqli_real_escape_string($con, $_POST['birthpalce']);
			$fathername_txt = mysqli_real_escape_string($con, $_POST['fathername']);
			$fatherocc_txt = mysqli_real_escape_string($con, $_POST['fatherocc']);
			$mothername_txt = mysqli_real_escape_string($con, $_POST['mothername']);
			$motherocc_txt = mysqli_real_escape_string($con, $_POST['motherocc']);
			$parentaddr_txt = mysqli_real_escape_string($con, $_POST['parentaddr']);
			$guardianname_txt = mysqli_real_escape_string($con, $_POST['guardianname']);
			$guardianocc_txt = mysqli_real_escape_string($con, $_POST['guardianocc']);
			$guardianaddr_txt = mysqli_real_escape_string($con, $_POST['guardianaddr']);
			$elemschool_txt = mysqli_real_escape_string($con, $_POST['elemschool']);
			$elemsy_txt = mysqli_real_escape_string($con, $_POST['elemsy']);
			$elemaddr_txt = mysqli_real_escape_string($con, $_POST['elemaddr']);
			$lastschool_txt = mysqli_real_escape_string($con, $_POST['lastschool']);
			$lastsy_txt = mysqli_real_escape_string($con, $_POST['lastsy']);
			$lastaddr_txt = mysqli_real_escape_string($con, $_POST['lastaddr']);
			$status_combo_pick  = mysqli_real_escape_string($con, $_POST['status_combo']);
			$status_txt = "";
			$currlabel= "";

			if($grade_txt == 'Grade 7'){
				$currlabel = "a";
			}elseif($grade_txt == 'Grade 8'){
				$currlabel = "b";
			}elseif($grade_txt == 'Grade 9'){
				$currlabel = "c";
			}elseif($grade_txt == 'Grade 10'){
				$currlabel = "d";
			}elseif($grade_txt == 'Grade 11'){
				$currlabel = "e";
			}elseif($grade_txt == 'Grade 12'){
				$currlabel = "f";
			}

			if($status_combo_pick == 'current_student'){
							$status_txt = "Current Student";
			}elseif($status_combo_pick == 'new_trasferee'){
							$status_txt = "New/Transferee Student";
			}

			
			$query 		= mysqli_query($con, "SELECT * FROM students WHERE  `last_name`='$l_name' and `given_name`='$g_name'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{		
					$_SESSION['last_name']=$row['last_name'];	


					function function_alert($message){
						echo "<script>alert('$message');</script>";
					}

					function_alert("Name has Already Enrolled!");					
				}
			else
				{
					
					$sql1 = "INSERT INTO students (`last_name`, `given_name`, `mid_in`) VALUES ('$l_name','$g_name', '$mid_in')";
					$sql2 = "INSERT INTO students_app (`stud_name`, `age`, `sex`, `curr_yr`, `curr_sy`, `date_reg`, `date_birth`, `place_birth`, `father_name`, `father_occ`, `mother_name`, `mother_occ`, `parents_addr`, `guardian_name`, `guardian_occ`, `guardian_addr`, `elem`, `elem_sy`, `elem_addr`, `last_school_attend`, `last_school_sy`, `last_school_addr`, `status`, `student_status`, `curr_label`) VALUES ('$l_name' ', ' '$g_name' ' ' '$mid_in','$age_txt', '$sex_txt', '$grade_txt', '$currsy_txt', '$datereg_txt', '$birthdate_txt', '$birthpalce_txt', '$fathername_txt', '$fatherocc_txt', '$mothername_txt', '$motherocc_txt', '$parentaddr_txt', '$guardianname_txt', '$guardianocc_txt', '$guardianaddr_txt', '$elemschool_txt', '$elemsy_txt', '$elemaddr_txt', '$lastschool_txt', '$lastsy_txt', '$lastaddr_txt', 'Waiting for Confirmation', '$status_txt', '$currlabel')";


					if ($con->query($sql1) === TRUE && $con->query($sql2) === TRUE) {
 						 //echo "New record created successfully";
					} else {
  						echo "Error: " . $sql . "<br>" . $con->error;
					}

						if($status_combo_pick == 'current_student'){
							header('location:done_current_student.html');
							ob_end_flush();
						}elseif($status_combo_pick == 'new_trasferee'){
							header('location:done_new_student.html');
							ob_end_flush();
						}

					
				}
		}
?>

</body>
</html>