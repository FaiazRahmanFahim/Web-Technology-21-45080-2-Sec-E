<?php

    include("../model/userModel.php");
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK) {
            $src = $_FILES['cv']['tmp_name'];
            $des = "../asset/cv&picture/" . $_FILES['cv']['name'];

            if (move_uploaded_file($src, $des)) {
                echo "File uploaded successfully!";
            } else {
                echo "Error uploading file!";
            }
        } else {
            echo "Please choose a file to upload.";
        }
    }

?>