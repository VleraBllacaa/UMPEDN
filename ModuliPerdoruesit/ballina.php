<?php
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
		<title>UMPEDN</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main3_new.css" />
	</head>
	<body>
	<?php include_once("fillimi.php"); ?>
		<!-- Header -->
			

		<!-- Nav -->
				<?php include_once('menyte.php');?>
			<nav id="menu">
				<ul class="links">
					
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
			

		<!-- Three -->
			<section id="three" class="wrapper style2" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner"><?php 
				$vizita=1;
				if(isset($_COOKIE["vizita"])){
					$vizita=(int)$_COOKIE["vizita"];
				}$Muaji=2592000+ time();
				//this adds 30 days to the current time
				setcookie("vizita",date("F jS - g:i a"), $Muaji);
				if(isset($_COOKIE['vizita'])){
				$E_fundit=$_COOKIE['vizita']; 
				echo "<p style='text-align:right;color:white;'>Vizita juaj e fundit ishte me: ".$E_fundit.".</p>";}
				else
				{
				echo "<p style='text-align:right; color:white;'>Vizita juaj e pare ne uebaplikacionin tone! Ju deshirojme mireseardhje!</p>";}
				?>
				
					<div class="grid-style">
					<?php 
		            
					 	$query = "CALL zgjedhPajisjeBalline()";
						$rezultati = mysqli_query($lidhu_porosi, $query);
						while($rreshti = mysqli_fetch_array($rezultati))
						{
							extract($rreshti);
					
					?>
						<div>
							<div class="box" style="border-radius:13px;background-color:#f2f2f2;" >
							
								<div class="image fit" style="width:50%;margin-left:auto;margin-right:auto;">
								<?php echo '<img style=" height:250px;"src="data:Foto/jpeg;base64,'.base64_encode( $rreshti['Foto'] ).'">'; ?> 
								</div>
								<div class="content" style="text-align:justify;text-justify:inter-word;">
									<header class="align-center">
										<h2><?php echo $Emri;?></h2>
										<p>Brendi: <?php echo $Emri_Brendit ?><br> Cmimi:<?php echo $Cmimi;?>€ <br> Në stok gjenden: <?php echo $Nr_i_njesise;?> pajisje.</p>
									</header>
									<hr />
									<p>Kodi:<?php echo $Kodi;?></p>
									<p><?php echo $Pershkrimi;?><p>
								</div>
							</div>
						</div>

						
<?php } ?>
					</div>
				</div>
			</section>

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