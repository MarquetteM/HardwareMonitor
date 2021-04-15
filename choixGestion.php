<?php
session_start();

if (!isset($_SESSION)){
    header('location:index.php');
}
else {
    if (time()-$_SESSION['timeout'] > 600) {
        session_destroy();
        header('location:index.php');
        exit();
    }   
    if ($_SESSION['droit'] != 'Gestion'){
        header('location:index.php');
        exit();
    }
}
echo "choix Gestion";

