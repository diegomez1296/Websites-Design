<?php

    session_start();

    require_once "DataBaseParams.php";

    if((!isset($_POST['login'])) || (!isset($_POST['password']))){
        header('Location: index.php');
        exit();
    }

    if(isset($_POST['return'])) {
        header('Location: ../index.php');
        exit();
    }

    try{
        $connection = @new mysqli($host, $db_user, $db_password, $db_name);
        if ($connection->connect_errno!=0){
            throw new Exception(mysqli_connect_errno());
        }
        else{
            $login = $_POST['login'];
            $password = $_POST['password'];

            $login = htmlentities($login,ENT_QUOTES, "UTF-8"); 
            $password = htmlentities($password,ENT_QUOTES, "UTF-8"); 

            if($result=@$connection->query(
                sprintf("SELECT * FROM users where user_nick='%s' AND user_password='%s'",
                mysqli_real_escape_string($connection, $login),
                mysqli_real_escape_string($connection, $password))
                ))
            {
                $numberOfUsers=$result->num_rows;
                if($numberOfUsers>0){
                    $row = $result->fetch_assoc();

                    //if(true){
                    //if(password_verify($password,$row['user_password'])){
                        $_SESSION['isLogged']= true;
                        $_SESSION['id']=$row['user_id'];
                        $_SESSION['nick']=$row['user_nick'];
                        $_SESSION['email']=$row['user_email'];
                        $_SESSION['type']=$row['user_type'];
                        $_SESSION['register']=$row['user_registerDate'];
                        $_SESSION['avatarURL']=$row['user_avatar'];
                        unset($_SESSION['Error']);
                        $result->free_result();
                        header('Location: main.php');
                }
                else{
                   // $_SESSION['Error']='<p style="color: red"> Nieprawidłowe hasło lub login. </p>';
                    header('Location: index.php');
                }
            }
        }
        $connection->close();
    }
    catch(Excepiotn $e){
        echo '<span style="color: red">Błąd serwera, spróbuj ponownie później.</span>';
    }
?>