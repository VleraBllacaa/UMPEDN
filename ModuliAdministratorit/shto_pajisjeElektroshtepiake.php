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
			$Pershkrimi = $_POST['Pershkrimi'];
			$Nr_i_njesise = $_POST['Nr_i_njesise'];
			$Cmimi = $_POST['Cmimi'];
			$ID_Brendi = $_POST['ID_Brendi'];
			$Kodi = $_POST['Kodi'];
			$imgData =addslashes (file_get_contents($_FILES['file']['tmp_name']));
			$maxsize = 10000000; 
			
			function customError($errno, $errstr) {
   echo "<b>Error:</b> [$errno] $errstr<br>";
   echo "Ending Script";
   die();
 }

 //set error handler
 set_error_handler("customError",E_USER_WARNING);

 //trigger error
 
$test=1000;
			
			if(empty($Emri) || empty($Pershkrimi) || empty($Nr_i_njesise) || empty($Cmimi) || empty($ID_Brendi)||empty($Kodi)){
						
				if(empty($Emri)) {
					echo "<font color='red'>Fusha e emrit të pajisjes është e zbrazët.</font><br/>";
				}
				
				if(empty($Pershkrimi)) {
					echo "<font color='red'>Fusha e përshkrimit të pajisjes është e zbrazët.</font><br/>";
				}
				
				if(empty($Nr_i_njesise)) {
					echo "<font color='red'>Fusha e numrit të stokut është e zbrazët.</font><br/>";
				}
				
				if(empty($Cmimi)) {
					echo "<font color='red'>Fusha e cmimit të pajisjes është e zbrazët</font><br/>";
				}
						
				if(empty($ID_Brendi)) {
					echo "<font color='red'>Fusha e brendit të pajisjes nuk është selektuar.</font><br/>";
				}
				if(empty($Kodi)) {
					echo "<font color='red'>Fusha e kodit të pajisjes nuk është shkruar.</font><br/>";
				} 
				
						
			}else { 
				// kur te gjitha fushat jane te mbushura (not empty) 
					
				//insert te dhenat ne databaze me proceduren shtoPajisje	
				if ($Kodi<=1000 ){
					trigger_error("<p style='color:red'>Numri i kodit të pajisjes duhet të jetë më i madh se numri 1000. <br> Kthehuni mbrapa për ta përmirsuar të dhënën në fushën e kodit.</p>");
					
				}else{
				
				$rezultati = mysqli_query($lidhu_pajisje, "CALL shtoPajisje('$Emri','$Pershkrimi','$Nr_i_njesise','$Kodi','$Cmimi','$imgData','$ID_Brendi')");
				
				
				//kur te dhenat futen me sukses ne databaze
					echo "<script>
				 setTimeout(function(){
					window.location.href = 'ballina.php';
				 }, 5000);
			  </script>";
					echo"<p><b>   E dhëna është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda.<b></p>";
				 
			}
			}}
?>
</body>
</html>
