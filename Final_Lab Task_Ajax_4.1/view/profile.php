<?php
	session_start();

	if(isset($_SESSION['flag']))

?>
<center>
	<table border="1" cellpadding="5" cellspacing="0">

		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td>16-10101-2</tr>
		<tr><td>NAME</td><td>Bob</td></tr>	
		<tr><td>USER TYPE</td><td>Admin</td></tr>
		<tr><td colspan="2" align="right"><a href="admin_home.php">Go Home</a></td></tr>
		
	</table>			
</center>
<?php

	}else{
		header('location: login.php?msg=login_first');
	}

?>