<?php
//including the database connection file
include_once("konfigurimi.php");

//getting uid of the data from url
$p_ID_Perdoruesi = $_GET['ID_Perdoruesi'];

//deleting the row from table
$rezultati = mysqli_query($lidhu_perdorues,"CALL fshijPerdorues($p_ID_Perdoruesi)");

//redirecting to the display page (index.php in our case)
header("Location:fshij_perdorues_tabela.php");
?>

