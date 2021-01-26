<?php
	if(!isset($_COOKIE['flag'])){
		header('location:../Login.php?msg=login_first');
	}
?>
