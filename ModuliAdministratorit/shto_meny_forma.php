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
		<link rel="stylesheet" href="assets/css/main4_1.css" />
			<style>
		.box_login{
					width:80%;
					margin-left:10%;
					
					height:auto;
					padding-top:5%;
					padding-left:5%;
					padding-right:5%;
					padding-bottom:3%;
					background-color:#f2f2f2;
					border-radius:13px;
					margin-bottom:5%;
		}</style>
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
				<section id="banner" class="style3" data-video="images/banner" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">	
				<p style="text-align:right;font-size:12pt;padding:0;margin-left:75%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
				
				
							<div class="box_login content">
								<h2 class="align-center">FORMA PËR SHTIMIN E MENYVE NË UEBAPLIKACION</h2>
								<hr />
								<form action="shto_meny.php" method="post" enctype="multipart/form-data" >
									<div class="field  " >
										
										<input name="Emri" id="Emri" type="text" placeholder="Emri i menysë">
									</div>
									<div class="field ">
										
										<input name="Linku" id="Linku" type="text" placeholder="Linku">
									</div>
									<div class="field ">
									
										<input name="Moduli" id="Moduli" type="text" placeholder="Moduli se ku do të jetë i vendosur">
									</div>
								
									<ul class="actions align-center" >
										<li><input value="SHTO" name="shto" class="button special" type="submit"></li>
									</ul>
										</div>
								</form>
							</div>
						</div>
					</section>
				</div>	
				</section>
		<!-- One -->
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