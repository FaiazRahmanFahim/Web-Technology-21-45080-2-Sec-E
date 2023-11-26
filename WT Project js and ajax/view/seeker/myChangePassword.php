<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../js/myChangePassword.js"></script>
        <title>Change Password</title>
    </head>
    <body>
        <div style="display: flex;">
            <?php 
                //include_once('../../controller/seekersession.php');
                include_once("Dashboard.php");
            ?>
            <div style="background: aliceblue; margin-top: 60px; margin-left: 05px; width: 600px; height: 400px;">
                <div style="margin-top: 20px; margin-left: 20px;">
                    <form action = "../../controller/myChangepassControl.php" method ="POST" onsubmit="return myChangePassValidation();">
                        <table style="font-size: 16px;">
                            <tr>
                                <td>Current Password :</td>
                                <td><input type="password" name="curr_pass" id="curr_pass" style="font-size: 16px; height:30px; width:200px; border-radius: 5px" value="" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="font-size: 15px; color: red;"><?php echo isset($_SESSION["curr_pass_err"]) ?  $_SESSION["curr_pass_err"] : '' ;?></td>
                            </tr>
                            <tr>
                                <td>New Password :</td>
                                <td><input type="password" name="new_pass" id="new_pass" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px;"></td>
                            </tr>
                            <tr>
                                <td>Confirm Password :</td>
                                <td><input type="password" name="conff_pass" id="conff_pass" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px;"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="font-size: 18px; color: green;"><?php echo isset($_SESSION["unotexist"]) ? $_SESSION["unotexist"] : '' ;?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="" value="Update" style="background-color: green; color: white; font-size: 18px; text-decoration: none; padding: 10px 20px; border-radius: 10px; cursor:pointer;"></td>
                            </tr>
                        </table>
                    </form>
                    <?php

                        // unset($_SESSION["curr_pass_err"]);
                        // unset($_SESSION["new_pass_err"]);  
                        // unset($_SESSION["conff_pass_err"]);
                        unset($_SESSION["unotexist"]);

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
