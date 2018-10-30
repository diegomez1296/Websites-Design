<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="./styles/style.css" rel="stylesheet">
		<title>Projektowanie Stron WWW - Lab3 Blog</title>
		
		<script src="scripts\src_contactText.js" type="text/javascript">contactText();</script>
	</head>
	
			<?php
			include("header.php");
			?>
	<body>
	<div class="allContent">
	<img class="menu_img" src="images\img_menu.png" alt="ImageError" height="50px"; width=200px;/> 
	<img  src="images\img_menu2.png" alt="ImageError" height="50px"; width=744px;/> 
		<aside id="asideID">		
					
			<a href="index.php"><p class="link">Strona główna</p></a>
			<p class="link" onclick="contactText()">O mnie</p>						
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
	</body>

	<?php
	include("footer.php");
	?>		

</html>
