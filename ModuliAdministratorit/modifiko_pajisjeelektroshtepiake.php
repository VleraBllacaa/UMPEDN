 <?php
// including the database connection file
include_once("konfigurimi.php");
include("kontrollo.php");
if(isset($_POST['modifiko']))
{	
	$ID_pajisjaElektroshtepiake = $_POST['ID_pajisjaElektroshtepiake'];
	$Emri=$_POST['Emri'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$Nr_i_njesise=$_POST['Nr_i_njesise'];	
	$Kodi = $_POST['Kodi'];
	$Cmimi=$_POST['Cmimi'];
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));	
	$maxsize = 10000000; 
	$ID_Brendi=$_POST['ID_Brendi'];
	
	
	if(empty($Emri) || empty($Pershkrimi) || empty($Nr_i_njesise)||empty($Kodi)) {	
			
		if(empty($Emri)) {
			echo "<font color='red'>Fusha e emrit të pajisjes është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha e përshkrimit të pajisjes është e zbrazët.</font><br/>";
		}
		
		if(empty($Nr_i_njesise)) {
			echo "<font color='red'>Fusha e njësive që gjenden në stok është e zbrazët.</font><br/>";
		}if(empty($Kodi)) {
			echo "<font color='red'>Fusha e kodit të pajisjeve është e zbrazët.</font><br/>";
		}				
	} else {	
		
		mysqli_query($lidhu_pajisje, "SET @p_ID_pajisjaElektroshtepiake=${ID_pajisjaElektroshtepiake}");
		mysqli_query($lidhu_pajisje, "SET @p_Emri='${Emri}'");
		mysqli_query($lidhu_pajisje, "SET @p_Pershkrimi='${Pershkrimi}'");
		mysqli_query($lidhu_pajisje, "SET @p_Nr_i_njesise='${Nr_i_njesise}'");
		mysqli_query($lidhu_pajisje, "SET @p_Kodi='${Kodi}'");
		mysqli_query($lidhu_pajisje, "SET @p_Cmimi='${Cmimi}'");
		mysqli_query($lidhu_pajisje, "SET @p_Foto='${imgData}'");
		mysqli_query($lidhu_pajisje, "SET @p_ID_Brendi='${ID_Brendi}'");
		
		$rezultati=mysqli_query($lidhu_pajisje,"CALL modifikoPajisje(@p_ID_pajisjaElektroshtepiake,@p_Emri,@p_Pershkrimi,@p_Nr_i_njesise, @p_Kodi,@p_Cmimi,@p_Foto,@p_ID_Brendi)");
	
		header("Location: ballina.php");
	}
}
?>
<?php
//getting ID_pajisjaElektroshtepiake from url
$ID_pajisjaElektroshtepiake = $_GET['ID_pajisjaElektroshtepiake'];

//selecting data associated with this particular ID_pajisjaElektroshtepiake
$rezultati = mysqli_query($lidhu_pajisje,"CALL zgjedhIdPajisje('$ID_pajisjaElektroshtepiake')");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri_1=$rez['Emri'];
	$Pershkrimi_1=$rez['Pershkrimi'];
	$Nr_i_njesise_1=$rez['Nr_i_njesise'];	
	$Kodi_1=$rez['Kodi'];
	$Cmimi_1=$rez['Cmimi'];
	$imgData_1 =$rez['Foto'];
	$ID_Brendi_1=$rez['ID_Brendi'];
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
			<section id="banner" data-video="images/banner" height="auto" style="background-image:url(images/backgroundlight.jpg);">
				<div class="inner"><p style="text-align:right;font-size:12pt;padding:0;margin-right:12%;font: inherit;margin-top:11%;">Përshëndetje, <em><?php  echo $perdoruesi;?>!</em></p>
			
						<section>
						<div class="box_login" style="width:70%;margin-left:16%">
							<div class="content">
								<h2 class="align-center">Forma për modifikimin e të dhënave të pajisjeve elektroshtëpiake aktuale në uebaplikacion</h2>
								<hr />
								<form action="modifiko_pajisjeelektroshtepiake.php" method="post" enctype="multipart/form-data" >
									<div class="field  " >
										Emri: <br>
										<input name="Emri" id="Emri" type="text"value='<?php echo $Emri_1;?>' required>
									</div>
									
									<div class="field">
										Përshkrimi <br>
										<textarea name="Pershkrimi" id="Pershkrimi" rows="6"value='' required><?php echo $Pershkrimi_1;?></textarea>
									</div>
									
									<div class="field half " style="margin-right:3%">		
										Numri i sasisë në stok:<br>
										<input name="Nr_i_njesise" id="Nr_i_njesise" type="text" value='<?php echo $Nr_i_njesise_1;?>' required>
									</div>
									
									<div class="field  half">
										Cmimi <br>
										<input name="Cmimi" id="Cmimi" type="text"value='<?php echo $Cmimi_1;?>' required>
									</div>
									
									<div class="field  ">
										Kodi: <br>
										<input name="Kodi" id="Kodi" type="text" value='<?php echo $Kodi_1;?>' required>
									</div>
									
									<div class="field  " style="margin-left:19%">
										<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
										<input name="userfile" type="file" />	
									</div>
									
									<div class="field">
											<select name="ID_Brendi">
														<option selected="selected" required>Zgjedh brendin</option>
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
									</div>
									
									<ul class="actions align-center">
										<input type="hidden" name="ID_pajisjaElektroshtepiake" value='<?php echo $_GET['ID_pajisjaElektroshtepiake'];?>' />
										<li><input value="MODIFIKO" name="modifiko" class="button special" type="submit"></li>
									</ul>
									<br><br>
								</form>
							</div>
						</div>
					</section>
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