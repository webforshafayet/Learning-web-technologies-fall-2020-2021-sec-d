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
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from users where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers(){

		$conn = getConnection();
		//$sql ="update users set id='{$user['id']}' and username='{$user['username']}' and password='{$user['password']}' and email='{$user['email']}' and type='{$user['type']}' where id='{$user['id']}'";
		//$sql ="update users set username='$username', password='$password', email='$email', type='$type' WHERE id='$id'";
		//$sql ="update users set username='$username', password='$password', email='$email', type='$type' WHERE id='$id'";

		$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	

	$sql ="update users set username='$username', password='$password', email='$email', type='$type' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}

?>