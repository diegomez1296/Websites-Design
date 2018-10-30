<?php
	$nick = @$_POST['user_nick'];
	$email = @$_POST['user_email'];
	$password = @$_POST['user_password'];
	$type = 2;
	$registerDate = date("Y-m-d");
	
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="./styles/style.css" rel="stylesheet">
		<title>Projektowanie Stron WWW - Lab3 Blog</title>
		
	</head>
	
	<?php
	include("header.php");
	?>
	<body>

		<aside>
		
			<img src="images\img_menu.png" alt="ImageError" height="50px"; width="200px";/>
			
			
			<p class="link" onclick="indexText()">Strona główna</p>
			<p class="link" onclick="lab2Text()">Zarejestruj</p>
			<p class="link" onclick="contactText()">O mnie</p>
			
			
		</aside>
		
		<div id = "art1" class="content">		
			
		<br/><br/>
		<center>
		<form method="post" action = "">
			Nick: <input type="text" name="nick" /><br/>
			Email: <input type="email" name="email"/><br/><br/>
			Hasło: <input type="password" name="password"/><br/><br/>
			
		<br/><br/>
		<input type="submit" name="submit" value="Zarejestruj"/>
		</form>
		</center>
		<br/><br/>
	
		</div>		
	</body>
	
	<?php
	include("footer.php");
	?>
</html>


<?php

$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect"); 
								 
								

mysqli_select_db($link, "OIW_BLOG")
    or die("Could not select database"); 
	                                     
mysqli_query($link, "SET NAMES utf8"); 
$checkUser = "SELECT `user_nick`, `user_password` FROM users WHERE `user_nick` = $nick";

$result = mysqli_query($link, $checkUser)  
				or die("Error");	

	if (isset($_POST["submit"])) {
	if ($nick != null && $email != null && $password !=null)
		{
			
			
			
				
			if(!$result)
			{
				$createUser = "INSERT INTO `users` ( `user_nick`,`user_email`,`user_password`, `user_type`, `user_registerDate) VALUES ( '$nick','$email', '$password', $type, '$registerDate')";
				mysqli_query($link, $createUser);
			}
			else
			{
				echo "Taki użytkownik już istnieje";
			}
	
			
		}	
			
		}



mysqli_close($link);		  

?>


