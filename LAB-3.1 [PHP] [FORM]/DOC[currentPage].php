<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date of Birth</title>

</head>

<body>

    <form method="POST" action="">

        <fieldset>

            <legend><b>Date of Birth</b></legend>
            &nbsp&nbsp
            dd &nbsp&nbsp&nbsp&nbsp&nbsp
            mm &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            yy
            <br>
            <input type="number" name="day" id="" style="width: 30px;"> <b>/</b>
            <input type="number" name="month" id="" style="width: 30px;"> <b>/</b>
            <input type="number" name="year" id="" style="width: 60px;">
            <hr>
            <input type="submit" value="Submit">

        </fieldset>

    </form>

    <?php



    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $date = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        echo "Your Date of Birth is : " . $date . "-" . $month . "-" . $year;
    }

    ?>

</body>

</html>