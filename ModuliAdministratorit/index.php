<?php
/* Index.php faqja qe permban formen e loginit) */
	include_once('kyqu.php'); // Include Login Script
	if ((isset($_SESSION['Perdoruesi']) != '')) 
	{
		header('Location: ballina_e_administratorit.php');
	}	
?>
	<?php include_once("konfigurimi.php");
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
		<link rel="stylesheet" href="assets/css/main_NEW1.css" />
		<style>
		.box_login{
					width:100%;
					margin-left:-3%;
					margin-top:40%;
				
					padding-top:5%;
					padding-left:5%;
					padding-right:5%;
					padding-bottom:3%;
					margin-bottom:40%;
					background-color:#f2f2f2;
					border-radius:13px;
					
		}</style>
	</head>
	<body>
		<!-- Header -->
				<!-- Header -->
	
		
				<!-- Header -->
	<?php include("konfigurimi.php"); ?>
		
			<!-- Header -->
	
		
				<?php
            $rezultati = mysqli_query($lidhu, "CALL zgjedhTeDhenatFillim('Header')");
			mysqli_next_result($lidhu);
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
				<header id="header" class="alt">
				<div class="logo">
				</div>		
				
			</header>
		
		
		<section id="banner"style="background:url('images/<?php echo $Fajlli;?>'); background-repeat:no-repeat; background-size: cover;">
				<div class="inner">
					<h1 style="margin-top:15%;margin-bottom:15%;"><?php echo $Titulli?></h1>
					
				</div>
				
		
			</section><?php } ?>
			
				
		<!-- Nav -->
		<!-- Banner -->
		<!--	
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
		
		<!-- Nav -->
		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" class="style3" data-video="images/banner" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">	
					<div class="box_login content">
						<h2>KYQJA NË UEBAPLIKACION</h2><hr>
						<h3>Udhëzim</h3>
						<blockquote>Për t`u kycur në uebaplikacion ju lutem kontaktoni administratorin për krijimin e llogarisë</blockquote>

							<form action="#" method="post">
								<div class="field half ">
									<input name="Perdoruesi" id="Perdoruesi" type="text" placeholder="Përdoruesi"  >
								</div>
								<br>
								<div class="field half align-center">	
									<input name="Fjalekalimi" id="Fjalekalimi" type="password" placeholder="Fjalëkalimi">
								</div>
								<ul class="actions align-center">
									<li><input value="Kyçu" name="kyqu" class="button alt special" type="submit"></li>
								</ul>
							</form>
							
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