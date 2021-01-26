<?php
 session_start();
 require_once('../view/header.php');
 
 require_once('../models/usersService.php');
 $commentAdminpost=commentAdminpost();
 $userlist = getAdminPost();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Asset/login.css">
    <title>Post</title>
     
</head>
<body>
<form method="post" >
 
    <?php
    if(isset($_REQUEST['submit']))
    {
    if(empty($_POST['massage']))
        {
            echo'<p class="form-forget">Enter your Comment first</p>';

        }
        else
        {
            
        
                // $id = $_REQUEST['id'];
                 $massage = $_REQUEST['massage'];	 
                 $user = [
                     
                 'massage'=> $massage
             ];
             commentToAdminpost($user);
             
            header('location:Post.php?msg=invalid');
        }
     
}

    /*$myfile = fopen("PostComment.txt", "a") or die("Unable to open file!");//rewrite into comment section
    $txt = "\n";
     
    if(isset($_REQUEST['submit']))//input new comment to file
    {
		$name = $_REQUEST['name'];
		fwrite($myfile,"\n Admin---".$_REQUEST['name']);//show admin box
	 
	}
    fclose($myfile);*/

      // validation new comment



      

      
    
    ?>

<table border="1">
		 


        
         

         

     
    </table>

    <h3><?php echo $_COOKIE["flag"] ;?> Post:</h3>
    <a href="CreateAdminPost.php"><input type="button" value="new post"> </a>
        <fieldset name="name" rows="10" cols="120" required>
             <?php 
         
			for($i=0; $i < count($userlist); $i++) {
		?>
				<tr>
					 
                    
                    <textarea rows="10" cols="220"><?= $userlist[$i]['post'] ?></textarea>
					 
			
                     
	   |
                    <a href="editAdminPost.php?id=<?= $userlist[$i]['id']  ?>&post=<?= $userlist[$i]['post'] ?>"><input type="button" value="EDIT"></a>
                    <a href="deleteAdminPost.php?id=<?= $userlist[$i]['id']  ?>"><input type="button" value="delete"></a>	 
					 
                </tr>
                
                 
                

        <?php } ?>

        <?php
     /*$myfile = fopen("Post.txt", "r") or die("Unable to open file!");
     
     while(!feof($myfile)) {
     echo fgets($myfile) ;
     }
     fclose($myfile);*/
 ?>
        </fieldset>

        <h3>All Comments: </h3>
       <!-- <textarea name="name" rows="10" cols="120" required>-->
        <?php 
			/*for($i=0; $i < count($commentAdminpost); $i++) {
               // echo "Superadmin:::";
        ?>         
<?= ' Admin:::'.$commentAdminpost[$i]['massage'] ?> 
        <?php } */
        ?>
         
 
 <?php
    /* $myfile = fopen("PostComment.txt", "r") or die("Unable to open file!");
     
     while(!feof($myfile)) {
     echo fgets($myfile) ;
     }
     fclose($myfile);//comnt showw*/
 ?>
<table border="0">
<tr>
			 
        </tr>
        
        

        <?php 
         
			for($i=0; $i < count($commentAdminpost); $i++) {
		?>
				<tr  >
					 
					<td><?= $commentAdminpost[$i]['massage'] ?></td>
					 
			
                    <td>
                    <a href="editadmincomment.php?id=<?= $commentAdminpost[$i]['id']  ?>&massage=<?= $commentAdminpost[$i]['massage']   ?>"> EDIT</a> |
 
						<a href="deleteAdmincomment.php?id=<?=$commentAdminpost[$i]['id']  ?>"> DELETE</a> 
					</td>
                    
                </tr>
            
        <?php } ?>
            </table>
    
    <h4>Comment:</h4>  <textarea id="username" name="massage" rows="3" cols="40" onkeyup="f10()"></textarea>
    <td><p id="Username" class="form-forget"> </p></td>
        <input type="submit" name="submit" value="Submit"><br>
 
 <a href="Admin.php"><input type="button" value=" Back"></a>
     
     
 
     <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>
     <center>
     <?php require 'footer.php';?>
     </center>
 
            </form>
            <script type="text/javascript" src="../Asset/js/script.js"></script>
        </body>
</html>