<?php
	require_once('../models/usersService.php');
	if(isset($_REQUEST['submit'])){

		$id =$_REQUEST['id'];
		$password = $_REQUEST['password'];
		$conpassword = $_REQUEST['conpasswod'];
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$type = $_REQUEST['user_type'];

		$user = [
			    'id' => $id,
			    'password'=> $password,
			    'conpasswod'=> $conpassword,
				'name'=> $name,
				'email'=>$email,
				'user_type'=> $type
			];
	insertUsers($user);
	echo "Registration done !";

}
?>
<center>
<form method="POST" action="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id" value=""><br/>
					Password<br/><input type="password" name="password" value=""><br/>
					Confirm Password<br/><input type="password" value=""><br/>
					Name<br/><input type="text" name="name" value=""><br/>
					Email<br/><input type="text" name="email" value=""><br/>
					User Type<br/>
				    <select name="user" >
				    <option value=""selected >User</option>
				    <option value="">Admin</option>
					</select> <br>
			        <hr>
					<input type="submit" value="Register">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>

	