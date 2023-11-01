<?php 
    session_start();
    $userId = $_REQUEST['userId'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $usertype = $_REQUEST['usertype'];

    if($userId == "" || $username == "" || $password == "" || $usertype == "" ){
        echo "null username or password or email!";
    }else{
        $user = ['userId'=> $userId,'username'=> $username, 'password'=> $password, 'usertype'=>$usertype];
        $_SESSION['user'] = $user;
        header('location: ../view/login.html');
    }
?>