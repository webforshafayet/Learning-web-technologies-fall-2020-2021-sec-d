<?php	 

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		
		if($name == ""){
			echo " field required...";
		}else{
			echo $_REQUEST['name'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" value="">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>