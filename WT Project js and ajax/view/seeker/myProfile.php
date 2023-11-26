<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../js/myProfile.js"></script>
    <title>My Profile</title>
    </head>

    <body>
        <div style="display: flex;">
        <?php 
            //include_once('../../controller/seekersession.php');
            include_once("Dashboard.php"); 
        ?>
            <div style="background-color: aliceblue; margin-top: 60px; margin-left: 05px; margin-right: 200px; width: 900px; height: 900px;">
                <div style="margin-top: 20px; margin-left:20px;">
                    <form action="../../controller/myProfileControl.php" method="POST" onsubmit=" return myProfileValidation();">
                        <table>
                            <label style="font-size: 25px;"><b>My Profile</b></label><br><br>
                            <tr>
                                <td style="font-size: 16px;">Name :</td>
                                <td><input type="text" name="u_name" id="u_name"  value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">Professional title :</td>
                                <td><input type="text" name="prof_title" id="prof_title" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Gender :</td>
                                <td><input type="radio" name="gender" id="gender" value="Male"> Male
                                    <input type="radio" name="gender" id="gender" value="Female"> Female
                                    <input type="radio" name="gender" id="gender" value="Other"> Other
                                </td>
                                <td style="font-size: 16px;">Age :</td>
                                <td><input type="number" name="age" id="age" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">CGPA :</td>
                                <td><input type="number" name="cgpa" id="cgpa" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">Expected Salary :</td>
                                <td><input type="number" name="expt_salary" id="expt_salary" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Work Experience :</td>
                                <td><input type="number" name="work_exp" placeholder="year" id="work_exp" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">Website :</td>
                                <td><input type="text" name="wesite" id="wesite" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                            <tr>
                                <td style="font-size: 16px;">About Yourself :</td>
                                <td colspan="3"><textarea id="about_u" style="font-size: 16px; max-height:200px; max-width:590px; min-width: 590px; width: 590px; height: 100px; resize: both; overflow: auto; border: 2px solid black; border-radius: 5px"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><br><br></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label style="font-size: 25px;">
                                    <b>Contact Information</b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><br><br></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Phone Number :</td>
                                <td><input type="number" name="phn_num" id="phn_num" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">Email :</td>
                                <td><input type="email" name="email" id="email" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Address :</td>
                                <td><input type="text" name="address" id="address" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">City :</td>
                                <td><input type="text" name="city" id="city" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><br><br></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label style="font-size: 25px;">
                                    <b>Social Link</b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><br><br></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Google :</td>
                                <td><input type="text" name="google" id="google" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">Twitter :</td>
                                <td><input type="text" name="twitter" id="twitter" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td style="font-size: 16px;">Facebook :</td>
                                <td><input type="text" name="facebook" id="facebook" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                                <td style="font-size: 16px;">Linkedin :</td>
                                <td><input type="text" name="linkedin" id="linkedin" value="" style="font-size: 16px; height:30px; width:200px; border-radius: 5px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="update" style="background-color: green; color: white; font-size: 16px; text-decoration: none; padding: 10px 20px; border-radius: 15px; cursor:pointer;"></input></td>
                            </tr>
                        </table><br>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>      