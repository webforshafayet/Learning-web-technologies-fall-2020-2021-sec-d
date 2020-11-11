<?php
	$dd=$_POST['dd'];
	$mm=$_POST['mm'];
	$yy=$_POST['yy'];

	if($dd>31 || $dd<1){
		header('location:4A.php?msg=errorinput');
	}
	else{
		echo $dd;
	}

	echo "/";

	if($mm>12 || $mm<1){
		header('location:4A.php?msg=errorinput');
	}
	else{
		echo $mm;
	}

	echo "/";

	if($yy>=1900 && $yy<=2016){
		echo $yy;
	}
	else{
		header('location:4A.php?msg=errorinput');
	}

?>