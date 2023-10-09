<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>

</head>

<body>

    <form method="POST" action="">

        <fieldset>

            <legend><b>Email</b></legend>
            <input type="email" name="email" placeholder="Enter your email">
            <hr>
            <input type="submit" name="submit" value="submit">

        </fieldset>

    </form>

    <?php



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        echo "Email is : " . $email;
    }

    ?>

</body>

</html>