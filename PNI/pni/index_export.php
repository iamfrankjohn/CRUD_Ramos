<?php 

include("auth.php");
include('dbcon.php'); 
$sql = "SELECT * FROM `students_info` ORDER BY `curr_label`, `stud_name`";  
$result = mysqli_query($con, $sql);

?>


<html>  
 <head>  
  <title>Paoay North Institute - Enrolled Student's</title>
  <link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
  <link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
  <link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
  <link href="PNI_Online_Enrollment.css" rel="stylesheet">
  <link href="online_form.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

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

  <div class="container">  
   <br />    
   <div class="table-responsive">  
    <h2 align="center">Paoay North Institute, Inc.</h2>
    <p align="center">Student's Personal Data</p><br /> 
    <table class="table">
     <tr>  
                         <th>Full Name</th> 
                         <th>Age</th>  
                         <th>Sex</th>
                         <th>Curriculum Year</th>
                         <th>School Year</th>
                         <th>Date Registered</th>
                         <th>Date of Birth</th>
                         <th>Place Of Birth</th>
                         <th>Father's Name</th>
                         <th>Occupation</th>
                         <th>Mother's Name</th>
                         <th>Occupation</th>
                         <th>Parent's Address</th>
                         <th>Guardian's Name</th>
                         <th>Occupation</th>
                         <th>Guardian's Address</th>
                         <th>Elementary Course Completed</th>
                         <th>School Year</th>
                         <th>Address</th>
                         <th>Last School Attended</th>
                         <th>School Year</th>
                         <th>Address</th>
                         <th>Student's Status</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  

        echo '  
       <tr>  
          <td>'.$row["stud_name"].'</td>  
          <td>'.$row["age"].'</td>  
          <td>'.$row["sex"].'</td>
          <td>'.$row["curr_yr"].'</td>
          <td>'.$row["curr_sy"].'</td> 
          <td>'.$row["date_reg"].'</td> 
          <td>'.$row["date_birth"].'</td>
          <td>'.$row["place_birth"].'</td>
          <td>'.$row["father_name"].'</td>
          <td>'.$row["father_occ"].'</td>
          <td>'.$row["mother_name"].'</td>
          <td>'.$row["mother_occ"].'</td>
          <td>'.$row["parents_addr"].'</td>
          <td>'.$row["guardian_name"].'</td>
          <td>'.$row["guardian_occ"].'</td>
          <td>'.$row["guardian_addr"].'</td>
          <td>'.$row["elem"].'</td>
          <td>'.$row["elem_sy"].'</td>
          <td>'.$row["elem_addr"].'</td>
          <td>'.$row["last_school_attend"].'</td>
          <td>'.$row["last_school_sy"].'</td>
          <td>'.$row["last_school_addr"].'</td>
          <td>'.$row["student_status"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Download as EXCEL (.xls)" />
    </form>
    <form method="post" action="pni_confirmation.php">
     <input type="submit" name="back" class="btn btn-success" value="Go Back" />
    </form>
   </div>  
  </div>  
      <br>
    <br>
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
