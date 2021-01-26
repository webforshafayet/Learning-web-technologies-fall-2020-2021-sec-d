<?php
 session_start();

 require_once('../view/header.php');
 
 require_once('../models/usersService.php');

 $userlist = getprofileinfo();
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> profile</title>
    <link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
      
        
<center> 
       

        <h3 align="left"> 
        <?php
         $connection = mysqli_connect('localhost','root','','meetbook');

         //echo uniqid();
  // echo date("Y-m-d-H-i-s");

            if(isset($_POST['Submit1']))
            { 
                $file_name       =uniqid().date("Y-m-d-H-i-s").str_replace(" ", "_", $_FILES["file"]["name"]); 
            $filepath = "images/" .$file_name ;

            if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
            {
                $sql = "INSERT INTO adminprofilepic (path) VALUES ('$filepath')";
                mysqli_query($connection,$sql);

                $sql = "SELECT * FROM adminprofilepic";
                $obj = mysqli_query($connection,$sql);
                
                echo "<img src=".$filepath." height=200 width=300 />";
            
            } 
            else 
            {
            echo "Error !!";
            }
             
        }
        ?>
         
        </h3>

        <h4 align="left"> Select image :
        <input type="file" name="file"><br/>
        <input type="submit" value="Upload picture" name="Submit1"> <br/></h4> 

         
       
        
       
        <h3><?php echo $_COOKIE["flag"] ;?> Profile:</h3> 



 

          
            
	 
        
        

        <?php 
         
			for($i=0; $i < count($userlist); $i++) {
		?>
				<tr>
					 
                    
            <textarea rows="10" cols="120"><?= $userlist[$i]['post'] ?></textarea>
					 
			
                     
	   |
					<a href="editAdminProfile.php?id=<?= $userlist[$i]['id']  ?>&post=<?= $userlist[$i]['post'] ?>"><input type="button" value="EDIT"></a>	 
					 
                </tr>
                
                 
                

        <?php } ?>

         
        
         
         
   
         

     
     
     
     <?php
         /*$myfile = fopen("profile.txt", "r") or die("Unable to open file!");
         
         while(!feof($myfile)) {
         echo fgets($myfile) ;
         }
         fclose($myfile);*/
     ?>

</center>

             
            <br><a href="Admin.php"><input type="button" value=" Back"></a>
       
         <h3 align="right"><a href="./logout.php"> <input type="button" value="Logout"  ></a> </h3>

            <center>
            <?php include 'footer.php';?>
            </center>
     
    </form>
</body>
</html>