<?php
    session_start();
    include_once ("home_header.php"); 
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/sekRegistration.js"></script>
        <title>Seeker registration</title>
        
    </head>

    <body style="color: black; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <form action="../controller/SekRegCheck.php" method="POST" onsubmit=" return sekregValidation();">
            <div style="background-color: aliceblue; margin-top: 40px; margin-left: 300px; padding: 50px; width: 900px; height: 400px;">
            <label style="font-size: 25px; font-weight:bold; color:green; ">Register as a Job Seeker!</label>
            <br><br>
                <table width="100%" style="font-size: 20px;">
                    <!-- Name -->
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" name="sek_name" id ="sek_name" value="" style="font-size: 16px; height:30px; width:400px; border-radius: 5px"></td>
                        <td></td>
                    </tr>
                    <!-- username -->
                    <tr>
                        <td>User Name :</td>
                        <td><input type="text" name="user_name" id="user_name" value="" style="font-size: 16px; height:30px; width:400px; border-radius: 5px"></td>
                        <td></td>
                    </tr>
                    <!-- password -->
                    <tr>
                        <td>Password :</td>
                        <td><input type="password" name="sek_pass" id="sek_pass" value="" style="font-size: 16px; height:30px; width:400px; border-radius: 5px"></td>
                        <td></td>
                    </tr>
                    <!-- confirm password -->
                    <tr>
                        <td>Confirm Password :</td>
                        <td><input type="password" name="conf_pass" id="scp" style="font-size: 16px; height:30px; width:400px; border-radius: 5px" value="" /></td>
                    </tr>
                    <!-- email -->
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" name="email" id="email" value=""  style="font-size: 16px; height:30px; width:400px; border-radius: 5px"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" inclick="" value="Register" style="background-color: green; color: white; font-size: 16px; text-decoration: none; padding: 10px 20px; border-radius: 10px; cursor:pointer;"></td>
                    </tr>
                </table>
            </div>
        </form>
        <?php
            include_once ("footer.php");
        ?>
    </body>
</html>