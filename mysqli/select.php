<?php

$conn =mysqli_connect('localhost','root','','datatable');

if($conn)
{
    $sql ="select * from users";
    $result=mysqli_query($conn,$sql);

    while($row =mysqli_fetch_assoc($result))
    {
        echo $row['id'].'  -'.$row['username'].'  -'.$row['password'].'  -'.$row['email'].'  -'.$row['type'];

        echo  "<br>";
    }
}
else
{
    echo "not connected";
}
?>