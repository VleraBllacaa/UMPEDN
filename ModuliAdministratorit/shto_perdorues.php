<html>
<head>
	<title>UMPEDN</title>
</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

		if(isset($_POST['shtoPerdorues'])) {	
			$Perdoruesi_1 = $_POST['Perdoruesi'];
			$Fjalekalimi_1 = $_POST['Fjalekalimi'];
			$Imella=$_POST['Imella'];
			
			
			if(empty($Perdoruesi_1) || empty($Fjalekalimi_1) ){
						
				if(empty($Perdoruesi_1)) {
					echo "<font color='red'>Fusha e emrit të përdoruesit  është e zbrazët.</font><br/>";
				}
				
				if(empty($Fjalekalimi_1)) {
					echo "<font color='red'>Fusha e fjalëkalimit është e zbrazët.</font><br/>";
				}
				if(empty($Imella)) {
					echo "<font color='red'>Fusha e imellës është e zbrazët.</font><br/>";
				}
				
				
						
			} else { $Imella = filter_var($Imella, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (filter_var($Imella, FILTER_VALIDATE_EMAIL) === false) {
    echo("$Imella nuk eshte valide");
} 			else {
    echo("$Imella eshte valide");

				// kur te gjitha fushat jane te mbushura (not empty) 
					
				//insert te dhenat ne databaze me proceduren shtoPajisje	
				$rezultati = mysqli_query($lidhu_perdorues, "CALL shtoPerdorues('$Perdoruesi_1','$Fjalekalimi_1','$Imella')");
				
				
				//kur te dhenat futen me sukses ne databaze
					echo "<script>
				 setTimeout(function(){
					window.location.href = 'perdoruesit.php';
				 }, 5000);
			  </script>";
					echo"<p><b>   E dhëna është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda.<b></p>";
				 
			}}
		}
?>
</body>
</html>
