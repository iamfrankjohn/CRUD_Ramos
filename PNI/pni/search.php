<?php 
 
include('dbcon.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paoay North Institute - SEARCH</title>
<meta name="generator" content="WYSIWYG Web Builder 15 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="PNI_Online_Enrollment.css" rel="stylesheet">
<link href="search.css" rel="stylesheet">

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
<div id="wb_FontAwesomeIcon1" style="display:inline-block;width:18px;height:18px;text-align:center;z-index:1;">
<a href="./login.php"><div id="FontAwesomeIcon1"><i class="fa fa-user-circle-o"></i></div></a>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_Heading3" style="display:inline-block;width:100%;z-index:9;">
<h1 id="Heading3">Paoay North Institute, Inc.<br>ONLINE ENROLLMENT</h1>
</div>
<div id="wb_Image1" style="display:inline-block;width:167px;height:167px;z-index:10;">
<img src="images/LOGO.png" id="Image1" alt="">
</div>
<div id="wb_Text3">
&nbsp;
</div>
<div id="wb_LayoutGrid9">
<div id="LayoutGrid9">
<div class="row">
<div class="col-1">
</div>
<form action="" method="post">
<div class="col-2">
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:11px;">&nbsp; Last Name, First Name Middle Name</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<input type="text" id="SiteSearch2" style="display:block;width: 100%;height:26px;z-index:3;" name="sitesearch" value="" required="required" spellcheck="false" placeholder="Last Name, First Name Middle Name" required>
</div>
<div class="col-3">
<input type="submit" id="Button1" name="searchbar" value="Search" style="display:inline-block;width:64px;height:25px;z-index:4;">
</div>
<div class="col-4">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text2">
<span style="color:#A9A9A9;font-family:Arial;font-size:11px;">&nbsp; (Ex. Dela Cruz, Juan Sanchez)</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_Text5">
&nbsp;
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text4">
<span id="myName" style="color:#000000;font-family:'Bookman Old Style';font-size:27px;"></span>
<br><br>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text6">
<span id="myConfirm" style="color:#000000;font-family:'Courier New';font-size:17px;"></span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_Text7">
&nbsp;
</div>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text8">
<span id="myNotice" style="color:#FF0000;font-family:'Courier New';font-size:13px;"><em></em></span>
<br><span id="myNotice1" style="color:#FF0000;font-family:'Courier New';font-size:13px;"><em></em></span>
<br><span id="myNotice2" style="color:#FF0000;font-family:'Courier New';font-size:13px;"><em></em></span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_Text9">
&nbsp;
</div>
</div>
</div>
</div>
</div>

<?php
$search_bar = mysqli_real_escape_string($con, $_POST['sitesearch']);

$sel_query="SELECT * FROM `students_info` WHERE `stud_name` = '$search_bar'";
$result = mysqli_query($con,$sel_query) or die(mysqli_error($con));

$sel_query1="SELECT * FROM `students_app` WHERE `stud_name` = '$search_bar'";
$result1 = mysqli_query($con,$sel_query1) or die(mysqli_error($con));

while($row = mysqli_fetch_assoc($result1)) { ?>
		<script>
			var span = document.getElementById('myName');
			span.textContent = "<?php echo $row['stud_name']; ?>";

			var spanconfirm = document.getElementById('myConfirm');
			spanconfirm.textContent = "waiting for confirmation";

			var spannotice = document.getElementById('myNotice');
			spannotice.textContent = "In order to Confirm your Application,";
			var spannotice1 = document.getElementById('myNotice1');
			spannotice1.textContent = "For Current Students: Pass your CLEARANCE to the Registrar Office.";
			var spannotice2 = document.getElementById('myNotice2');
			spannotice2.textContent = "For New/Trasferee Students: Submit your PSA BIRTH CERTIFICATE and REPORT CARD to the Registrar Office.";


		</script>

	<?php } ?>
<?php


while($row = mysqli_fetch_assoc($result)) { ?>
		<script>
			var span = document.getElementById('myName');
			span.textContent = "<?php echo $row['stud_name']; ?>";

			var spanconfirm = document.getElementById('myConfirm');
			spanconfirm.textContent = "YOU ARE NOW OFFCIALLY ENROLLED!";
		</script>

<?php } ?>


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
</form>




</body>
</html>