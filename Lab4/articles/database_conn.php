<?php

				$comm_nick = @$_POST['nick'];
				$comm_email = @$_POST['email'];
				$comm_text = @$_POST['text'];
				$comm_date = date("Y-m-d");

				$comm_nick = htmlentities($comm_nick,ENT_QUOTES, "UTF-8"); 
				$comm_email = htmlentities($comm_email,ENT_QUOTES, "UTF-8"); 
				$comm_text = htmlentities($comm_text,ENT_QUOTES, "UTF-8"); 
				$comm_date = htmlentities($comm_date,ENT_QUOTES, "UTF-8"); 

				$link = mysqli_connect("localhost", "root", "")
				or die("Could not connect"); 
																	
				mysqli_select_db($link, "OIW_BLOG")
				or die("Could not select database"); 
									
									
				mysqli_query($link, "SET NAMES utf8"); 
				$query  = "SELECT `comm_nick`,`comm_text`, `comm_date` FROM comments WHERE `comm_art_id` = $comm_art_id ORDER BY `comm_id` DESC";  

				$result = mysqli_query($link, $query)  
				or die("Error");


				while ($row = mysqli_fetch_array($result)) {
				echo

				"<b><TR>Nick:&nbsp&nbsp". $row["comm_nick"]."</b><br/>".
				"<TR>". $row["comm_date"]."<br/>".
				"</TR><TR><br />" . $row["comm_text"] .
				"<br/>"."====================================="."<br/>".
				"</TR><TR></TR>\n";	
				}

				if (isset($_POST["submit"])) {
				if ($comm_nick != null && $comm_email !=null && $comm_text!=null)
					{
						$lastCom_Nick = mysqli_fetch_array(mysqli_query($link,"SELECT `comm_nick` FROM `comments` WHERE 1 ORDER BY `comm_id` DESC LIMIT 1 "));
						$lastCom_Email = mysqli_fetch_array(mysqli_query($link,"SELECT `comm_email` FROM `comments` WHERE 1 ORDER BY `comm_id` DESC LIMIT 1 "));
						$lastCom_Text = mysqli_fetch_array(mysqli_query($link,"SELECT `comm_text` FROM `comments` WHERE 1 ORDER BY `comm_id` DESC LIMIT 1 "));
						$lastCom_Art = mysqli_fetch_array(mysqli_query($link,"SELECT `comm_art_id` FROM `comments` WHERE 1 ORDER BY `comm_id` DESC LIMIT 1 "));
						$lastCom_Date = mysqli_fetch_array(mysqli_query($link,"SELECT `comm_date` FROM `comments` WHERE 1 ORDER BY `comm_id` DESC LIMIT 1 "));
							
						if(!($lastCom_Nick["comm_nick"] == $comm_nick && $lastCom_Email["comm_email"] == $comm_email && $lastCom_Text["comm_text"] == $comm_text && $lastCom_Art["comm_art_id"] == $comm_art_id && $lastCom_Date["comm_date"] == $comm_date)) 
						{
							$zapytanie = "INSERT INTO `comments` ( `comm_nick`,`comm_email`,`comm_text`, `comm_art_id`, `comm_date`) VALUES ( '$comm_nick','$comm_email', '$comm_text', '$comm_art_id', '$comm_date')";
							mysqli_query($link, $zapytanie);
						}
					}	
				}
			mysqli_free_result($result);   
			mysqli_close($link);
			?>