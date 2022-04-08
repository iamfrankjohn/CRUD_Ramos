<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
</head>
<body>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage Users</h2>
					</div>
					<div class="col-sm-6">
						<a href="#addUserModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New User</span></a>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

						<th>ID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
						<th>UserName</th>
                        <th>Password</th>
                        <th>CreateDate</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($con,"SELECT * FROM user");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["firstname"]; ?></td>
					<td><?php echo $row["lastname"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["password"]; ?></td>
					<td><?php echo $row["createdate"]; ?></td>
					<td>
						<a href="#editUserModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-firstname="<?php echo $row["fisrtname"]; ?>"
							data-lastname="<?php echo $row["lastname"]; ?>"
							data-username="<?php echo $row["username"]; ?>"
							data-password="<?php echo $row["password"]; ?>"
							data-password="<?php echo $row["createdate"]; ?>"
							title="Edit"></i>
						</a>
						<a href="#deleteUserModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>FIRST NAME</label>
							<input type="text" id="name" name="fname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>LAST NAME</label>
							<input type="text" id="name" name="lname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>USERNAME</label>
							<input type="phone" id="phone" name="uname" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PASSWORD</label>
							<input type="city" id="city" name="pass" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="submit" class="btn btn-default" name="Submit" value="Add">Add</button>
					</div>
				</form>

				<?php

	if(isset($_POST['Submit'])) {
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$user_name = $_POST['uname'];
		$user_pass = $_POST['pass'];

		// include database connection file
		include_once("database.php");

		// Insert user data into table
		$result = mysqli_query($con, "INSERT INTO user(firstname,lastname,username,password) VALUES('$first_name','$last_name','$user_name','$user_pass')");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>


			</div>
		</div>
	</div>


	<!-- Edit Modal HTML -->
	<div id="editUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name_u" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>PHONE</label>
							<input type="phone" id="phone_u" name="phone" class="form-control" required>
						</div>
						<div class="form-group">
							<label>City</label>
							<input type="city" id="city_u" name="city" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>    