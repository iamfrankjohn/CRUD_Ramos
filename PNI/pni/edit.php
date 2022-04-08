<?php
 
require('dbcon.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from `students_info` where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
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

		<style>
		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
		}
	</style>

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

	<?php
	//$status = "";
	if(isset($_POST['new']) && $_POST['new']==1)
		{
			$id=$_REQUEST['id'];
			$n =$_REQUEST['lname'];
			$a=$_REQUEST['age'];
			$s=$_REQUEST['ComboboxSex'];
			$cy=$_REQUEST['ComboboxGrade'];
			//$cs=$_REQUEST['currsy'];
			//$dr=$_REQUEST['datereg'];
			//$bd=$_REQUEST['birthdate'];
			//$bp=$_REQUEST['birthpalce'];
			//$fn=$_REQUEST['fathername'];
			//$fo=$_REQUEST['fatherocc'];
			//$mn=$_REQUEST['mothername'];
			//$mo=$_REQUEST['motherocc'];
			//$pa=$_REQUEST['parentaddr'];
			//$gn=$_REQUEST['guardianname'];
			//$go=$_REQUEST['guardianocc'];
			//$ga=$_REQUEST['guardianaddr'];
			//$es=$_REQUEST['elemschool'];
			//$esy=$_REQUEST['elemsy'];
			//$esa=$_REQUEST['elemaddr'];
			//$ls=$_REQUEST['lastschool'];
			//$lsy=$_REQUEST['lastsy'];
			//$lsa=$_REQUEST['lastaddr'];
			//$ss=$_REQUEST['ComboboxStatus'];

			$update = "UPDATE `students_info` SET `stud_name`='".$n."', `age`='".$a."', `sex`='".$s."', `curr_yr`='".$cy."' WHERE  id='".$id."'";
			mysqli_query($con, $update) or die(mysqli_error());


			header("Location: pni_confirmation.php");
		

			//$status = "Record Updated Successfully. </br></br><a href='pni_confirmation.php'>View Updated Record</a>";
			//echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p>Full Name: <input type="text" name="lname" placeholder="Full Name" required value="<?php echo $row['stud_name'];?>" /></p>
<p>Age: <input type="text" name="age" placeholder="Enter Name" required value="<?php echo $row['age'];?>" /></p>

<p>Sex: <select name="ComboboxSex" size="1" id="Combobox1" style="display:center;width: 20%;height:27px;z-index:7;">
<option selected value="<?php echo $row['sex'];?>"><?php echo $row['sex'];?></option>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>
</select></p>

<p>Grade: <select name="ComboboxGrade" size="1" id="Combobox2" style="display:center;width: 25%;height:33px;z-index:9;">
<option selected value="php echo $row['curr_yr'];?>"><?php echo $row['curr_yr'];?></option>
<option value="Grade 7">GRADE 7</option>
<option value="Grade 8">GRADE 8</option>
<option value="Grade 9">GRADE 9</option>
<option value="Grade 10">GRADE 10</option>
<option value="Grade 11">GRADE 11</option>
<option value="Grade 12">GRADE 12</option>
</select></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>


<?php } ?>

</div>

<div class="footer">
	<div id="wb_LayoutGrid15">
		<div id="LayoutGrid15">
			<div class="row">
				<div class="col-1">
					<div id="wb_Text10">
						<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Copyright © Paoay North Institute 2020. All Rights Reserved.</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>