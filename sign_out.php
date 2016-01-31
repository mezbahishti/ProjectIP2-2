<?php

session_start();
unset($_SESSION['name']);
session_destroy();
setcookie("user_name",$_POST["given_user_name"],time()-3600);
header("Location:http://localhost/chat/log.php");


?>

