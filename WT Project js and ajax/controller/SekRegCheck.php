<?php

    session_start();
    include_once("../model/userModel.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $sekname = $_POST['sek_name'];
        $username = $_POST['user_name'];
        $sekemail = $_POST['email'];
        $sekpass = $_POST['sek_pass'];

        $data = array(
            'sekname' => $sekname,
            'username' => $username,
            'sekemail' => $sekemail,
            'sekpass' => $sekpass,
        );

        $status = sekRegistration($data);

        if ($status) 
        {
            header("location:../view/login.php");
        } else 
        {
            header("location:../view/sekRegistration.php");
        }
    }
?>
