<?php
//including the database connection file
include_once("konfigurimi.php");


//getting uid of the data from url
$ID_Tedhenat = $_GET['ID_Tedhenat'];

//deleting the row from table
$rezultati = mysqli_query($lidhu_tedhena,"CALL fshijTedhenat('$ID_Tedhenat')");

//redirecting to the display page (index.php in our case)
header("Location:fshij_tedhena_tabela.php");
?>

