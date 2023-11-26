<?php
    
    include("../model/userModel.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] =="POST")
    {
        //Seeker Change-password validation.
        $currpass = $_POST['curr_pass'];
        $newpass = $_POST['new_pass'];
        $conffpass = $_POST['conff_pass'];
        $userID = $_SESSION['sid'];

        $status = myChangePassword($userID, $newpass);
        if ($status) 
        {
            //$_SESSION["unotexist"] = "Password Update Successful.";
            header("location:../view/seeker/myChangePassword.php");
        }
        else
        {   
            //$_SESSION["unotexist"] = "Update Password Unsuccessful.";
            header("location:../view/seeker/myChangePassword.php");
        }
    }
?>