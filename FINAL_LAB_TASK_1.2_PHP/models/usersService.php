<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into employee values( '{$user['employeeName']}', '{$user['contactNo']}', '{$user['username']}', '{$user['password']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($username){
		$conn = getConnection();
		$sql = "delete from employee where id=$username";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers($username){

		$conn = getConnection();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$contactNo = $_POST['contactNo'];
	$employeeName = $_POST['employeeName'];

	$sql ="update employee set username='$username', password='$password', contactNo=' employeeName', type='employeeName' WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}

?>