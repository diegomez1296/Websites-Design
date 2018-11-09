<?php
    

    require_once "DataBaseParams.php";

    $id = 0;
      $nick = "";
      $email = "";
      $article = "";
      $date = "";
      $text = "";

   $edit_state = false;

        $connection = @new mysqli($host, $db_user, $db_password, $db_name);
        if ($connection->connect_errno!=0){
            throw new Exception(mysqli_connect_errno());
        }
        else{
            if(isset($_POST['submit'])) 
            {
            $nick = $_POST['nick'];
            $email = $_POST['email'];
            $article = $_POST['article'];
            $date = $_POST['date'];
            $text = $_POST['text'];

            $nick = htmlentities($nick,ENT_QUOTES, "UTF-8"); 
            $email = htmlentities($email,ENT_QUOTES, "UTF-8");
            $article = htmlentities($article,ENT_QUOTES, "UTF-8"); 
            $date = htmlentities($date,ENT_QUOTES, "UTF-8"); 
            $text = htmlentities($text,ENT_QUOTES, "UTF-8");  

            $sql = "INSERT INTO comments (comm_id, comm_nick, comm_email, comm_text, comm_art_id, comm_date) VALUES ('', '$nick', '$email', '$text', '$article', '$date')";
            mysqli_query($connection, $sql);
            header('Location: main.php');
            }

            if(isset($_POST['update'])) 
            {
            $id = $_POST['id'];
            $nick = mysqli_real_escape_string($connection, $_POST['nick']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $article = mysqli_real_escape_string($connection, $_POST['article']);
            $date = mysqli_real_escape_string($connection, $_POST['date']);
            $text = mysqli_real_escape_string($connection, $_POST['text']);

            $sql_up = "UPDATE comments SET comm_nick = '$nick', comm_email = '$email', comm_text = '$text', comm_art_id = '$article', comm_date = '$date' WHERE comm_id = $id";
            mysqli_query($connection, $sql_up);
            header('Location: main.php');
            }
            if(isset($_POST['clean'])) 
            {
            header('Location: main.php');
            }

            if(isset($_GET['del'])) 
            {
                $id = $_GET['del'];
                mysqli_query($connection, "DELETE FROM comments WHERE comm_id = $id");
                header('Location: main.php');
            }

        $results = mysqli_query($connection, "SELECT * FROM comments WHERE comm_art_id > -1");
    }
        
?>