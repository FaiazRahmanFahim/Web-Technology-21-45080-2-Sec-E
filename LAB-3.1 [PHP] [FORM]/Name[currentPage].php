<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>

</head>

<body>

    <form method="POST" action="">

        <fieldset>

            <legend><b>Name</b></legend>
            <input type="name" name="name" placeholder="Enter your Name">
            <hr>
            <input type="submit" name="submit" value="submit">

        </fieldset>

    </form>

    <?php



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        echo "Name is : " . $name;
    }

    ?>

</body>

</html>