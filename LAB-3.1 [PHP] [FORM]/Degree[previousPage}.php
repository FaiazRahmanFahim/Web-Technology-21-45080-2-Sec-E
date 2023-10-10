<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>

<body>

    <?php
    
    $deg1 = "";
    $deg2 = "";
    $deg3 = "";
    $deg4 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['deg1'])) {
            $deg1 = $_POST['deg1'];
        }
        if (isset($_POST['deg2'])) {
            $deg2 = $_POST['deg2'];
        }
        if (isset($_POST['deg3'])) {
            $deg3 = $_POST['deg3'];
        }
        if (isset($_POST['deg4'])) {
            $deg4 = $_POST['deg4'];
        }
    }
    ?>

    <form method="POST" action="">
        <fieldset>
            <legend><b>Degree</b></legend>
            <input type="checkbox" name="deg1" value="SSC" <?php if ($deg1 == "SSC") echo "checked"; ?>>SSC
            <input type="checkbox" name="deg2" value="HSC" <?php if ($deg2 == "HSC") echo "checked"; ?>>HSC
            <input type="checkbox" name="deg3" value="BSc" <?php if ($deg3 == "BSc") echo "checked"; ?>>BSc
            <input type="checkbox" name="deg4" value="MSc" <?php if ($deg4 == "MSc") echo "checked"; ?>>MSc
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form><br>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Your selected degrees are : " . $deg1 . "," . $deg2 . "," . $deg3 . "," . $deg4;
    }

    ?>
</body>

</html>