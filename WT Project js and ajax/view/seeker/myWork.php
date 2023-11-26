<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../js/myWork.js"></script>
    <title>My Work Experience</title>
    </head>
    <body>
        <div style="display: flex">
            <?php 
                //include_once('../../controller/seekersession.php');
                include_once("Dashboard.php"); 
            ?>
            <div style="background: aliceblue; margin-top: 60px; margin-left: 05px; width: 800px; height: 300px;">
                <div style="margin-top: 20px; margin-left: 20px;">
                    <form action="../../controller/myWorkControl.php" method="POST" onsubmit="return myWorkValidation();">
                        <table>
                            <tr>
                                <td style="font-size: 16px;">Designation:</td>
                                <td><input type="text" name="designation" id="designation" value="" placeholder="Manager" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Year :</td>
                                <td><input type="number" name="year1" id="year1" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"> - <input type="number" name="year2" id="year2"  value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr style="font-size: 16px;">
                                <td>Company Name :</td>
                                <td><input type="text" name="comp_name" id="comp_name" value="" placeholder="Company name" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="" value="Add" style="background-color: green; color: white; font-size: 18px; text-decoration: none; padding: 10px 20px; border-radius: 15px; cursor:pointer;"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
