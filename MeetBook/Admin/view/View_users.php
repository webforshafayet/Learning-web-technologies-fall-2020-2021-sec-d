<?php

 session_start();

 require_once('../view/header.php');
 
 require_once('../models/usersService.php');
 $userlist = getAllUsers();
 if(isset($_REQUEST['submit']))
{
     header('location:post.php?msg=invalid');
    
}
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Asset/login.css">
    <title>View Users</title>
    
</head>
<body class="rr">
<form method="post" >
     
         
                   
<h2>Search By id</h2>

<form action=""> 
   
  <input type="text"  onchange="showalluser(this.value)">
		<input type="button" value="Search" >
   
</form>
<br>
<div id="txtHint"><h4>User info will be listed here...</h4> </div>


        <fieldset> 
     <center> 
     <h3>Users List:</h3>   
     <p align="right"><a href="createAlluser.php"> <input type="button" value="create user"  ></a> </p>
     <p align="right"><a href="../Php_only/jsonalluser.php"> <input type="button" value="Create dynamic json file"  ></a> <br>
     <?php
                                if(isset($_REQUEST["wrong_information"]))
                                {
                                    
                                    echo'<p class="form-forget">New dynamic json file has been already created in Asset folder</p>..<a href="../Asset/user.json" target="_blank"> <input type="button" value="All user list in json"  ></a>';
                                    

                                }
                                ?></p>
      
        <table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
			<td>Action</td>
        </tr>
        
        

        <?php 
         
			for($i=0; $i < count($userlist); $i++) {
		?>
				<tr>
					<td><?= $userlist[$i]['id'] ?></td>
					<td><?= $userlist[$i]['username'] ?></td>
					<td><?= $userlist[$i]['password'] ?></td>
					<td><?= $userlist[$i]['email'] ?></td>
					<td><?= $userlist[$i]['type'] ?></td>
			
                    <td>
						<a href="editalluser.php?id=<?= $userlist[$i]['id']  ?>&username=<?= $userlist[$i]['username']   ?>&password=<?= $userlist[$i]['password']  ?>&email=<?= $userlist[$i]['email']  ?>&type=<?= $userlist[$i]['type']  ?>"> EDIT</a> |
						<a href="deleteAllusers.php?id=<?= $userlist[$i]['id']  ?>"> DELETE</a> 
					</td>
                    
                </tr>
                
                 
                

        <?php } ?>

         
        
        </center>
         
   
    
        
 
 <?php
    /* $myfile = fopen("viewUsers.txt", "r") or die("Unable to open file!");
     
     while(!feof($myfile)) {
     echo fgets($myfile) ;
     }
     fclose($myfile);*/
 ?>
         

     
    </table>
         </fieldset>
         
          
         <h3 align="left"><a href="Admin.php"> <input type="button" value="Back"  ></a> </h3>
 
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>
     <center>
     <?php require 'footer.php';?>
     </center>
 
            </form>



 

<script type="text/javascript" src="../Asset/js/script.js"></script>
        </body>
</html>