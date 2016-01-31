<!DOCTYPE html>
<?php
include("dbcon.php");

$sql="INSERT INTO users (id,firstname,lastname,age,email,birthday,username,password,gender)
VALUES
(,'$_POST[first_name]','$_POST[last_name]','$_POST[age]','$_POST[user_mail]','$_POST[bday]','$_POST[user_name]','$_POST[password]','$_POST[gender]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($con);
header("Location:http://localhost/chat/chat_home.php");
?>
