<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>

<body>

    <?php
    $blood = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $blood = $_POST['blood'];
    }
    ?>

    <form method="POST" action="">
        <fieldset>
            <legend><b>Blood Group</b></legend>

            <select name="blood" id="">
                <option value="A+" <?php if ($blood == "A+") echo "selected"; ?>>A+</option>
                <option value="A-" <?php if ($blood == "A-") echo "selected"; ?>>A-</option>
                <option value="B+" <?php if ($blood == "B+") echo "selected"; ?>>B+</option>
                <option value="B-" <?php if ($blood == "B-") echo "selected"; ?>>B-</option>
                <option value="O+" <?php if ($blood == "O+") echo "selected"; ?>>O+</option>
                <option value="O-" <?php if ($blood == "O-") echo "selected"; ?>>O-</option>
                <option value="AB+" <?php if ($blood == "AB+") echo "selected"; ?>>AB+</option>
                <option value="AB-" <?php if ($blood == "AB-") echo "selected"; ?>>AB-</option>
            </select>
            <hr>
            <input type="submit" value="Submit">
            
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Your Blood group is : " . $blood;
    }
    ?>

</body>

</html>