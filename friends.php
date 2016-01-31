<?php
session_start();

if(!isset($_COOKIE['user_name'])&&!isset($_SESSION['name']))
{
	header("Location:http://localhost/chat/log.php");
}
?>



<html>

<head>
	<link rel="stylesheet" type="text/css" href="new_chat.css"/>
</head>
<body>


<div class="container" >
	<img src="chatbox.jpg">
	<font color="#003366"size="5" style="top:35px;position:absolute;left:518px;" face="aharoni"><b>CHATBOX</b></font>

	<div class="img">
		<img src="lm.jpg" style="width:200px;height:300px;position;absolute;" hspace="20px" vspace="20px">
	<div style="top:342px;position:absolute;width:250px;background-color:;height:50px;color:white;text-align:center;">
		
		<font size="4" color="" face="euphemia" style="text-transform:uppercase;">
			<?php

		echo $_SESSION['name'];
		?>	
		</font>	
		
		</div>

	</div>
	<div class="link">
	<div class="navi" style=""><a href="http://localhost/chat/chat_home.php">HOME</a></div>
	<div class="navi" style="top:50px;position:absolute;background-color:#2980B9"><a href="http://localhost/chat/friends.php">FRIENDS</a></div>
	<div class="navi" style="top:100px;position;absolute;"><a href="http://localhost/chat/people.php">PEOPLE</a></div>
	<div class="navi" style="top:150px;position;absolute;"><a href="http://localhost/chat/about.php">ABOUT</a></div>
	<div class="navi" style="top:200px;position;absolute;border-bottom-width:2px;"><a href="http://localhost/chat/sign_out.php" style="left:90px;position:absolute;">SIGN OUT</a></div>


		
	</div>

	<div class="center">
	<div style="height:50px;position;absolute;background-color:#444444;"><font style="left:400px;position:absolute;top:10px;" face="aharoni" size="5" color="#C9DBDB">Friends</font></div>
	
		
	</div>
	
		
	
</div>
</body>

</html