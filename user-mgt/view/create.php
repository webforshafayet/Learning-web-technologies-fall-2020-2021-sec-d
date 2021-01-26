<?php
require_once('../php/header.php');
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){
	
        $id = $_REQUEST['id'];
         
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
        $type = $_REQUEST['type'];
		 
$user = [
    'id'=> $id,
    'username'=> $username,
    'password'=> $password,
    'email'=> $email,
    'type'=> $type
];

insertUsers($user);
}

 
	 
?>

 
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="">
	<center>
		<fieldset>
			<legend>Insert</legend>
			<table>
				
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><select name="type" >
				    <option value="user" selected>User</option>
				    <option value="admin">Admin</option>
                    <option value="student">Student</option>
			        </select> <br></td>
				</tr>
				<tr><td></td><td><hr><hr></td></tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="Add"></td>
                    <a href="userlist.php">User List</a> |
				</tr>
			</table>
		</fieldset>

		</center>
	</form>
</body>
</html>