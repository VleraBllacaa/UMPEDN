<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfigurimi.php");

//fetching data in descending order (lastest entry first)

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
		<link rel="stylesheet" href="assets/css/main6.css" />
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
		}
		 #banner a {
		 color:black;
	 }
			table{
			table-layout: fixed;
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
			<section id="banner" class="style3" data-video="images/banner"style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner"><p style="text-align:right;font-size:12pt;padding:0;margin-right:12%;font: inherit;margin-top:11%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
					<div class="box_login content">
					
						<h3>Kërko të dhënat që gjenden në uebaplikacion për fshirje</h3>		<hr>
						

							<form method="post" action="#">
										<div class="row uniform">
											<div class="9u 12u$(small)">
												<input type="text" name="query" id="query" placeholder="Kërko të dhënat për fshirje" />
											</div>
											<div class="3u$ 12u$(small)">
												<input type="submit" value="Kërko" class="fit" style="background-color:black;color:white !important;"/>
											</div>
										</div>
									</form>
							
								<br><br><br>
							
								
			<div class="table-wrapper" style="text-align:justify;text-justify:interword;">
										<table style="color:black">
											
												<tr>
														<td style="color:black;">Titulli</td>
													<td style="color:black">Përshkrimi</td>
													<td style="color:black;">Emri i fajllit</td>
													<td style="color:black">Pjesa se ku vendoset</td>
												
													<td style="color:black">Fshijë</td>
												</tr>
			
			
																			
			
			
																				<?php
if (!empty($_REQUEST['query'])) {
$query = mysqli_real_escape_string
($lidhu_tedhena,$_REQUEST['query']);     
$sql = mysqli_query($lidhu_tedhena,
"CALL zgjedhQueryTedhena('$query')

 "); 
while($rreshti = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rreshti['Titulli']."</td>";
		echo "<td>".$rreshti['Pershkrimi']."</td>";
		echo "<td>".$rreshti['Fajlli']."</td>";	
		echo "<td>".$rreshti['Pamja']."</td>";	
	

	
		
		echo "<td><a href=\"fshij_tedhena.php?ID_Tedhenat=$rreshti[ID_Tedhenat]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\"  class='button special alt' class='button fit'>
		Fshijë</a></td></tr>";		
	}

}

?>
				
											
										</table>
									</div>
						</div>
					</div>
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