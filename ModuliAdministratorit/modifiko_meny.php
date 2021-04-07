  <?php
/* Faqja (home.php) e cila paraqitet pasi Emri te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");


if(isset($_POST['modifiko']))
{	
	$ID_Meny = $_POST['ID_Meny'];
	$Emri=$_POST['Emri'];
	$Linku=$_POST['Linku'];
	$Moduli=$_POST['Moduli'];
		
			
		if(empty($Emri) || empty($Linku)|| empty($Moduli)){
				
		if(empty($Emri)) {
			echo "<font color='red'>Fusha e emrit të menysë është e zbrazët.</font><br/>";
		}
		
		if(empty($Linku)) {
			echo "<font color='red'>Fusha e linkut të menysë është e zbrazët.</font><br/>";
		}if(empty($Moduli)) {
			echo "<font color='red'>Fusha e modulit se ku do të vendoset është e zbrazët.</font><br/>";
		}
		
	
				
	} else {	
		//updating the table
		mysqli_query($lidhu_meny, "SET @p_ID_Meny=${ID_Meny}");
		mysqli_query($lidhu_meny, "SET @p_Emri='${Emri}'");
		mysqli_query($lidhu_meny, "SET @p_Linku='${Linku}'");
		mysqli_query($lidhu_meny, "SET @p_Moduli='${Moduli}'");
		$rezultati=mysqli_query($lidhu_meny,"CALL modifikoMeny(@p_ID_Meny,@p_Emri,@p_Linku,@p_Moduli)");
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting uid from url
$ID_Meny = $_GET['ID_Meny'];

//selecting data associated with this particular uid
$rezultati = mysqli_query($lidhu_meny,"CALL zgjedhIdMeny('$ID_Meny')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri_1=$rez['Emri'];
	$Linku_1=$rez['Linku'];
	$Moduli_1=$rez['Moduli'];


	

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
					width:100%;
					margin-left:-3%;
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
			<!-- Header -->
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
			<section id="banner" data-video="images/banner" height="auto" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner">
				<p style="text-align:right;font-size:12pt;padding:0;margin-right:-5%;font: inherit;margin-top:13%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
						<section>
						<div class="box_login" style="width:70%;margin-left:16%">
							<div class="content">
								<h2 class="align-center">Forma për modifikimin menyve aktuale në uebaplikacion</h2>
								<hr />
								<form action="#" method="post" enctype="multipart/form-data" >
									<div class="field half " >
										Emri i menysë: <br>
										<input name="Emri" id="Emri" type="text"value='<?php echo $Emri_1;?>' required>
									</div><br>
									<div class="field half">
										Emri i fajllit: <br>
										<input type="text" name="Linku" id="Linku" value='<?php echo $Linku_1;?>' required>
									</div><br>
									<div class="field half ">
										Moduli: <br>
										<input name="Moduli" id="Moduli" type="text" value='<?php echo $Moduli_1;?>' required>
									</div>
									
		
									<ul class="actions align-center">
									<input type="hidden" name="ID_Meny" value='<?php echo $_GET['ID_Meny'];?>' />
										<li><input value="MODIFIKO" name="modifiko" class="button special" type="submit"></li>
									</ul>
									
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