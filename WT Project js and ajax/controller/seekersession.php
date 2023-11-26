<?php 
    session_start();
    if (
        !isset($_SESSION['sid']) &&
        !isset($_SESSION['semail']) &&
        !isset($_SESSION['susertype']) &&
        !isset($_SESSION['susername'])
        
    ) {
        header('location: ../view/login.php');
    }
?>