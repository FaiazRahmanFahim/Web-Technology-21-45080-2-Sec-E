<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../js/mySkills.js"></script>
    <title>My Skills</title>
    </head>
    <body>
        <div style="display: flex">
            <?php
                //include_once('../../controller/seekersession.php');
                include_once("Dashboard.php"); 
            ?>
            <div style="background: aliceblue; margin-top: 60px; margin-left: 05px; width: 600px; height: 300px;">
                <div style="margin-top: 20px; margin-left: 20px;">
                    <form action="../../controller/mySkillsControl.php" method="POST" onsubmit="return mySkillsValidation();">
                        <table>
                            <tr>
                                <td style="font-size: 16px;">Skill Name :</td>
                                <td><input type="text" name="skill_name" id="skill_name" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Skill Percentage :</td>
                                <td><input type="number" name="skill_percent" id="skill_percent" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
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
