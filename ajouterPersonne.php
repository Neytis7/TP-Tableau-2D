<?php
session_start();
$result = $_SESSION["tab"];
$i = $_SESSION["indice"];
if(isset($_POST["prenom"])&&isset($_POST["nom"])&&isset($_POST["age"])){
    if($i == null){
        $i = 0;
    }
    $result[$i]["nom"] = $_POST["nom"];
    $result[$i]["prenom"] = $_POST["prenom"];
    $result[$i]["age"] = $_POST["age"];
    $result[$i]["presence"] = 1;

    $_SESSION["indice"] = $i + 1;
    $_SESSION["tab"] = $result;
}
header("Location: TP-Tableau-2DV2.php"); //redirection vers la page home
?>