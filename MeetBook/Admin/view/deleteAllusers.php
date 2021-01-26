<?php

require_once('../view/header.php');
 
require_once('../models/usersService.php');
 

$id = $_GET['id'];
 $userlist =  deleteAllUsers($id);

 if($userlist){
      
    header('location:../view/View_users.php');
}else{
    echo "sbjsbf";
     
}
	 
?>