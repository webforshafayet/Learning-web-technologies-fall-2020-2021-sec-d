<?php
session_start();
require_once('../view/header.php');
 
require_once('../models/usersService.php');



if(isset($_REQUEST['submit'])){

	if(empty($_POST['post']))
        {
			//echo "please update something first";
			echo'<p class="form-forget">please Insert something first</p>';

		}
		else{
			$userlist = updateAdminPost();
		
			header('location:post.php?msg=invalid');
		}
 
}
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit admin post</title>
	<link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
	<form method="post" action="">
	<center>
		 
		<h3>Update post</h3>
			 
			<table>
				<tr>
					<td>post no:</td>
					<td><input type="text" name="id"  value="<?php echo  $_GET['id']; ?>"></td>
				</tr>
				<tr>
					 
					<textarea id="username" name="post"  rows="10" cols="120" onkeyup="f9()" ><?php echo  $_GET['post']; ?></textarea>
					<td><p id="Username" class="form-forget"> </p></td>
				</tr>
			 
				<tr><td></td><td><hr><hr></td></tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="update"></td>

				</tr>
				
			</table>
		 
		<h3 align="left"><a href="post.php"> <input type="button" value="Back"  ></a> </h3>
 
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>

		</center>
	</form>

	<script type="text/javascript" src="../Asset/js/script.js"></script>
</body>
</html>