
	<?php
	session_start();
	if(isset($_COOKIE['user_name']))
{
	$_SESSION["name"]=$_COOKIE['user_name'];
	header("Location:http://localhost/chat/chat_home.php");

	
}

                   

	
include("dbcon.php");
$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
  {
  	if(isset($_POST['b']))

{
	if($_POST['given_user_name']==$row['username']){
	

	if($_POST['the_password']==$row['password'] )


		{ 	if(isset($_POST['remember']))
				{
				setcookie("user_name",$_POST['given_user_name'],time()+3600);
				setcookie("pass",$_POST["the_password"],time()+3600);

				}
				$_SESSION["name"]=$_POST['given_user_name'];


			header("Location:http://localhost/chat/chat_home.php");

		
		break;
		}
	else
		{
			echo '<a href="log.php"></a>';
			
		}
}
}
else
	echo '<a href="log.php"></a>';
		
		
	
  }
  




?>
<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="new_chat.css"/>
</head>
<body>
	<div style="width:1200px;"></div>
	<div class="container">
		<img src="chatbox.jpg">
	<font color="#003366"size="5" style="top:35px;position:absolute;left:518px;" face="aharoni"><b>CHATBOX</b></font>
	<div style="width:398px;top:323px;left:213px;height:200px;position:absolute;background-color:#AFB0B4;border-radius:25px;border-width:5px;border-style:solid;border-color:white;">
		<div style="width:320px;height:35px;position:absolute;border-bottom-width:5px;border-bottom-color:black;">
			<font style="left:170px;top:10px;position:absolute;" size="3" face="aharoni"   >Log in</font>
			<form action="" method="post" style="top:58px;position:absolute;left:51px;">
				User name: <input type="text" name="given_user_name"><br>
				Password : <input type="password" name="the_password"><br>
				<input type="checkbox" name="remember">Remember me

			
				
				<button name="b" onclick="log.php" style="position:absolute;left:110px;top:85px;">submit </button>

			</form>
		</div>
	</div>

	<div class="sign_up">

		<form action="" method="post" id="forma" onsubmit="return myfunction()">
			<ul>
				<li>
					First name :<input type="text" name="first_name" style="position:absolute;left:140px;"><br>

				</li>
				<li style="top:40px;position:absolute;">
					Last name :<input type="text" name="last_name" style="position:absolute;left:100px;"><br>
				</li>
				<li style="top:64px;position:absolute;">
					Age :<input type="number" name="age" style="position:absolute;left:100px;"><br>
				</li>
				<li style="top:88px;position:absolute;">
					Gender:<input type="radio" name="gender" value="male" style="left:100px;position:absolute;"><font style="left:120px;position:absolute;">Male</font><br>
					<input type="radio" name="gender" value="female" style="left:100px;position:absolute;"><font style="left:120px;position:absolute;">Female</font>

				</li>
				<li style="top:130px;position:absolute;">
				Email:<input type="email" name="user_mail" style="left:100px;position:absolute;">
					
				</li>
				<li style="top:154px;position:absolute;">
					Birthday:<input type="date" name="bday" style="left:100px;position:absolute;">
				</li>
				<li style="top:180px;position:absolute;">
					User name:<input type="text" name="user_name" style="left:100px;position:absolute;">
				</li>
				<li style="top:204px;position:absolute;">
				Password:<input type="password" name="password" style="left:100px;position:absolute;">
					
				</li>
				<li id="caution" style="top:228px;left:160px;position:absolute;list-style:none;font-color:red;"></li>

				<button onclick="myfunction()" style="top:290px;left:190px;position:absolute;">sign up</button>



				<script type="text/javascript">

				
				function myfunction(){
				var x = document.getElementById("forma");
				
		
				for(var i=0;i<x.length;i++){

					if (x.elements[i].value=="") {

						document.getElementById("caution").innerHTML="enter all required field ";
						return false;
						break;
					
					}
					else if (x.elements[i].name=="age") {
						if (x.elements[i].value<0) {

							alert("invalid age");
							return false;
							break;
						}


					}
	
				}





			}
		
			

				</script>

			
			</ul>
		</form>
		

	</div>
	</div>
</body>
</html>

