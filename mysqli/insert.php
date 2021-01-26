<?php

$conn =mysqli_connect('localhost','root','','datatable');

if($conn)
{
    $sql ="insert into users (id, username, password,email, type) VALUES ('1', 's', 's','s@example.com', 'user')";
   // $result=mysqli_query($conn,$sql);

    if(mysqli_query($conn,$sql))
    {
        echo "inserted";
    }
}
else
{
    echo "not connected";
}
?>