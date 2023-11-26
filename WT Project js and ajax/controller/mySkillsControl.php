<?php
    
    include_once("../model/userModel.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] =="POST")
    {

        $skillname = $_POST['skill_name'];
        $skillpercent = $_POST['skill_percent'];
        $userID = $_SESSION['sid'];
        
        $status = mySkillsDB($userID, $skillname, $skillpercent);

        if ($status) 
        {
            header("location:../view/seeker/mySkills.php");
        }
        else
        {   
            header("location:../view/seeker/mySkills.php");
        }
    }
?>
