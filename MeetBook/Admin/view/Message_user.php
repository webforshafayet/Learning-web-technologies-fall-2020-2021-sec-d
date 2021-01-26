<?php

  session_start();
 require_once('../view/header.php');
 
 require_once('../models/usersService.php');

 $usermassage = usermassage();
 $tousermassage=tousermassage();
 	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message user</title>
    <link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
    <form method="post" action=""> 
     <!-- user msg from txt file -->
     
    <h3>User:</h2><textarea name="name" rows="10" cols="120" required>

    <?php 
			for($i=0; $i < count($usermassage); $i++) {
               // echo "Superadmin:::";
		?>   
<?= ' User:::'.$usermassage[$i]['massage'] ?>
 
		<?php } ?>

    <?php
    
        /*$myfile = fopen("msgU_to_A.txt", "r") or die("Unable to open file!");
        
        while(!feof($myfile)) {
        echo fgets($myfile) ;
        }
        fclose($myfile);*/
    ?>
    </textarea>
<!-- saw admin msg from txt file -->
    <h3 align="right"><?php echo $_COOKIE["flag"] ;?>:</h3> <p align="right">  <textarea name="name" rows="10" cols="120" required> 
    <?php 
			for($i=0; $i < count($tousermassage); $i++) {
               // echo "Superadmin:::";
		?>   
<?= ' Admin:::'.$tousermassage[$i]['massage'] ?>
 
		<?php } ?>
    
    <?php
       /* $myfile = fopen("msgA_to_U.txt", "r") or die("Unable to open file!");
        
        while(!feof($myfile)) {
        echo fgets($myfile) ;
        }
        fclose($myfile);*/
    ?></textarea><br>

<!-- take input which going to txt file -->
<h4>new Masssage:</h4><textarea name="massage" rows="2" cols="40" ></textarea>
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
    
        sendtousermassage($user);
        header('location:Message_user.php?msg=invalid');

        }
        
         
    }
    /*$myfile = fopen("msgA_to_U.txt", "a") or die("Unable to open file!");
    $txt = "\n";
     
    if(isset($_REQUEST['submit']))
    {
		$name = $_REQUEST['name'];
		fwrite($myfile,"\n ADMIN--".$_REQUEST['name']);	 
	}
    fclose($myfile);*/
      // validation 

    
    ?>
     
     <h1 align="left"> <a href="Admin.php"><input type="button" value=" Back"></a></h1>
 
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>
     <center>
     <?php require 'footer.php';?>
     </center>
  
    </form>


</body>
</html>