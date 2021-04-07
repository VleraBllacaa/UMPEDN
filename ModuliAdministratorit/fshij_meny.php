<?php
//including the database connection file
include_once("konfigurimi.php");

//getting uid of the data from url
$ID_Meny = $_GET['ID_Meny'];

//deleting the row from table
$rezultati = mysqli_query($lidhu_meny,"CALL fshijMeny('$ID_Meny')");

//redirecting to the display page (index.php in our case)
header("Location:fshij_meny_tabela.php");
?>

