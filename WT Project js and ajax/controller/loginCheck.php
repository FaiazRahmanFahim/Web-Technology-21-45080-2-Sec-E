<?php

    include_once("../model/userModel.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $username = $_POST['user_name'];
        $pass = $_POST['pass'];

        $userData = login($username, $pass);

        if ($userData['success']) 
        {
            //If login is successful
            $_SESSION['sid']=$userData['id'];
            header("location:../view/seeker/seeker_profile.php");
        } 
        else 
        {
            //If login is unsuccessful
            header("location:../view/login.php");
        }
    } 
    else 
    {
        //Redirect if accessed without form submission
        header("location:../view/login.php");
    }
?>

