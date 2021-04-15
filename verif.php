<?php
require "Modele.php";
session_start();

$result = rechercheUser($_POST['ident'], $_POST['pass']);
if ($result['compte'] == null){
    $_SESSION['erreur'] = "Erreur d'identification"; 
    header("location:index.php");
    exit;
}
else {
    if ($result['compte'] == 1){
        $_SESSION['droit'] = "Gestion";
        $_SESSION['timeout'] = time();
        $_SESSION['erreur'] = "";
        header("location:choixGestion.php");
        exit;
    }
    else if ($result['compte'] == 2){
        $_SESSION['droit'] = "Reservation";
        $_SESSION['timeout'] = time();
        $_SESSION['erreur'] = "";
        header("location:listeMateriel.php");
        exit;
    }
}