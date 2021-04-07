<?php
//including the database connection file
include_once("konfigurimi.php");

//getting uid of the data from url
$ID_Brendi = $_GET['ID_Brendi'];

//deleting the row from table
$rezultati = mysqli_query($lidhu_brend,"CALL fshijBrend($ID_Brendi)");

//redirecting to the display page (index.php in our case)
header("Location:fshij_brend_tabela.php");
?>

