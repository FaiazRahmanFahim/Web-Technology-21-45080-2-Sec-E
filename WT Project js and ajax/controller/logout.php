<?php 
    session_start();

    if($_GET['msg']=="ra"){
        unset($_SESSION['aid'],$_SESSION['aemail'],$_SESSION['ausertype'],$_SESSION['ausername']);

        header('location: ../view/login.php');

    } elseif($_GET['msg']=="rs"){
        unset($_SESSION['sid'],$_SESSION['semail'],$_SESSION['susertype'],$_SESSION['susername']);

        header('location: ../view/login.php');

    } elseif($_GET['msg']=="rc"){
        unset($_SESSION['cid'],$_SESSION['cemail'],$_SESSION['cusertype'],$_SESSION['cusername']);

        header('location: ../view/login.php');
    }
?>