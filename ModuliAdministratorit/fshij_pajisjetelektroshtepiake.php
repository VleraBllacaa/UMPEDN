<?php
//including the database connection file
include_once("konfigurimi.php");

//getting uid of the data from url
$ID_pajisjaElektroshtepiake = $_GET['ID_pajisjaElektroshtepiake'];

//deleting the row from table
$rezultati = mysqli_query($lidhu_pajisje,"CALL fshijPajisje('$ID_pajisjaElektroshtepiake')");

//redirecting to the display page (index.php in our case)
header("Location:fshij_pajisjetelektroshtepiake_tabela.php");
?>

