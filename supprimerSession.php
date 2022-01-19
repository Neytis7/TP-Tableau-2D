<?php 
session_start();
session_destroy();
header("Location: TP-Tableau-2DV2.php"); //redirection vers la page home
?>