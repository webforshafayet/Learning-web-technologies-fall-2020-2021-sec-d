<?php
session_start();
require_once('../view/header.php');
 
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){

	if(empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email']) ||empty($_POST['type']))
	{
		echo'<p class="form-forget">please Insert data in every field</p>';

	}

	else{
		$id = $_REQUEST['id'];
         
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
		$type = $_REQUEST['type'];
	
		header('location:verify_user.php?msg=invalid');
		 
$user = [
    'id'=> $id,
    'username'=> $username,
    'password'=> $password,
    'email'=> $email,
    'type'=> $type
];

insertverifiedUsers($user);

	}
	
        
}

 
	 
?>

 
<!DOCTYPE html>
<html>
<head>
	<title>insert verified id</title>
	<link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
	<form method="post" action="">
	 
		 
			<h2>Insert new verified user </h2>
			<table>
				
				 
				<tr >
					<td>Username</td>
					<td><input type="text" id="username" name="username" onkeyup="f2()"></td>
					<td><p id="Username" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" onkeyup="f3()"></td>
					<td><p id="passwordjs" class="form-forget"> </p></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" id="email" name="email" onkeyup="f4()"></td>
					<td><p id="emailjs" class="form-forget"> </p></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><select name="type" >
				    <option value="User" selected>User</option>
				    <option value="Company user">Company user</option>
                     
			        </select> <br></td>
				</tr>
				 <br>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="Add"></td>
                     
				</tr>
			</table>
		 
		<h3 align="left"><a href="Verify_user.php"> <input type="button" value="Back"  ></a> </h3>
 
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>

		 
	</form>
	<script type="text/javascript" src="../Asset/js/script.js"></script>
</body>
</html>