<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../js/myEducation.js"></script>
        <title>My Education</title>
    </head>
    <body>
        <div style="display: flex">
            <?php
                //include_once('../../controller/seekersession.php'); 
                include_once("Dashboard.php"); 
            ?>
            <div style="background: aliceblue; margin-top: 60px; margin-left: 05px; width: 900px; height: 300px;">
                <div style="margin-top: 20px; margin-left: 20px;">
                    <form action="../../controller/myEducatuonControl.php" method="POST" onsubmit="return myEducationValidation();">
                        <table style="font-size: 16px;">
                            <tr>
                                <td>Degree Name :</td>
                                <td><input type="text" name="deg_name" id="deg_name" placeholder="BSc in CSE" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td>Year :</td>
                                <td><input type="number" name="year" id="year" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td>Institution Name :</td>
                                <td><input type="text" name="inst_name" id="inst_name" placeholder="Institution name" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="Add" style="background-color: green; color: white; font-size: 18px; text-decoration: none; padding: 10px 20px; border-radius: 15px; cursor:pointer;"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
