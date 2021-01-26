<?php

require_once('../view/header.php');
 
require_once('../models/usersService.php');
 

$id = $_GET['id'];
 $userlist =  deleteverifiedUsers($id);

 if($userlist){
      
    header('location:../view/Verify_user.php');
}else{
    echo "sbjsbf";
     
}
	 
?>