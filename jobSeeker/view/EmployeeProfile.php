<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee Dashboard</title>
    </head>
    <body style="color: black; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <div style="display:flex">
        <?php include_once "Dashboard.php"; ?>
            <div style="background-color: aliceblue; margin-top: 60px; margin-left: 05px; margin-right: 200px; height: 700px;">
                <h3 style="text-align: center">Applied Jobs</h3>
                <hr>
                <form>
                    <table style="width: 100%; margin: 0; padding: 0;" cellspacing="0">
                        <thead>
                            <tr style="background-color:mediumpurple; ">
                                <th style="color:white; text-align: center; padding: 10px 20px;">JobId</th>
                                <th style="color:white; text-align: center; padding: 10px 20px;">Designation</th>
                                <th style="color:white; text-align: center; padding: 10px 20px;">Company Name</th>
                                <th style="color:white; text-align: center; padding: 10px 20px;">Date</th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>