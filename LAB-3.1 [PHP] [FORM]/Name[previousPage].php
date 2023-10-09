<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>

<body>

    <?php
    $name = ""; // Initialize the variable
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
    }
    ?>

    <form method="POST" action="">
        <fieldset>
            <legend><b>Name</b></legend>
            <input type="name" name="name" placeholder="Enter your Name" value="<?php echo $name; ?>">
            <hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Your Name is : " . $name;
    }
    ?>

</body>

</html>