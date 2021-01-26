<?php

require_once('../view/header.php');
 
require_once('../models/usersService.php');
 

$id = $_GET['id'];
 $userlist =  deleteAdminPost($id);

 if($userlist){
      
    header('location:../view/Post.php');
}else{
    echo "sbjsbf";
     
}
	 
?>