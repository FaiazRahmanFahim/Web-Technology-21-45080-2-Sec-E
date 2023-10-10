<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $deg1 = "";
        $deg2 = "";
        $deg3 = "";
        $deg4 = "";

        if (isset($_POST['deg1'])) 
        {
            $deg1 = $_POST['deg1'];
        }
        if (isset($_POST['deg2'])) 
        {
            $deg2 = $_POST['deg2'];
        }
        if (isset($_POST['deg3'])) 
        {
            $deg3 = $_POST['deg3'];
        }
        if (isset($_POST['deg4'])) 
        {
            $deg4 = $_POST['deg4'];
        }

        echo "Your selected degrees are: " . $deg1 . ", " . $deg2 . ", " . $deg3 . ", " . $deg4;
    }
    
?>
