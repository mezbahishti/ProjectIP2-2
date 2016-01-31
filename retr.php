<?php

include("dbcon.php");
$result = mysql_query("SELECT * FROM users");



while($row = mysql_fetch_array($result))
  {
  
  if($row['firstname']=='kazi')
  {
  	echo $row['id'];
  }
  }
echo "</table>";

mysql_close($con);

?>