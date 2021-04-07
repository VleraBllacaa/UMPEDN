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
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			
		header{color:white;}
			   h3, h2{color:rgba(255, 255, 255, 0.65);}</style>
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
			
				<a href="#menu" class="toggle"><span>Menu</span></a>
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
			
			<section id="four" class="wrapper style3" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>			
			<br><h2 class="align-center">FORMA PËR MENAXHIMIN E PAJISJEVE ELEKTROSHTËPIAKE</h2><br><br>
					<div id="flexgrid"style="text-align:justify;text-justify:inter-word">
						<div>
							<header>
								<h3>SHTO PAJISJE ELEKTROSHTËPIAKE</h3>
							</header>
							<p>Forma për shtimin e pajisjeve elektroshtëpiake të reja në uebaplikacion.</p>
							<ul class="actions" >
								<li><a href="shto_pajisjeelektroshtepiake_forma.php" class="button">SHTO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>MODIFIKO PAJISJE ELEKTROSHTËPIAKE</h3>
							</header>
							<p>Forma për modifikim të të dhënave të pajisjeve elektroshtëpiake aktuale. </p>
							<ul class="actions">
								<li><a href="modifiko_pajisjetelektroshtepiake_tabela.php" class="button ">MODIFIKO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>FSHIJË PAJISJE ELEKTROSHTËPIAKE</h3>
							</header>
							<p>Forma për fshirje të pajisjeve elektroshtëpiake aktuale nga uebaplikacioni.</p>
							<ul class="actions">
								<li><a href="fshij_pajisjetelektroshtepiake_tabela.php" class="button">FSHIJË</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
		<section id="four" class="wrapper style3" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
					<h2 class="align-center">FORMA PËR MENAXHIMIN E TË DHËNAVE</h2><br><br>
					<div id="flexgrid"style="text-align:justify;text-justify:inter-word">
						<div>
							<header>
								<h3>SHTO TË DHËNAT</h3>
							</header>
							<p>Forma për shtimin e të dhënave të reja në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="shto_tedhena_forma.php" class="button">SHTO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>MODIFIKO TË DHËNAT</h3>
							</header>
							<p>Forma për modifikim të të dhënave aktuale në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="modifiko_tedhena_tabela.php" class="button ">MODIFIKO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>FSHIJË TË DHËNAT</h3>
							</header>
							<p>Forma për fshirje të të dhënave aktuale nga uebaplikacioni.</p>
							<ul class="actions">
								<li><a href="fshij_tedhena_tabela.php" class="button">FSHIJË</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			
			<section id="four" class="wrapper style3" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
					<h2 class="align-center">FORMA PËR MENAXHIMIN E MENYVE</h2><br><br>
					<div id="flexgrid"style="text-align:justify;text-justify:inter-word">
						<div>
							<header>
								<h3>SHTO MENY</h3>
							</header>
							<p>Forma për shtimin e menyve të reja në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="shto_meny_forma.php" class="button">SHTO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>MODIFIKO MENY</h3>
							</header>
							<p>Forma për modifikim të menyve aktuale në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="modifiko_meny_tabela.php" class="button">MODIFIKO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>FSHIJË MENY</h3>
							</header>
							<p>Forma për fshirje të menyve aktuale nga uebaplikacioni.</p>
							<ul class="actions">
								<li><a href="fshij_meny_tabela.php" class="button">FSHIJË</a></li>
							</ul>
						</div>
					</div>
				</div>
				<br>
			</section>
					<section id="four" class="wrapper style3" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
					<h2 class="align-center">FORMA PËR MENAXHIMIN E BRENDEVE</h2><br><br>
					<div id="flexgrid"style="text-align:justify;text-justify:inter-word">
						<div>
							<header>
								<h3>SHTO BREND</h3>
							</header>
							<p>Forma për shtimin e brendeve të reja në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="shto_brend_forma.php" class="button">SHTO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>MODIFIKO BREND</h3>
							</header>
							<p>Forma për modifikim të brendeve aktuale në uebaplikacion.</p>
							<ul class="actions">
								<li><a href="modifiko_brend_tabela.php" class="button">MODIFIKO</a></li>
							</ul>
						</div>
						<div>
							<header>
								<h3>FSHIJË BREND</h3>
							</header>
							<p>Forma për fshirje të brendeve aktuale nga uebaplikacioni.</p>
							<ul class="actions">
								<li><a href="fshij_brend_tabela.php" class="button">FSHIJË </a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			

		<!-- Four -->
			

		<!-- Footer -->
			<?php include_once("fundi.php"); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>