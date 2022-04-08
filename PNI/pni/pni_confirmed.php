<?php 
 
require('dbcon.php');
include("auth.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Paoay North Institute - Students</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
	<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
	<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
	<link href="font-awesome.min.css" rel="stylesheet">
	<link href="PNI_Online_Enrollment.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styleteacher.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 

	<style>

		table {
			border-collapse: collapse;
			width: 100%
		}

		th, td{
			text-align: center;
			padding: 5px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color: #4CAF50;
			color: white;
		}


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
<picture id="wb_Picture1" style="display:block;width: 100%;height:50px;z-index:0">
<img src="images/LOGO.png" id="Picture1" alt="">
</picture>
</a>
</div>
<div class="col-3">
</div>
<div class="col-4">
</div>
</div>
</div>
</div>
<div class="form">
<br>
<h2>View Records</h2>
<br>
<br>
<form action="pni_confirmation.php" method="POST">
	<input type="checkbox" name="checkconfirmstudents" value="1" checked onClick="this.form.submit();">Show Confirmed Students <br/> 	
</form>

<br>

<table>
<thead>
<tr><th><strong>Name</strong></th><th><strong>Grade</strong></th><th><strong>Student Status</strong></th><th><strong>Application</strong></th><th><strong>Application Status</strong></th></tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="Select * from students_app ORDER BY stud_name desc;";
$result = mysqli_query($con,$sel_query) or die(mysqli_error($con));

$count1=1;
$sel_query1="Select * from students_info ORDER BY stud_name desc;";
$result1 = mysqli_query($con,$sel_query1) or die(mysqli_error($con));

while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["stud_name"]; ?></td>
	<td align="center"><?php echo $row["curr_yr"]; ?></td>
	<td align="center"><?php echo $row["student_status"]; ?></td>
	<td align="center"><a href="viewapp.php?id=<?php echo $row["id"]; ?>">View Application</a></td>
	<td align="center"><?php echo $row["status"]; ?></td></tr>
<?php $count++; }

while($row = mysqli_fetch_assoc($result1)) { ?>
<tr><td align="center"><?php echo $row["stud_name"]; ?></td>
	<td align="center"><?php echo $row["curr_yr"]; ?></td>
	<td align="center"><?php echo $row["student_status"]; ?></td>
	<td align="center"><a href="viewappcon.php?id=<?php echo $row["id"]; ?>">View Application</a></td>
	<td align="center"><?php echo $row["status"]; ?></td></tr>
<?php $count1++; } ?>

</tbody>
</table>



</div>
<br>
<div>

<form method="post" action="index_export.php">
    <input type="submit" name="export" class="btn btn-success" value="View all Enrolled Students" />
</form>
<br>
<form method="post" action="index.html">
    <input type="submit" name="export" class="btn btn-success" value="HOME" />
</form>
</div>

<div class="footer">
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
</div>

</body>
</html>