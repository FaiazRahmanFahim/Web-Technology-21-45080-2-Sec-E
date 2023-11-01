<?php
    require_once('../model/userModel.php'); 

    session_start();
    $userId = $_REQUEST['userId'];
    $password = $_REQUEST['password'];

    if($userId == "" || $password == "" ){
    
        echo "Null UserId or Password!";
    
    }else{
        $status = login($userId, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            header('location: ../view/home.php');
        }else{
            echo "invalid user!";
        }
    }
?>