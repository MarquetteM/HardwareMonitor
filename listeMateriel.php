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
    if ($_SESSION['droit'] != 'Reservation'){
        header('location:index.php');
        exit();
    }
}
$_SESSION['timeout'] = time();
echo 'list materiel';
