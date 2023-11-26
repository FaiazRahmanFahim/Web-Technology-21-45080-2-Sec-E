<?php

    include("../model/userModel.php");
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
            $src = $_FILES['picture']['tmp_name'];
            $des = "../asset/cv&picture/" . $_FILES['picture']['name'];

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

