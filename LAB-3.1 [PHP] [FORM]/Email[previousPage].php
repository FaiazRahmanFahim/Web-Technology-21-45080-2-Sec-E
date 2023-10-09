<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>

    <?php
    $email = ""; // Initialize the variable
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $email = $_POST['email'];
    }
    ?>

    <form method="POST" action="">
        <fieldset>
            <legend><b>Email</b></legend>
            <input type="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
            <hr>
            <input type="submit" name="" value="Submit">
        </fieldset>
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        echo "Your Email is : " . $email;
    }
    ?>

</body>

</html>