<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
		
		if($email== ""){
			echo " field required...";
		}else{
			$data = $email;
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="email" value="<?=$data ?>"><br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>