<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese Perdoruesi dhe Fjalekalimii qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include_once("konfigurimi.php");
 //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["kyqu"]))
	{
		if(empty($_POST["Perdoruesi"]) || empty($_POST["Fjalekalimi"]))
		{
			$error = "Dy fushat duhen që të plotësohen.";
		}else
		{
			// Define $Perdoruesi and $Fjalekalimi
			$Perdoruesi=$_POST['Perdoruesi'];
			$Fjalekalimi= MD5($_POST['Fjalekalimi']);
			//Check Perdoruesi and Fjalekalimi from database
			$sql="CALL zgjedhPerdorues('$Perdoruesi','$Fjalekalimi')";
			$rezultati=mysqli_query($lidhu_perdorues,$sql);
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			//If Perdoruesi and Fjalekalimi exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['Perdoruesi'] = $Perdoruesi; // Initializing Session
				header("location: ballina_e_administratorit.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect Perdoruesi or Fjalekalimi.";
			}
		}
	}
?>