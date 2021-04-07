<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
	include("konfigurimi.php");
?>



<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Uebaplikacioni per menaxhimin e pajisjeve elektroshtepiake ne dyqanin Neptun (UMPEDN)</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
			<style>
		.box_login{
					width:80%;
					margin-left:10%;
					margin-top:5%;
					height:auto;
					padding-top:5%;
					padding-left:5%;
					padding-right:5%;
					padding-bottom:3%;
					background-color:#f2f2f2;
					border-radius:13px;
					margin-bottom:5%;
		}
		</style>
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
				<section id="banner" class="style3" data-video="images/banner" style="background-image:url(images/backgroundlight.jpg);height:auto !important;">
				<div class="inner">	
				<p style="text-align:right;font-size:12pt;padding:0;margin-right:-8%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
				
					
							<div class="box_login content">
								<h2 class="align-center">FORMA PËR SHTIMIN E PAJISJEVE ELEKTROSHTËPIAKE NË UEBAPLIKACION</h2>
								<hr />
								<form action="shto_pajisjeElektroshtepiake.php" method="post" enctype="multipart/form-data" >
									<div class="field  " >
										
										<input name="Emri" id="Emri" type="text" placeholder="Shëno emrin e pajisjes elektroshtëpiake">
									</div>
									<div class="field">
										
										<textarea name="Pershkrimi" id="Pershkrimi" rows="6" placeholder="Përshkrimi i pajisjes"></textarea>
									</div>
									<div class="field half " style="margin-right:3%">
										
										<input name="Nr_i_njesise" id="Nr_i_njesise" type="text" placeholder="Shëno numrin e njësive në stok">
									</div>
									
									<div class="field  half">
									
										<input name="Cmimi" id="Cmimi" type="text" placeholder="Çmimi">
									</div>
									<div class="field  ">
										
										<input name="Kodi" id="Kodi" type="text" placeholder="Kodi i pajisjes">
									</div>
									
									<div class="field half " style="margin-left:19%">
										<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
										<input type="file" name="file"  value="" placeholder="foto_fit" />
									
									
									</div>
									
									<div class="field">
									<select name="ID_Brendi">
													<option selected="selected">Zgjedh brendin</option>
														<?php
														$rez=mysqli_query($lidhu_brend,"CALL zgjedhBrendet()");
														while($rreshti=$rez->fetch_array())
														{
															?>
															<option value="<?php echo $rreshti['ID_Brendi']; ?>"><?php echo $rreshti['Emri_Brendit']; ?></option>
															<?php
														}
														?>
												</select>
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
		<?php include("fundi.php");?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>