<?php
//including the database connection file
include_once("konfigurimi.php");
//getting uid of the data from url
$ID_Porosia = $_GET['ID_Porosia'];

//deleting the row from table
$rezultati = mysqli_query($lidhu_porosi,"CALL fshijPorosi('$ID_Porosia')");

//redirecting to the display page (index.php in our case)
header("Location:porosite_e_pajisjeve_elektroshtepiake.php");
?>

