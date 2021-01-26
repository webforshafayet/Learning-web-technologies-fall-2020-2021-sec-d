<?php
require_once('../php/header.php');
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){
$username = $_GET['username'];
 $userlist = updateUsers($id);
}	 
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<form method="post" action="">
	<center>
		<fieldset>
			<legend>Updated</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="employeeName"  ></td>
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
					<td><input type="text" name="contactNo"></td>
				</tr>
				 
				<tr><td></td><td><hr><hr></td></tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="update"></td>
                    <a href="userlist.php">User List</a> |
				</tr>
			</table>
		</fieldset>

		</center>
	</form>
</body>
</html>