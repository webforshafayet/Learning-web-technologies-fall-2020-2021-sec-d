<?php
require_once('../php/header.php');
require_once('../models/usersService.php');
$id = $_GET['id'];
 $userlist =  deleteUsers($id);

 if($userlist){
      
    header('location:userlist.php');
}else{
     
}
	 
?>