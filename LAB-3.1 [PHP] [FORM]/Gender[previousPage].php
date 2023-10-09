<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>

<body>

    <?php
    $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gender = $_POST['gender'];
    }
    ?>

    <form method="POST" action="">
        <fieldset>
            <legend><b>Gender</b></legend>
            <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>Male
            <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>Female
            <input type="radio" name="gender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>>Other
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Your Gender is : " . $gender;
    }
    ?>

</body>

</html>