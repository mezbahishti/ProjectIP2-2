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
<script type="text/javascript">
	function request(friend1,friend2)
	{
		document.getElementById("a").innerHTML="aiseeee";
		return false;



	}

	function requests(name,na)
	{
		
		document.getElementById("a").innerHTML=na;
		document.getElementById("a").innerHTML="<br>";
		//document.getElementById("a").innerHTML=name;
		return false;



	}
</script>


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
	<div class="navi" style="top:50px;position:absolute;"><a href="http://localhost/chat/friends.php">FRIENDS</a></div>
	<div class="navi" style="top:100px;position;absolute;background-color:#2980B9"><a href="http://localhost/chat/people.php">PEOPLE</a></div>
	<div class="navi" style="top:150px;position;absolute;"><a href="http://localhost/chat/about.php">ABOUT</a></div>
	<div class="navi" style="top:200px;position;absolute;border-bottom-width:2px;"><a href="shttp://localhost/chat/sign_out.php" style="left:90px;position:absolute;">SIGN OUT</a></div>


		
	</div>

	<div class="center" >
	<div style="width:670px;position:absolute;background-color:#2A2A2A;;height:50px;left:0px;border-left-style:ridge;border-bottom-style:ridge;">
		<font style="left:300px;position:absolute;top:15px;" color="#C9DBDB" face="aharoni" size="4">PEOPLE</font>
	
	</div>
	<div style="width:600px;height:700px;position:absolute;background-color:r;top:60px;left:30px;">
		<?php
		include("dbcon.php");

		function con_req($ffrom,$tto)
		{
			echo "done";
			include("dbcon.php");
			
		$sql="INSERT INTO friends (from,to,status)
		VALUES($ffrom,$tto,1)";
		
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }


		mysql_close($con);


		


		}


		$result = mysql_query("SELECT * FROM users");
        
      /*  echo "<div class='people'>";
        echo "<button name=\"\"  style=\"height:30px;left:300px;position:absolute;border-left-style:ridge;\" onclick=\"requests()\">Add Friend</button>";
		echo "</div>";*/
		while($row = mysql_fetch_array($result))
		{
			if($_SESSION['name']!=$row['username'])
			{
			echo '<link rel="stylesheet" type="text/css" href="new_chat.css"/>';
			echo '<div class="people">';
			echo $row['username'];
			$ok1 =$row['username'];
			$ok2=$_SESSION['name'];
		
			 echo "<button name=\"\"  style=\"height:30px;left:300px;position:absolute;border-left-style:ridge;\" onclick=\"requests('$ok1','$ok2')\">Add Friend</button>";


			echo "</div>";
			echo "<br>";
			echo "<br>";
			

			
			}
		}

		
		?>
		</div>

	</div>

	
	<div class="side" id="a" style="border-left-style:ridge;">
		<div style="width:278px;height:50px;position:absolute;background-color:#2A2A2A;border-bottom-style:ridge;">
			<font face="aharoni" size="4" style="top:15px;left:100px;position:absolute;" color="#C9DBDB">FRIENDS</font>
		</div>
	</div>
</div>

</body>

</html>