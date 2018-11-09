<?php

    session_start();

    if(!isset($_SESSION['isLogged'])){
        header('Location: index.php');
        exit();
    }
    }

    try{
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);
        if ($connection->connect_errno!=0){
            throw new Exception(mysqli_connect_errno());
        }
        else{
            if($result=@$connection->query(
                sprintf("SELECT * FROM users")
                ))
            {
                $numberOfUsers=$result->num_rows;
                if($numberOfUsers>0){
                    $row = $result->fetch_assoc();

                        $_SESSION['isLogged']= true;
                        $_SESSION['id']=$row['user_id'];
                        $_SESSION['nick']=$row['user_nick'];
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $_SESSION['passwd']=$password;
                        $_SESSION['passwd2']=$row['user_password'];
                        $_SESSION['email']=$row['user_email'];
                        unset($_SESSION['Error']);
                        $result->free_result();
                }
                else{
                    $_SESSION['Error']='<p style="color: red"> Brak użytkowników. </p>';
                }
            }
        }
        $connection->close();
    }
    catch(Excepiotn $e){
        echo '<span style="color: red">Błąd serwera, spróbuj ponownie później.</span>';
    }
?>