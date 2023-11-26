<?php

    session_start();
    require_once("../model/userModel.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $userID = $_SESSION['sid'];

        $designation = $_POST['designation'];
        $year1 = $_POST['year1'];
        $year2 = $_POST['year2'];
        $comp_name = $_POST['comp_name'];

        $status = myWorkDB($userID, $designation, $year1, $year2, $comp_name);

        if ($status) 
        {
            //Work experience updated successfully
            header("location: ../view/seeker/myWork.php");
            
        } else {
            //Error updating work experience
            header("location: ../view/seeker/myWork.php");
        }
    }

?>
