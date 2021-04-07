<html>
<head>
	<title>UMPEDN</title>
</head>

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shto'])) {	
	
	$Emri_Brendit =$_POST['Emri_Brendit'];


	
				
		
		if(empty($Emri_Brendit)) {
			echo "<font color='red'>Fusha e emrit të brendit është e zbrazët.</font><br/>";
		}
		
				
	 else { 
		// kur te gjitha fushat jane te mbushura (not empty) 
			
		//insert te dhenat ne databaze	
		$rezultati = mysqli_query($lidhu_brend, "CALL shtoBrend('$Emri_Brendit')");
		
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
