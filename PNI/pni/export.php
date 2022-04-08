<?php
include("auth.php");
?>


<?php  
$connect = mysqli_connect("localhost","root","","pni_students_database");
$output = '';

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM `students_info` ORDER BY `curr_label`, `stud_name`";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
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
                         <th>Father&#39;s Name</th>
                         <th>Occupation</th>
                         <th>Mother&#39;s Name</th>
                         <th>Occupation</th>
                         <th>Parent&#39;s Address</th>
                         <th>Guardian&#39;s Name</th>
                         <th>Occupation</th>
                         <th>Guardian&#39;s Address</th>
                         <th>Elementary Course Completed</th>
                         <th>School Year</th>
                         <th>Address</th>
                         <th>Last School Attended</th>
                         <th>School Year</th>
                         <th>Address</th>
                         <th>Student&#39;s Status</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=pni_database_enrolled_students.xls');
  echo $output;
 }
}
?>
