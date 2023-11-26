<?php
    
    include_once("../model/userModel.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] =="POST")
    {

        $degname = $_POST['deg_name'];
        $year = $_POST['year'];
        $instname = $_POST['inst_name'];
        $userID = $_SESSION['sid'];
        
        $status = myEducationDB($userID, $degname, $year, $instname);

        if ($status) 
        {
            header("location:../view/seeker/myEducation.php");
        }
        else
        {   
            header("location:../view/seeker/myEducation.php");
        }
    }
?>

