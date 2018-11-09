<?php 
    session_start();
    if((isset($_SESSION['isLogged'])) && ($_SESSION['isLogged']==true)){
        header('Location: main.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="./style.css" rel="stylesheet">
</head>
<body>
<center><h4>Welcome in Admin Panel</h4></center>


</div>
<div class="login_form">
<form action="login_sys.php" method="post">
	<div class="form-group">
		<label for="exampleFormControlInput1">Login:</label>
		<input type="text" name="login" class="form-control" id="exampleFormControlInput1" placeholder="Nickname">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Password:</label>
		<input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="">
	</div>	
    <center><button type="submit" name="submit" class="btn btn-primary">Log in</button>
    <br/><br/><br/>
    <a hfre="../"><button name="return" class="btn btn-info">Back To Blog</button></a></center>
</form>
</div>

<?php 
                    if(isset($_SESSION['Error'])) {
                        echo $_SESSION['Error'];
                    }
                ?>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
