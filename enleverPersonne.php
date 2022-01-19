<?php
session_start();
$result = $_SESSION["tab"];
if(isset($_GET["nb"])){
    $nb = $_GET["nb"];
    unset($result[$nb]);
    sort($result);
    $_SESSION["tab"] = $result;
}
header("Location: TP-Tableau-2DV2.php"); //redirection vers la page home
?>