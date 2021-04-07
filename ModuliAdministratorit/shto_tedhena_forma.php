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
					width:100%;
					margin-left:-1%;
					margin-top:10%;
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
		<?php include("fillimi.php");?>
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
				<section id="banner" class="style3" data-video="images/banner"style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">	
				<p style="text-align:right;font-size:12pt;padding:0;margin-right:-26%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
				
					
							<div class="box_login content">
								<h2 class="align-center">FORMA PËR SHTIMIN E TË DHËNAVE NË UEBAPLIKACION</h2>
								<hr />
								<form action="shto_tedhena.php" method="post" enctype="multipart/form-data" >
									<div class="field  " >
										
										<input name="Titulli" id="Titulli" type="text" placeholder="Emri i të dhënës">
									</div>
									<div class="field">
										
										<textarea name="Pershkrimi" id="Pershkrimi" rows="6" placeholder="Përshkrimi i të dhënës"></textarea>
									</div>
									<div class="field  ">
										
										<input name="Fajlli" id="Fajlli" type="text" placeholder="Fajlli i te dhënës">
									</div>
									<div class="field">
									
										<input name="Pamja" id="Pamja" type="text" placeholder="Pjesa se ku do të vendoset kjo e dhënë">
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