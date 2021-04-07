<?php
	include("kontrollo.php");	
?>
<?php
include_once("konfigurimi.php");
$result = mysqli_query($lidhu_pajisje,"CALL zgjidhNgaFundiPajisje()");

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
							table{
								table-layout: fixed;
							}
				</style>
	</head>
	<body>

			<?php include_once("fillimi.php"); ?>
			
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
					<p style="text-align:right;font-size:12pt;padding:0;margin-right:12%;font: inherit;margin-top:11%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
						<div class="box_login content">
							<h3>Kërko pajisjet elektroshtëpiake për modifikim që gjenden në uebaplikacion</h3>	

							<hr>
	
									<form method="post" action="#">
										<div class="row uniform">
											<div class="9u 12u$(small)">
												<input type="text" name="query" id="query" placeholder="Kërko pajisjet elektroshtëpiake" />
											</div>
											<div class="3u$ 12u$(small)">
												<input type="submit" value="Kërko" class="fit" style="background-color:black;color:white !important;"/>
											</div>
										</div>
									</form>
							
											<br><br><br>
							
								
										<div class="table-wrapper" style="text-align:justify;text-justify:interword;">
											<table style="color:black;">
												<tr>
													<td style="color:black">Emri i pajisjes</td>
													<td style="color:black">Përshkrimi</td>
													<td style="color:black; text-align:center">Numri i njësisë</td>
													<td style="color:black">Kodi</td>
													<td style="color:black;">Cmimi</td>
													<td style="color:black">Foto</td>
													<td style="color:black;text-align:center;">Brendi</td>	
													<td style="color:black">Modifiko</td>
												</tr>
			
	
														<?php
															if (!empty($_REQUEST['query'])) {
																$query = mysqli_real_escape_string($lidhu_pajisje,$_REQUEST['query']);     
																$sql = mysqli_query($lidhu_pajisje,"CALL zgjedhQueryPajisje('$query') "); 
															
																while($rreshti = mysqli_fetch_array($sql)) { 		
																	echo "<tr>";
																	echo "<td>".$rreshti['Emri']."</td>";
																	echo "<td>".$rreshti['Pershkrimi']."</td>";
																	echo "<td style=\"text-align:center\">".$rreshti['Nr_i_njesise']."</td>";
																	echo "<td>".$rreshti['Kodi']."</td>";			
																	echo "<td>".$rreshti['Cmimi']."€</td>";				
																	echo "<td><img src=data:Foto/jpeg;base64,".base64_encode($rreshti['Foto'])." width='100'  height='100'/></td>";	
																	echo "<td style=\"text-align:center\">".$rreshti['Emri_Brendit']."</td>";			
																	echo "<td><a href=\"modifiko_pajisjeelektroshtepiake.php?ID_pajisjaElektroshtepiake=$rreshti[ID_pajisjaElektroshtepiake]\"  class='button special alt' class='button fit'>Modifiko</a></td></tr>";		
																}
															}
														?>
											</table>
										</div>
									</div>
								</div>
							</div>
						</section>
			
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