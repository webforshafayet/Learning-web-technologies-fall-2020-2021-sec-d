<?php
 session_start();
 
 require_once('../view/header.php');
 
 require_once('../models/usersService.php');

 $samassage = samassage();
 $tosamassage=tosamassage();
 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message super admin</title>
    <link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
    <form method="post" action=""> 
   <!-- saw super_admin msg from txt file -->
     
    <h3>Super Admin:</h2><textarea name="name" rows="10" cols="120" required>

    <?php 
			for($i=0; $i < count($samassage); $i++) {
               // echo "Superadmin:::";
		?>   
<?= ' Superadmin:::'.$samassage[$i]['massage'] ?>
 
		<?php } ?>
 
    <?php
        /*  $myfile = fopen("msgSA_to_A.txt", "r") or die("Unable to open file!");
        
        while(!feof($myfile)) {
        echo fgets($myfile) ;
        }
        fclose($myfile);*/
    ?>
    </textarea>
<!-- saw admin msg from txt file -->
    <h3 align="right"><?php echo $_COOKIE["flag"] ;?>:</h3> <p align="right">  <textarea name="name" rows="10" cols="120" required> 
    <?php 
			for($i=0; $i < count($tosamassage); $i++) {
               // echo "Superadmin:::";
		?>   
<?= ' Admin:::'.$tosamassage[$i]['massage'] ?>
 
		<?php } ?>
    
    <?php
        /* $myfile = fopen("msgA_to_SA.txt", "r") or die("Unable to open file!");
        
        while(!feof($myfile)) {
        echo fgets($myfile) ;
        }
        fclose($myfile);*/
    ?></textarea><br>

<!-- take input which going to txt file -->
        Masssage: <textarea name="massage" rows="2" cols="40" ></textarea>
        <input type="submit" name="submit" value="Submit">
    <?php

if(isset($_REQUEST['submit']))
{
    if(empty($_POST['massage']))
        {
            
            echo'<p class="form-forget">Enter your message first</p>';

        }
        else{
            $id = $_REQUEST['id'];
            $massage = $_REQUEST['massage'];	 
            $user = [
                  
            'massage'=> $massage
        ];
            sendtosamassage($user);
            header('location:Message_super_admin.php?msg=invalid');
        }
      
     
}
     /*$myfile = fopen("msgA_to_SA.txt", "a") or die("Unable to open file!");
    $txt = "\n";
     
    if(isset($_REQUEST['submit']))
    {
		$name = $_REQUEST['name'];
		fwrite($myfile,"\n ADMIN--".$_REQUEST['name']);
        
	}
    fclose($myfile);*/

 
    

    ?>

     
     
     <h1 align="left"> <a href="Admin.php"><input type="button" value=" Back"></a></h1>
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>

     <center>
     <?php require 'footer.php';?>
     </center>
  
    </form>


</body>
</html>