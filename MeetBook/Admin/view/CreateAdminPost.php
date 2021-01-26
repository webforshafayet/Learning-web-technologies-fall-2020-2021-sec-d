<?php
 session_start();
 

 require_once('../view/header.php');
 
 require_once('../models/usersService.php');


 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Admin Post</title>
    <link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
    <form method="post" action=""> 
  
<!-- saw admin msg from txt file -->
    <h3 ><?php echo $_COOKIE["flag"] ;?> post:</h3> <p >   
<!-- take input which going to txt file -->
        <h3>Write new post:</h3>  <textarea id="username" name="post" rows="10" cols="120" onkeyup="f9()"></textarea>
        <td><p id="Username" class="form-forget"> </p></td>
        <input type="submit" name="submit" value="Submit">
        <?php
        if(isset($_REQUEST['submit']))
        {
            if(empty($_POST['post']))
                {
                    echo'<p class="form-forget">please Insert something first</p>';
        
                }
                else
                {
                    $id = $_REQUEST['id'];
                    $post = $_REQUEST['post'];	 
                    $user = [
                          
                    'post'=> $post
                ];
                insertAdminPost($user);
                header('location:post.php?msg=invalid');
        
                }
              
            
        }
        ?>
    <?php

 
     /*$myfile = fopen("msgA_to_SA.txt", "a") or die("Unable to open file!");
    $txt = "\n";
     
    if(isset($_REQUEST['submit']))
    {
		$name = $_REQUEST['name'];
		fwrite($myfile,"\n ADMIN--".$_REQUEST['name']);
        
	}
    fclose($myfile);*/

 
    

    ?>

     
     
     <h1 align="left"> <a href="post.php"><input type="button" value=" Back"></a></h1>
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>

     <center>
     <?php require 'footer.php';?>
     </center>
  
    </form>
    <script type="text/javascript" src="../Asset/js/script.js"></script>


</body>
</html>