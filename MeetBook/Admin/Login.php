<?php

if(isset($_REQUEST['msg'])){
    if($_REQUEST['msg'] == 'null'){
        echo "null submission...";
    }

    if($_REQUEST['msg'] == 'invalid'){
        echo "invalid username/password";
    }

    if($_REQUEST['msg'] == 'login_first'){
        echo "please login first...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/login.css">
    <title>Login</title>
</head>
<body>
<div class="form">
        <form method="post" action="/github sec d/MeetBook/Admin/Php_only/loginCheck.php"> 
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <!--<img src="./Asset/meet (4).png" alt="" height="150px"> -->
                        
                         
                            <h2>LOGIN</h2>

                             

                              
                            User Id<br/>
                            <input type="text" id="username" name="name" value="" required  onkeyup="f5()">
                            <p id="Username" class="form-forget"> </p>                             
                            Password<br/>
                            <input type="password" id="password" name="password" value="" required  onkeyup="f6()">
                            <p id="passwordjs" class="form-forget"> </p>  
                            <hr/>
                             <input type="submit" name="submit" value="Login" required> 

                             <br>
                             <br>  

                             <p class="form-forget">
                             <?php
                                if(isset($_REQUEST["wrong_information"]))
                                {
                                    echo "Your username password is wrong";
                                    

                                }
                                ?>

                             </p>
                              
                                  
                             
                        
                    </td>
                </tr>
   
                                             
            </table>

        </form>
        <script type="text/javascript" src="Asset/js/script.js"></script>

         

         
 </div>
  
         
</body>
</html>

 