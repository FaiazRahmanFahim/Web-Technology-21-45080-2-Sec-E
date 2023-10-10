<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degree</title>
</head>

<body>
    <form method="POST" action="" enctype="">
        <fieldset>

            <legend><b>Degree</b></legend>
            <input type="checkbox" name="deg1" value="SSC">SSC
            <input type="checkbox" name="deg2" value="HSC">HSC
            <input type="checkbox" name="deg3" value="BSc">BSc
            <input type="checkbox" name="deg4" value="MSc">MSc
            <hr>
            <input type="submit" value="Submit">

        </fieldset>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $deg1 = "";
        $deg2 = "";
        $deg3 = "";
        $deg4 = "";

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

        echo "Your selected degrees are: " . $deg1 . ", " . $deg2 . ", " . $deg3 . ", " . $deg4;
    }

    ?>

</body>

</html>