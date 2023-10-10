<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>

<body>
    <form method="POST" action="" enctype="">
        <fieldset>

            <legend><b>Blood Group</b></legend>

            <select name="blood" id="">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <hr>
            <input type="submit" value="Submit">

        </fieldset>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $blood = $_POST['blood'];

        echo "Your Blood group is : " . $blood;
    }
    ?>

</body>

</html>