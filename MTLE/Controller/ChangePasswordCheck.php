<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];

    if($username == "" || $password == "" || $email == "" ){
        echo "null username or password or email!";
    }else{
        $user = ['username'=> $username, 'password'=> $password, 'email'=>$email];
        $_SESSION['user'] = $user;
        header('location: ../view/login.html');
    }
?>

<?php

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $currentPassword = $_REQUEST["currentPassword"];
        $newPassword = $_REQUEST["newPassword"];
        $retypedNewPassword = $_REQUEST["retypenewPassword"];

        if ($currentPassword == $newPassword) {
            echo "New Password cannot be the same as the Current Password.";
        } elseif ($newPassword != $retypedNewPassword) {
            echo "New Password and Retyped Password do not match.";
        } else {   
            echo "Password changed successfully!";
        }
    }
    
?>