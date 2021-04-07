<?php
/* Kontrollon sesionin */
include('konfigurimi.php');
session_start();
$kontrollo_perdorues=$_SESSION['Perdoruesi'];
$kontrollimi_sql = mysqli_query($lidhu,"CALL kontrolloPerdorues('$kontrollo_perdorues') ");
$rreshti=mysqli_fetch_array($kontrollimi_sql,MYSQLI_ASSOC);
$perdoruesi=$rreshti['Perdoruesi'];
if(!isset($kontrollo_perdorues))
{ header("Location: index.php");} 
?>