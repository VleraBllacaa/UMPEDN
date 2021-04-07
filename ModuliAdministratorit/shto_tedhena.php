<html>
<head>
	<title>UMPEDN</title>
</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shto'])) {	
	$Titulli = $_POST['Titulli'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$Fajlli = $_POST['Fajlli'];
	$Pamja = $_POST['Pamja'];

	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($Fajlli) || empty($Pamja) ){
				
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha e titullt të të dhënës është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha e përshkrimit të të dhënës është e zbrazët.</font><br/>";
		}
		
		if(empty($Fajlli)) {
			echo "<font color='red'>Fusha e fajllit të të dhënës është e zbrazët.</font><br/>";
		}
		
		if(empty($Pamja)) {
			echo "<font color='red'>Fusha e pamjes se ku do të vendoset është e zbrazët.</font><br/>";
		}
				
			
	} else { 
		// kur te gjitha fushat jane te mbushura (not empty) 
			
		//insert te dhenat ne databaze	
		$rezultati = mysqli_query($lidhu_tedhena, "CALL shtoTedhena('$Titulli','$Pershkrimi','$Fajlli','$Pamja')");
		
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
