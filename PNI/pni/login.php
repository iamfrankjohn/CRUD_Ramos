<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paoay North Institute - LOG IN</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="LOGO.png" rel="icon" sizes="325x325" type="image/png">
<link href="PNI_Online_Enrollment.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">

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
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_Heading3" style="display:inline-block;width:100%;z-index:2;">
<h1 id="Heading3">Paoay North Institute, Inc.<br>ONLINE ENROLLMENT</h1>
</div>
<div id="wb_Image1" style="display:inline-block;width:167px;height:167px;z-index:3;">
<img src="images/LOGO.png" id="Image1" alt="">
</div>
<div id="wb_LayoutGrid9">
<div id="LayoutGrid9">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Login1" style="display:inline-block;width:100%;z-index:1;">
<form action="" method="post">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">ADMIN LOG IN</td>
</tr>
<tr>
   <td class="row"><input class="input" name="user" type="text" required="required" id="username" placeholder="User Name" required></td>
</tr>
<tr>
   <td class="row"><input class="input" name="pass" type="password" required="required" id="password" placeholder="Password" required></td>
</tr>

<tr>
   <td style="text-align:center;vertical-align:bottom"><input type="submit" class="button" title="Log In" name="login" value="LOG IN"></td>
</tr>
</table>
</form>
  <?php
   if (isset($_POST['login']))
      {
         $username = mysqli_real_escape_string($con, $_POST['user']);
         $password = mysqli_real_escape_string($con, $_POST['pass']);
         
         $query      = mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
         $row     = mysqli_fetch_array($query);
         $num_row    = mysqli_num_rows($query);
         
         if ($num_row > 0) 
            {        
               $_SESSION['username'] = $username;
               header("Location: pni_confirmation.php");
               
            }
         else
            {
               function function_alert($message){
                  echo "<script>alert('$message');</script>";
               }

               function_alert("Invalid Username and Password Combination");
               //echo 'Invalid Username and Password Combination';
            }
      }
  ?>

</div>
</div>

<div class="col-3">
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
</div>
</div>
</div>
</div>
</div>
</body>
</html>