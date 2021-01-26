<?php
/*
session_start();

	if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $password = $_REQUEST['password'];
	 

		if(empty($name) || empty($password)){
            echo " field required...";
            header('location: ../Login.php?msg=null_login');
            
		}else{

			$myfile = fopen("adminUserId.txt", "r") or die("Unable to open file!");
        
			while(!feof($myfile)) {
			$line1=fgets($myfile) ;
			}
			fclose($myfile);

			$myfile = fopen("adminUserPassword.txt", "r") or die("Unable to open file!");
        
			while(!feof($myfile)) {
			$line2=fgets($myfile) ;
			}
			fclose($myfile);


			if($name == $line1 && $password==$line2){

				$_SESSION['name']= $name;
				$_SESSION['password']= $password;
				setcookie('flag', $name, time()+(30*86400), '/');
				 
				 

				 
				header('location: ../PHP/Admin.php?msg=admin_page');
			}else{
				header('location: ../Login.php?wrong_information');
			 	 
			}

            
		}
	}else{
		header('location: ../Login.php');
	}
	
	

session_start();
require_once('../models/usersService.php');

if(isset($_REQUEST['submit'])){
	$username = $_REQUEST['name'];
	$password = $_REQUEST['password'];
 

	if(empty($username) || empty($password)){
		echo " field required...";
		header('location: ../Login.php?msg=null_login');
	}else{

		$user = [
			'username'=> $username,
			'password'=> $password
		];

		$status = validate($user);

		if($status){

			echo " field requiredsqq...";
			setcookie('flag', $username, time()+3600, '/');
			header('location: ../PHP/Admin.php?msg=admin_page');
		}else{
			header('location: ../Login.php?wrong_information');
		}
	}
}else{
	header('location: ../Login.php');
}*/

session_start();
require_once('../models/usersService.php');

	if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['name'];
        $password = $_REQUEST['password'];
	 

		if(empty($username) || empty($password)){
            echo " field required...";
            header('location: ../Login.php?msg=null_login');
            
		}

	
			else{

				$user = [
					'username'=> $username,
					'password'=> $password
				];
	
				$status = validate($user);
				$_SESSION['flag'] = "true";
				$_SESSION['username'] = $username;
	
				if($status){
					setcookie('flag', $username, time()+(30*86400), '/');
					header('location: ../view/Admin.php?msg=admin_page');
				}
			
			else{
				header('location: ../Login.php?wrong_information');
			 	 
			}

            
		}
	}else{
		header('location: ../Login.php');
	}
	
?> 
 