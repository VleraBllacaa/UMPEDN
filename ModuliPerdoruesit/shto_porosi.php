<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shto'])) {	
	$Emri_pajisjes = mysqli_real_escape_string($lidhu_porosi,$_POST['Emri_pajisjes']);

	$Sasia =mysqli_real_escape_string($lidhu_porosi, $_POST['Sasia']);
	$Kodi_pajisjes =mysqli_real_escape_string($lidhu_porosi, $_POST['Kodi_pajisjes']);
	$Adresa =mysqli_real_escape_string($lidhu_porosi, $_POST['Adresa']);
	$Nr_tel =mysqli_real_escape_string($lidhu_porosi, $_POST['Nr_tel']);
		$Emri_klientit = mysqli_real_escape_string($lidhu_porosi,$_POST['Emri_klientit']);
	// checking empty fields
	if(empty($Emri_pajisjes) || empty($Nr_tel) || empty($Sasia) || empty($Emri_klientit) || empty($Adresa)||empty($Kodi_pajisjes)){
				
		if(empty($Emri_pajisjes)) {
			echo "<font color='red'>Emri_pajisjes eshte i zbrazet</font><br/>";
		}
		
		if(empty($Sasia)) {
			echo "<font color='red'>Nr i njesise eshte e zbrazet</font><br/>";
		}
		
		
		if(empty($Adresa)) {
			echo "<font color='red'>Adresa nuk eshte shkruar!</font><br/>";
		}
		if(empty($Nr_tel)) {
			echo "<font color='red'>Nr i telefonit nuk eshte shkruar!</font><br/>";
		}
		if(empty($Emri_klientit)) {
			echo "<font color='red'>Emri_pajisjes i klientit nuk eshte shkruar!</font><br/>";
		}
				
		
		if(empty($Kodi_pajisjes)) {
			echo "<font color='red'>Kodi_pajisjes-i i krijuesit te ngjarjes nuk eshte shkruar!</font><br/>";
		
		
		}
		
		
				
	} else { 
		// kur te gjitha fushat jane te mbushura (not empty) 
			
		//insert te dhenat ne databaze	
		$rezultati = mysqli_query($lidhu_porosi, "CALL shtoPorosi('$Emri_pajisjes','$Sasia','$Kodi_pajisjes','$Adresa','$Nr_tel','$Emri_klientit')");
		
		//kur te dhenat futen me sukses ne databaze
			echo "<script>
         setTimeout(function(){
            window.location.href = 'porosit.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhëna është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
	}
}
?>
</body>
</html>
