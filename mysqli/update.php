<?php

$conn =mysqli_connect('localhost','root','','datatable');

if($conn)
{
    $sql ="Update users set username='ss' where id=1";
   // $result=mysqli_query($conn,$sql);

    if(mysqli_query($conn,$sql))
    {
        echo "updated";
    }
}
else
{
    echo "not connected";
}
?>