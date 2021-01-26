<?php  

function getData()
{
    $connect = mysqli_connect("localhost", "root", "", "meetbook");  
           $query = "SELECT * FROM viewalluser";  
           $result = mysqli_query($connect, $query);  
           $userData = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
            $userData[] = array(
                'id'=> $row["id"],
                'username'=> $row["username"],
                'password'=> $row["password"],
                'email'=> $row["email"],
                'type'=> $row["type"]

            );
           }
           return json_encode($userData);
}
$fileName="../Asset/user.json";
if(file_put_contents($fileName,getData()))
{
    //echo $fileName."file created";
    header('location:../view/View_users.php?wrong_information');
}
else{
    echo "something went wrong";
} 
 ?>  