<?php
require_once('../php/header.php');
require_once('../models/usersService.php');
$username = $_GET['username'];
 $userlist =  deleteUsers($username);

 if($userlist){
      
    header('location:userlist.php');
}else{
     
}
	 
?>