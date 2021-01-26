<?php
require_once('../php/header.php');
require_once('../models/usersService.php');



if(isset($_REQUEST['submit'])){
 $userlist = updateUsers();
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
			<legend>Updated</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"  value="<?php echo  $_GET['id']; ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo  $_GET['username']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?php echo  $_GET['password']; ?>"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo  $_GET['email']; ?>"></td>
				</tr>
				<tr>
					<td>Type</td>
					<td><select name="type" >
				    <option value="user" selected value="<?php echo  $_GET['type']; ?>">User</option>
				    <option value="admin" value="<?php echo  $_GET['type']; ?>">Admin</option>
                    <option value="student" value="<?php echo  $_GET['type']; ?>">Student</option>
			        </select> <br> </td>
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