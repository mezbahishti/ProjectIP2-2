<<!DOCTYPE html>
<?php
include("dbcon.php");
?>
<html>
<head>
	<title>></title>
</head>
<body>
<?php
$sql="INSERT INTO new (fname,lname)
VALUES
('$_POST[first_name]','$_POST[last_name]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>

</body>
</html>