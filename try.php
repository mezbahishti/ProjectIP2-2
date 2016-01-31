<?php
include("dbcon.php");
$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
{

	echo '<div style="width:80px;height:40px;position:absolute;background-color:red"> ';
	echo $row['username'];
}

?>