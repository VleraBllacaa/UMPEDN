<html>
<head>
	<title>UMPEDN</title>
</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shto'])) {	
	$Emri = $_POST['Emri'];
	$Linku =$_POST['Linku'];
	$Moduli =$_POST['Moduli'];


	if(empty($Emri) || empty($Linku) ){
				
		if(empty($Emri)) {
			echo "<font color='red'>Fusha e emrit është e zbrazët.</font><br/>";
		}
		
		if(empty($Linku)) {
			echo "<font color='red'>Fusha e linkut është e zbrazët.</font><br/>";
		}
		if(empty($Moduli)) {
			echo "<font color='red'>Fusha e modulit është e zbrazët.</font><br/>";
		}
		
		
				
	} else { 
		// kur te gjitha fushat jane te mbushura (not empty) 
			
		//insert te dhenat ne databaze	
		$rezultati = mysqli_query($lidhu_meny, "CALL shtoMeny('$Emri','$Linku','$Moduli')");
		
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
