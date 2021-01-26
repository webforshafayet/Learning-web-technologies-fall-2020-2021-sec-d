<?php

$conn =mysqli_connect('localhost','root','','datatable');

if($conn)
{
    $sql ="delete from users where id=1";
   // $result=mysqli_query($conn,$sql);

    if(mysqli_query($conn,$sql))
    {
        echo "deleted";
    }
}
else
{
    echo "not connected";
}
?>