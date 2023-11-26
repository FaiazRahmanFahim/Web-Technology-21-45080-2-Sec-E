<?php
    session_start();
    include_once ("home_header.php"); 
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/loginCheck.js"></script>
        <title>Log In</title>
    </head>

    <body style="color: black; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <form action="../controller/loginCheck.php" method="POST" onsubmit="return loginValidation();">
            <div style="background-color: aliceblue; margin-top: 40px; margin-left: 300px; padding: 50px; width: 800px; height: 300px;">
            <label style="font-size: 25px; font-weight:bold; color:green; ">Register as a Job Seeker!</label>
            <br><br>
                <table width="100%" style="font-size: 20px;">
                    <!-- username -->
                    <tr>
                        <td style="font-size: 20px;">User Name :</td>
                        <td><input type="text" name="user_name" id="user_name" value="" style="font-size: 16px; height:30px; width:400px; border-radius: 5px"></td>
                    </tr>
                    <!-- password -->
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="pass" id="pass" value="" style="font-size: 16px; height:30px; width:400px; border-radius: 5px"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><input type="submit" name="" value="Log In" style="background-color: green; color: white; font-size: 16px; text-decoration: none; padding: 10px 20px; border-radius: 10px; cursor: pointer;"></td>
                    </tr>
                </table>
            </div>
        </form>
        <?php
            include_once ("footer.php");    
        ?>
    </body>
</html>