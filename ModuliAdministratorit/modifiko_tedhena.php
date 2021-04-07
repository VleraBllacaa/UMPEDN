 <?php
/* Faqja (home.php) e cila paraqitet pasi Titulli te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko']))
{	
	$ID_Tedhenat = $_POST['ID_Tedhenat'];
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$Fajlli=$_POST['Fajlli'];
	$Pamja=$_POST['Pamja'];
			
		if(empty($Titulli) || empty($Pershkrimi)||empty($Fajlli)||empty($Pamja)){
				
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha e titullit të të dhënës është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha e përshkrimit është e zbrazët.</font><br/>";
		}
		if(empty($Fajlli)) {
			echo "<font color='red'>Fusha e fajllit është e zbrazët.</font><br/>";
		}
		if(empty($Pamja)) {
			echo "<font color='red'>Fusha e pamjes është e zbrazët.</font><br/>";
		}
	
		
	
				
	} else {	
		//updating the table
		mysqli_query($lidhu_tedhena, "SET @p_ID_Tedhenat=${ID_Tedhenat}");
		mysqli_query($lidhu_tedhena, "SET @p_Titulli='${Titulli}'");
		mysqli_query($lidhu_tedhena, "SET @p_Pershkrimi='${Pershkrimi}'");
		mysqli_query($lidhu_tedhena, "SET @p_Fajlli='${Fajlli}'");
		mysqli_query($lidhu_tedhena, "SET @p_Pamja='${Pamja}'");

		$rezultati=mysqli_query($lidhu_tedhena,"CALL modifikoTedhena(@p_ID_Tedhenat,@p_Titulli,@p_Pershkrimi,@p_Fajlli,@p_Pamja)");
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting uid from url
$ID_Tedhenat = $_GET['ID_Tedhenat'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhu_tedhena,"CALL zgjedhIdTedhena('$ID_Tedhenat')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Titulli_1=$rez['Titulli'];
	$Pershkrimi_1=$rez['Pershkrimi'];
	$Fajlli_1=$rez['Fajlli'];
	$Pamja_1=$rez['Pamja'];
}
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
			<style>
		.box_login{
					width:100%;
					margin-left:-3%;
					margin-top:10%;
					margin-bottom:10%;
					height:auto;
					padding-top:5%;
					padding-left:5%;
					padding-right:5%;
					padding-bottom:3%;
					background-color:#f2f2f2;
					border-radius:13px;
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
			<section id="banner" data-video="images/banner" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
				<p style="text-align:right;font-size:12pt;padding:0;margin-right:-23%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
					<div class="box_login content">
				
						<h3>MODIFIKO TË DHËNAT QË GJENDEN NË UEBAPLIKACION</h3>		<hr>
						

						<form action="#" method="post"enctype="multipart/form-data">
								<div class="field  ">
									Titulli:<br>

									<input name="Titulli" id="Titulli" type="text" value='<?php echo $Titulli_1 ;?>' required>
								</div>
								
								<div class="field  ">
								Përshkrimi:<br>
									<textarea name="Pershkrimi" id="Pershkrimi" rows="8" value='' required><?php echo $Pershkrimi_1 ;?></textarea>
								</div>
								
								<div class="field">	
									Fajlli:<br>
									<input name="Fajlli" id="Fajlli" type="text" value='<?php echo $Fajlli_1 ;?>' required>
								</div>
									<div class="field  ">
												Pamja:<br>
										<input name="Pamja" id="Pamja" type="text" value='<?php echo $Pamja_1 ;?>' required>
									</div>
									
								<ul class="actions align-center" >
								
									<input type="hidden" name="ID_Tedhenat" value='<?php echo $_GET['ID_Tedhenat'];?>' />
									<li><input value="MODIFIKO" name="modifiko" class="button special" type="submit"></li>
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