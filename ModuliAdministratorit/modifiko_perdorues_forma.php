 <?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko_perdorues']))
{	
	$ID_Perdoruesi = $_POST['ID_Perdoruesi'];
	$Perdoruesi=$_POST['Perdoruesi'];
	$Fjalekalimi=$_POST['Fjalekalimi'];
	$Imella=$_POST['Imella'];

		
			
		if(empty($Perdoruesi) || empty($Fjalekalimi)){
				
		if(empty($Perdoruesi)) {
			echo "<font color='red'>Fusha e emrit të përdoruesit është e zbrazët.</font><br/>";
		}
		
		if(empty($Fjalekalimi)) {
			echo "<font color='red'>Fusha e fjalëkalimit është e zbrazët.</font><br/>";
		}
		
	
				
	} else {	
		//updating the table
		mysqli_query($lidhu_perdorues, "SET @p_ID_Perdoruesi=${ID_Perdoruesi}");
		mysqli_query($lidhu_perdorues, "SET @p_Perdoruesi='${Perdoruesi}'");
		mysqli_query($lidhu_perdorues, "SET @p_Fjalekalimi='${Fjalekalimi}'");
		mysqli_query($lidhu_perdorues, "SET @p_Imella='${Imella}'");
		
		$rezultati=mysqli_query($lidhu_perdorues,"CALL modifikoPerdorues(@p_ID_Perdoruesi,@p_Perdoruesi,@p_Fjalekalimi,@p_Imella)");
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: modifiko_perdorues_tabela.php");
	}
}
?>
<?php
//getting uid from url
$ID_Perdoruesi = $_GET['ID_Perdoruesi'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhu_perdorues,"CALL zgjedhIdPerdorues('$ID_Perdoruesi')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Perdoruesi_1=$rez['Perdoruesi'];
	$Fjalekalimi_1=$rez['Fjalekalimi'];
	$Imella_1=$rez['Imella'];



	

}
?> <!DOCTYPE HTML>
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
			<section id="banner" data-video="images/banner"style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
				<p style="text-align:right;font-size:12pt;padding:0;margin-right:-23%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
					<div class="box_login content">
				
						<h3>MODIFIKO PËRDORUES ME TË DREJTA TË ADMINISTRATORIT</h3>		<hr>
						

						<form action="modifiko_perdorues_forma.php" method="post"enctype="multipart/form-data">
								<div class="field half ">
									Përdoruesi:<br>
									<input name="Perdoruesi" id="Perdoruesi" type="text" value='<?php echo $Perdoruesi_1;?>' required>
								</div>
								<br>Fjalëkalimi:<br>
								<div class="field half align-center">	
									<input name="Fjalekalimi" id="Fjalekalimi" type="text" value='<?php echo $Fjalekalimi_1;?>' required>
								</div>
								<br>Imella:<br>
								<div class="field half align-center">	
									<input name="Imella" id="Imella" type="text" value='<?php echo $Imella_1;?>' required>
								</div>
								<ul class="actions align-center" >
									<input type="hidden" name="ID_Perdoruesi" value='<?php echo $_GET['ID_Perdoruesi'];?>' />
									<li><input value="MODIFIKO" name="modifiko_perdorues" class="button special" type="submit"></li>
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