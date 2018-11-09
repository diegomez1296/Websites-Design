<!doctype html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta charset="UTF-8">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link href="./styles/style.css" rel="stylesheet">
		<title>Projektowanie Stron WWW - Lab3 Blog</title>
		
		<script src="scripts\src_contactText.js" type="text/javascript">contactText();</script>
	</head>
	
			<?php
			include("header.php");
			?>
	<body>
	<div class="allContent">
	<img class="menu_img" src="images\img_menu.png" class="img-fluid" alt="ImageError" height="50px"; width=200px;/> 
	<img  src="images\img_menu2.png" class="img-fluid" alt="ImageError" height="50px"; width=760px;/> 
		<aside id="asideID">		
					
			<a href="index.php"><p class="link">Strona główna</p></a>
			<a href="/OIW_BLOG/articles/photos.php"><p class="link">Galeria</p></a>
			<p id="contact_button" class="link" onclick="contactText()">Kontakt</p>

			<div class="contact_icons" id="contact_icons" style="display: none;">
			<a href="mailto:rlukasz1996@gmail.com"><img src="images/MyPhoto.jpg" alt="MyPhoto" class="rounded" height="75px"; width=75px;/></a><br/><br/>
			<a href="https://www.facebook.com/rlukasz1996" target="_blank"><img src="images/fb.png" alt="MyPhoto" class="rounded-circle" height="50px"; width=50px;/></a>
			<a href="https://www.instagram.com/v.lucius.v/" target="_blank"><img src="images/ins.png" alt="MyPhoto" class="rounded-circle" height="50px"; width=50px;/></a>
			<a href="https://github.com/diegomez1296" target="_blank"><img src="images/git.png" alt="MyPhoto" class="rounded-circle" height="50px"; width=50px;/></a>
			</div>						
		</aside>
		
		<div id = "art2" class="content">		
			<article>
				<section class="article_title"><h2>30.10.2018 - Pierwszy dzień urlopu</h2></section>

				<section id="article_intro">Drogi Marszałku, Wysoka Izbo. PKB rośnie. Różnorakie i bogate doświadczenia pozwalają na uwadze, że rozszerzenie naszej kompetencji w restrukturyzacji przedsiębiorstwa...</section>
				
				<center><a id="article_button" href="/OIW_BLOG/articles/2.php" ><p class="link2">Więcej</p></a></center>
			</article>
		</div>

		<div id = "art1" class="content">		
			<article>
				<section class="article_title"><h2>25.10.2018 - Postanowiłem założyć bloga</h2></section>

				<section id="article_intro">Drogi Marszałku, Wysoka Izbo. PKB rośnie. Różnorakie i bogate doświadczenia pozwalają na uwadze, że rozszerzenie naszej kompetencji w restrukturyzacji przedsiębiorstwa...</section>
				
				<center><a id="article_button" href="/OIW_BLOG/articles/1.php" ><p class="link2">Więcej</p></a></center>
			</article>
		</div>		
		 </div>	

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</body>

	<?php
	include("footer.php");
	?>		

</html>
