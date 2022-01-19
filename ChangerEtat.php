<?php
session_start();
$result = $_SESSION["tab"];
if(isset($_GET["x"])&&isset($_GET["nb"])){
    $x = intval($_GET["x"]);
    $nb = intval($_GET["nb"]);
    $result[$nb]["presence"] = $x;
    $_SESSION["tab"] = $result;
}
header("Location: TP-Tableau-2DV2.php"); //redirection vers la page home
?>