<?php

require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from adminlogin where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}

	function  getprofileinfo(){
		$conn = getConnection();
		$sql = "select * from adminprofile";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;


	}  


	function updateAdminProfile()
	{
		$conn = getConnection();

		$id = $_POST['id'];
	$post = $_POST['post'];
	 
	

	$sql ="update adminprofile set post='$post' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}
	function  getAdminPost(){
		$conn = getConnection();
		$sql = "select * from adminpost";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;


	}


	function updateAdminPost()
	{
		$conn = getConnection();

		$id = $_POST['id'];
	$post = $_POST['post'];
	 
	

	$sql ="update adminpost set post='$post' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}

	function deleteAdminPost($id){
		$conn = getConnection();
		$sql = "delete from adminpost where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function insertAdminPost($user){

		$conn = getConnection();
		$sql = "insert into adminpost values('','{$user['post']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
	 
	function commentAdminpost(){
			
		$conn = getConnection();
		$sql = "select * from commentAdminpost";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;

	}
	function commentToAdminpost($user){

		$conn = getConnection();
		$sql = "insert into commentAdminpost values('','{$user['massage']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
	function deleteAdmincomment($id){
		$conn = getConnection();
		$sql = "delete from commentadminpost where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}
	function updateAdmincomment()
	{
		$conn = getConnection();

		$id = $_POST['id'];
	$massage= $_POST['massage'];
	 
	

	$sql ="update commentadminpost set massage='$massage' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}

	function samassage(){
			
		$conn = getConnection();
		$sql = "select * from samassage";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;

	}
	function tosamassage(){
			
		$conn = getConnection();
		$sql = "select * from tosamassage";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;

	}

	function sendtosamassage($user){

		$conn = getConnection();
		$sql = "insert into tosamassage values('','{$user['massage']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}

	function usermassage(){
			
		$conn = getConnection();
		$sql = "select * from usermassage";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;

	}
	function tousermassage(){
			
		$conn = getConnection();
		$sql = "select * from tousermassage";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;

	}

	function sendtousermassage($user){

		$conn = getConnection();
		$sql = "insert into tousermassage values('','{$user['massage']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
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


	function getAllverifiedUsers(){

		$conn = getConnection();
		$sql = "select * from verifieduserid";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}
	
	function updateverifiedUsers(){

		$conn = getConnection();

		$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	

	$sql ="update verifieduserid set username='$username', password='$password', email='$email', type='$type' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}
	function insertverifiedUsers($user){

		$conn = getConnection();
		$sql = "insert into verifieduserid values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}




	function deleteverifiedUsers($id){
		$conn = getConnection();
		$sql = "delete from verifieduserid where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}
	 

	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from viewalluser";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}

	function updateAllUsers(){

		$conn = getConnection();

		$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$type = $_POST['type'];

	

	$sql ="update viewalluser set username='$username', password='$password', email='$email', type='$type' WHERE id='$id'";
	$result = mysqli_query($conn, $sql);
		

		 
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}

	}
	function insertAllUsers($user){

		$conn = getConnection();
		$sql = "insert into viewalluser values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}




	function deleteAllUsers($id){
		$conn = getConnection();
		$sql = "delete from viewalluser where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers($id){

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