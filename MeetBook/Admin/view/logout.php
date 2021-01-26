<?php

session_start();
session_destroy();
//header('location:../Login.php');

setcookie('flag', 'true', time()-100, '/');
header('location:../Login.php');

?>