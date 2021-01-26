<?php
session_start();
require_once('../view/header.php');
 
require_once('../models/usersService.php');



if(isset($_REQUEST['submit'])){
	if(empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email']) ||empty($_POST['type']))
	{
		 
		echo'<p class="form-forget">please Insert data in every fieldt</p>';

	}
	else{
		$userlist = updateverifiedUsers();

 header('location:Verify_user.php?msg=invalid');

	}
  
}
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>update verify user</title>
	<link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
	<form method="post" action="">
	<center>
		 
		<h3>Update verify user</h3>
			 
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"  value="<?php echo  $_GET['id']; ?>"></td>
					
					 
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username"    value="<?php echo  $_GET['username']; ?>" onkeyup="f2()"></td> 
					<td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" value="<?php echo  $_GET['password']; ?>" onkeyup="f3()"></td>
					<td><p id="passwordjs" class="form-forget"> </p></td>
				</tr>
				
				<tr>
					<td>Email</td>
					 
					<td><input type="email" id="email"  name="email" value="<?php echo  $_GET['email']; ?>" onkeyup="f4()"></td>
					<td><p id="emailjs" class="form-forget"> </p></td>
					
				</tr>
				<tr>
					<td>Type</td>
					<td><select name="type" >
				    <option value="user" selected>User</option>
				    <option value="Company User" >Company User</option>
			        </select> <br> </td>
				</tr>
			 
				<tr><td></td><td><hr><hr></td></tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update" ></td>
					 

				</tr>
				
			</table>
		 
		<h3 align="left"><a href="Verify_user.php"> <input type="button" value="Back"  ></a> </h3>
 
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>

		</center>

	</form>
	<script type="text/javascript" src="../Asset/js/script.js"></script>
</body>
</html>