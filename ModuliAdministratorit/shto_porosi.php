<html>
<head>
	<title>UMPEDN</title>
</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shto'])) {	
	$Emri_pajisjes =$_POST['Emri_pajisjes'];

	$Sasia = $_POST['Sasia'];
	$Kodi_pajisjes =$_POST['Kodi_pajisjes'];
	$Adresa =$_POST['Adresa'];
	$Nr_tel =$_POST['Nr_tel'];
		$Emri_klientit = $_POST['Emri_klientit'];
	// checking empty fields
	if(empty($Emri_pajisjes) || empty($Nr_tel) || empty($Sasia) || empty($Emri_klientit) || empty($Adresa)||empty($Kodi_pajisjes)){
				
		if(empty($Emri_pajisjes)) {
			echo "<font color='red'>Fusha e emrit të pajisjes është e zbrazët.</font><br/>";
		}
		
		if(empty($Sasia)) {
			echo "<font color='red'>Fusha e numrit të sasisë është e zbrazët.</font><br/>";
		}
		
		
		if(empty($Adresa)) {
			echo "<font color='red'>Fusha e adresës është e zbrazët.</font><br/>";
		}
		if(empty($Nr_tel)) {
			echo "<font color='red'>Fusha e numrit të telefonit është e zbrazët.</font><br/>";
		}
		if(empty($Emri_klientit)) {
			echo "<font color='red'>Fusha e emrit të klientit është e zbrazët.</font><br/>";
		}
				
		
		if(empty($Kodi_pajisjes)) {
			echo "<font color='red'>Fusha e kodit të pajisjes është e zbrazët.</font><br/>";
		}
		
				
	} else { 
		// kur te gjitha fushat jane te mbushura (not empty) 
			
		//insert te dhenat ne databaze	
		$rezultati = mysqli_query($lidhu_porosi, "CALL shtoPorosi('$Emri_pajisjes','$Sasia','$Kodi_pajisjes','$Adresa','$Nr_tel','$Emri_klientit')");
		
		//kur te dhenat futen me sukses ne databaze
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhëna është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
	}
}
?>
</body>
</html>
