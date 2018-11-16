<?php
    require_once "DataBaseParams.php";

    try{
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);
        if ($connection->connect_errno!=0){
            throw new Exception(mysqli_connect_errno());
        }
        else{
                             

					$sql = "SELECT `user_nick`, `user_email`, `comm_date`, `comm_text`, `comm_art_id` FROM comments INNER JOIN users ON `user_id` = `comm_user_id` WHERE `comm_art_id` > 0 ORDER BY `user_nick` ASC";
					$result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo
        
                        "<b><TR>Nick:&nbsp&nbsp".$row["user_nick"]."</b><br/>".
                        "<b><TR>Email:&nbsp&nbsp". $row["user_email"]."</b><br/>".
						"</TR>Nr. Artykułu<TR>&nbsp&nbsp" . $row["comm_art_id"] ."<br/>".
                        "<TR>". $row["comm_date"]."<br/>".						
                        "</TR><TR><br />" . $row["comm_text"] .
                        "<br/>"."====================================="."<br/>".
                        "</TR><TR></TR>\n";	
                        }

            
        }
        $connection->close();
    }
    catch(Excepiotn $e){
        echo '<span style="color: red">Błąd serwera, spróbuj ponownie później.</span>';
    }
?>