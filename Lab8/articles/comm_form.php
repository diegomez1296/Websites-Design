<br/><br/>
			<p><b>Napisz komentarz...</b></p>
			<form method="post">
			<div class="form-group">
				<label for="exampleFormControlInput1">Nick:</label>
				<input type="text" name="nick" class="form-control" id="exampleFormControlInput1" placeholder="Nickname">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Email:</label>
				<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Twój komentarz:</label>
				<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<center><button type="submit" name="submit" class="btn btn-dark">Wyślij</button></center>
			</form>
			<br/><br/>
			<p><b>Wasze komentarze:</b></p><br/>

			<?php include("database_conn.php") ?>
