 <?php
/* Faqja (home.php) e cila paraqitet pasi Emri_pajisjes te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko']))
{	
	$ID_Porosia =$_POST['ID_Porosia'];
	$Emri_pajisjes=$_POST['Emri_pajisjes'];
	$Sasia=$_POST['Sasia'];
	$Kodi_pajisjes=$_POST['Kodi_pajisjes'];
	$Adresa=$_POST['Adresa'];
	$Nr_tel=$_POST['Nr_tel'];
	$Emri_klientit=$_POST['Emri_klientit'];
						
		
			
		if(empty($Emri_pajisjes) || empty($Sasia)||empty($Kodi_pajisjes)||empty($Adresa)||empty($Nr_tel)||empty($Emri_klientit)){
				
		if(empty($Emri_pajisjes)) {
			echo "<font color='red'>Fusha e emrit të pajisjes elektroshtëpiake është e zbrazët.</font><br/>";
		}
		
		if(empty($Sasia)) {
			echo "<font color='red'>Fusha e numrit të sasisë është e zbrazët.</font><br/>";
		}
		if(empty($Kodi_pajisjes)) {
			echo "<font color='red'>Fusha e kodit të ngjarjes është e zbrazët.</font><br/>";
		}
		if(empty($Adresa)) {
			echo "<font color='red'>Fusha e adresës është e zbrazët.</font><br/>";
		}
		if(empty($Nr_tel)) {
			echo "<font color='red'>Fusha e numrit të klientit është e zbrazët.</font><br/>";
		}
		if(empty($Emri_klientit)) {
			echo "<font color='red'>Fusha e emrit të klientit është e zbrazët.</font><br/>";
		}
		
	
				
	} else {	
		//updating the table
		mysqli_query($lidhu_porosi, "SET @p_ID_Porosia=${ID_Porosia}");
		mysqli_query($lidhu_porosi, "SET @p_Emri_pajisjes='${Emri_pajisjes}'");
		mysqli_query($lidhu_porosi, "SET @p_Sasia='${Sasia}'");
		mysqli_query($lidhu_porosi, "SET @p_Kodi_pajisjes='${Kodi_pajisjes}'");
		mysqli_query($lidhu_porosi, "SET @p_Adresa='${Adresa}'");
		mysqli_query($lidhu_porosi, "SET @p_Nr_tel='${Nr_tel}'");
		mysqli_query($lidhu_porosi, "SET @p_Emri_klientit='${Emri_klientit}'");
		$rezultati=mysqli_query($lidhu_porosi,"CALL modifikoPorosi(@p_ID_Porosia,@p_Emri_pajisjes,@p_Sasia,@p_Kodi_pajisjes,@p_Adresa, @p_Nr_tel,@p_Emri_klientit)");
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_porosi_tabela.php");
	}
}
?>
<?php
//getting uid from url
$ID_Porosia = $_GET['ID_Porosia'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhu_porosi,"CALL zgjedhIdPorosi('$ID_Porosia')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri_pajisjes_1=$rez['Emri_pajisjes'];
	$Sasia_1=$rez['Sasia'];
	$Kodi_pajisjes_1=$rez['Kodi_pajisjes'];
	$Adresa_1=$rez['Adresa'];
	$Nr_tel_1=$rez['Nr_tel'];
	$Emri_klientit_1=$rez['Emri_klientit'];

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
		<link rel="stylesheet" href="assets/css/main4_1.css" />
			<style>
		.box_login{
					width:80%;
					margin-left:13%;
					margin-top:5%;
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
			
		<!-- Nav -->
		<!-- Banner -->
		<!--	
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->	<?php include_once("fillimi.php"); ?>
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
			<section id="banner" data-video="images/banner" height="auto" style="background-image:url(images/backgroundlight.jpg);">
			
				<div class="inner">
						<p style="text-align:right;font-size:12pt;padding:0;margin-right:-5%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
						<section>
						<div class="box_login">
							<div class="content">
								<h2 class="align-center">Forma për modifikimin e porosive aktuale në uebaplikacion</h2>
								<hr />
									<form action="modifiko_porosi.php" method="post" enctype="multipart/form-data" >
									<div class="field  " >
										Emri i pajisjes: <br>
										<input name="Emri_pajisjes" id="Emri_pajisjes" type="text" value='<?php echo $Emri_pajisjes_1;?>' required>
									</div>
									
										<div class="field half " style="margin-right:3%">
										Sasia: <br>
										<input name="Sasia" id="Sasia" type="text" value='<?php echo $Sasia_1;?>' required>
									</div>
									<div class="field half ">
										Kodi i pajisjes: <br>
										<input name="Kodi_pajisjes" id="Kodi_pajisjes" type="text" value='<?php echo $Kodi_pajisjes_1;?>' required>
										</div>
									<div class="field half " style="margin-right:3%">
										Adresa: <br>
										<input name="Adresa" id="Adresa" type="text" value='<?php echo $Adresa_1;?>' required>
									</div>
									<div class="field half ">
										Numri i telefonit: <br>
										<input name="Nr_tel" id="Nr_tel" type="text" value='<?php echo $Nr_tel_1;?>' required>
									</div>
									
									
									<div class="field  ">
										Emri i klientit: <br>
										<input name="Emri_klientit" id="Emri_klientit" type="text" value='<?php echo $Emri_klientit_1;?>' required>
									</div>
									
								
								
									
									<ul class="actions align-center" >
										<input type="hidden" name="ID_Porosia" value='<?php echo $_GET['ID_Porosia'];?>' />
										<li><input value="MODIFIKO" name="modifiko" class="button special" type="submit"></li>
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