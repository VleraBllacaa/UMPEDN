<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>UMPEDN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main4.css" />
	
	</head>
	<body>
		<!-- Header -->
				<?php include_once("fillimi.php"); ?>
		<!-- Nav -->
		<!-- Banner -->
		<!--	
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
		<header id="header" class="alt">
				
				
				<a href="#menu" class="toggle"><span>Menytë</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="ballina.php">Ballina</a></li>
					<li><a href="porosite_e_pajisjeve_elektroshtepiake.php">Porositë e pajisjeve elektroshtëpiake</a></li>
					<li><a href="perdoruesit.php">Përdoruesit</a></li>
						<li><a href="ckycu.php">Çkyçu</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			

		<!-- One -->
	

		<!-- Two -->
			
			<section id="two" class="wrapper style3" style="background-image:url(images/backgroundlight.jpg);">
		
				<div class="inner">				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>	<br>
				<h2 class="align-center">FORMA PËR MENAXHIMIN E POROSIVE TË PAJISJEVE ELEKTROSHTËPIAKE</h2><br><br>
					<div id="flexgrid">
						<div>
							<header>
								<h3>SHTO POROSI</h3>
							</header>
							<p>Forma për shtimin e porosive të reja të pajisjeve elektroshtëpiake në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="shto_porosi_forma.php" class="button ">SHTO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>MODIFIKO POROSI</h3>
							</header>
							<p>Forma për modifikim e porosive aktuale të pajisjeve elektroshtëpiake në uebaplikacion. </p>
							<ul class="actions">
								<li><a href="modifiko_porosi_tabela.php" class="button ">MODIFIKO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>FSHIJË POROSI</h3>
							</header>
							<p>Forma për fshirje të porosive aktuale të pajisjeve elektroshtëpiake nga uebaplikacioni.</p>
							<ul class="actions">
								<li><a href="fshij_porosi_tabela.php" class="button ">FSHIJË</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		
			
		

		<!-- Three -->
			

		<!-- Four -->
			

		<!-- Footer -->
		<?php include_once("fundi.php");?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>