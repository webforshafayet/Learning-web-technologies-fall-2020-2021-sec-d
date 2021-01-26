<?php
    session_start();
    require_once('../view/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home</title>
    <link rel="stylesheet" href="../Asset/login.css">
</head>
<body>
    <form>
  
         

      </form> 
    <center>

         

        <h3>Welcome <?php echo $_COOKIE["flag"] ;?> </h3>

        
          <a href="Profile.php"> <img src="../Asset/img/admin.png" alt="profile"   height="200" align="center"></a> <br><a href="Profile.php"><input type="button" value="Profile"  ></a>
        <br/><br/>
        <a href="View_users.php"><img src="../Asset/img/user2.png" alt="user"   height="200" align="center"></a> <br><a href="View_users.php"><input type="button" value="View Users"  ></a>
         
        <br/><br/>
        <a href="./Post.php"><img src="../Asset/img/post.png" alt="post"   height="200" align="center"> </a><br><a href="./Post.php"><input type="button" value="Post"  ></a>
        <br/><br/>
        <a href="./Message_super_admin.php"> <img src="../Asset/img/msg1.png" alt="msg"   height="200" align="center"></a> <br><a href="./Message_super_admin.php"><input type="button" value="Messege with Super-Admin"  > </a>
        <br/><br/>
        <a href="./Message_user.php"> <img src="../Asset/img/msg2.png" alt="msg"   height="200" align="center"> </a><br><a href="./Message_user.php"><input type="button" value="Messege with User/Company user"  > </a>
        <br/><br/>
        <a href="./Verify_user.php"> <img src="../Asset/img/verify.png" alt="verification"   height="200" align="center"> </a><br><a href="./Verify_user.php"><input type="button" value="Verify User ID"  > </a>
        <br/><br/>
        <a href="./logout.php"> <img src="../Asset/img/logout.png" alt="Logout"   height="200" align="center"></a> <br><a href="./logout.php"><input type="button" value="Logout"  > </a> 
        <?php require 'footer.php';?>

         

         
         

         
    </center>
</body>
</html>