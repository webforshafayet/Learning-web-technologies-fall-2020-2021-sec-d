<?php
require_once('../models/usersService.php');
if(isset($_REQUEST['submit'])){

    if(empty($employeeName) || empty($username) || empty($contactNo) || empty($password)){
        //echo "null submission";
        header('location: ../view/login.php?msg=null');
    }else{
        $employeeName = $_REQUEST['employeeName'];
         
        $contactNo = $_REQUEST['contactNo'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
		 
$user = [
    'employeeName'=> $employeeName,
    'contactNo'=> $contactNo,
    'username'=> $username,
    'password'=> $password
     
    
];

insertUsers($user);
}}

 
	 
?>

 
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="">
	<center>
		<fieldset>
			<legend>Insert</legend>
			<table>
				
				<tr>
					<td>employeeName</td>
                    <td><input type="text" name="employeeName"></td>
                    
				</tr>
				<tr>
					<td>contactNo</td>
					<td><input type="text" name="contactNo"></td>
                </tr>
                <tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				
				
				<tr><td></td><td><hr><hr></td></tr>
				<tr>
					<td></td>
                    <td><input type="submit" name="submit" value="Add"></td>
                   
				</tr>
			</table>
		</fieldset>

		</center>
	</form>
</body>
</html>