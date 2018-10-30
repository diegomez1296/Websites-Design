<?php
	$nick = @$_POST['user_nick'];
	$password = @$_POST['user_password'];
	
?>

<br/><br/>
<center>
<form method="post" action = "">
	Nick: <br/>
	<input type="text" name="nick" /><br/>
	Hasło:
	<input type="password" name="password"/><br/><br/>
	
<br/>
<input type="submit" name="submit" value="Zaloguj"/>
</form>
</center>
<br/><br/>

<?php

$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect"); 
								 								
mysqli_select_db($link, "OIW_BLOG")
    or die("Could not select database"); 

	if (isset($_POST["submit"])) {
	if ($nick != null && $password !=null)
		{
			
			$checkUser = "SELECT `user_nick`, `user_password` FROM users WHERE `user_nick` = $nick";
			$result = mysqli_query($link, $checkUser) or die("Error");
			echo "Done1";
			 if(mysql_num_rows($result)==1)
				{
					echo "Zalogowałeś się";
				}
				else
				{
					echo "Zły login lub hasło";
				}
						
		}	
		echo "Done";		
	}
 
mysqli_close($link);		  

?>