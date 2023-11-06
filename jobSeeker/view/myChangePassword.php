<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Change Password</title>
    </head>
    <body>
        <div style="display: flex;">
            <?php include_once "Dashboard.php"; ?>
            <div style="background: aliceblue; margin-top: 60px; margin-left: 05px; width: 500px; height: 200px;">
                <div style="margin-top: 10px; margin-left: 10px;">
                    <from>
                        <table>
                            <tr>
                                <td style="font-size: 15px;">Current Password :</td>
                                <td><input type="password" name="curr_pass" value="" /></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;">New Password :</td>
                                <td><input type="password" name="new_pass" value="" /></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;">Confirm Password :</td>
                                <td><input type="password" name="conf_pass" value="" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="checkbox" name="" value="checkbox" />Show Password</td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;"><input type="button" name="" value="Add" /></td>
                                <td></td>
                            </tr>
                        </table>
                    </from>
                </div>
            </div>
        </div>
    </body>
</html>
