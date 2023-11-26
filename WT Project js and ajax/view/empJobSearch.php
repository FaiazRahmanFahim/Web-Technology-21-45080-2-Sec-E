<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Search</title>
    </head>
    <body style="color: black; font-family: Verdana;">
        <table border="1" align="center" width="1000px" style="padding: 50px; color: black; font-family: Verdana;">
            <tr align="center">
                <td>
                    <label align="center"></label>
                    <table>
                        <tr>
                            <td>
                                <a href="employer.php">Go Back</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="background-color: aliceblue; padding: 50px; color:black;">
                        <table width="1000px">
                            <form action="" type="">
                                <tr>
                                    <td>Title :</td>
                                    <td colspan="4"><input type="text" name="keyword" style="font-size:20px; width: 450px;" value=""></td>
                                    <td>Company :</td>
                                    <td><input type="text" name="employer"style="font-size:20px;" value=""></td>
                                </tr>
                                <tr>
                                    <td colspan="7"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <legend style="font-size: 16px;">Catagory</legend><br>
                                        <select name="catagory" style="font-size:20px;">
                                            <option value="" selected>Any</option>
                                            <option value="accounting">Accounting</option>
                                            <option value="banking">Banking</option>
                                            <option value="development">Development</option>
                                            <option value="insurance">Insurance</option>
                                            <option value="it">IT</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="marketing">Marketing</option>
                                            <option value="management">Management</option>
                                        </select>
                                    </td>
                                    <td>
                                        <legend>Type</legend><br>
                                        <select name="type" style="font-size:20px;">
                                            <option value="" selected>Any</option>
                                            <option value="full-time">Full-Time</option>
                                            <option value="part-time">Part-Time</option>
                                            <option value="internship">Internship</option>
                                        </select>
                                    </td>
                                    <td>
                                        <legend>Salary</legend><br>
                                        <select name="salary" style="font-size:20px;">
                                            <option value="" selected>Any</option>
                                            <option value="< 10000">< $10000</option>
                                            <option value="BETWEEN 10000 AND 25000">$10000 - $25000</option>
                                            <option value="BETWEEN 25000 AND 50000">$25000 - $50000</option>
                                            <option value="> 50000">$50000</option>
                                        </select>

                                    </td>
                                    <td>
                                        <legend>Experience</legend><br>
                                        <select name="experience" style="font-size:20px;">
                                            <option value="" selected>Any</option>
                                            <option value="< 1">< 1 year</option>
                                            <option value="BETWEEN 1 AND 3">1 - 3 year(s)</option>
                                            <option value="BETWEEN 3 AND 5">3 - 5 years</option>
                                            <option value="> 5">> 5 years</option>
                                        </select>

                                    </td>
                                    <td colspan="5">
                                        <legend>Location</legend><br>
                                        <input type="text" name="location" value=""
                                        style="font-size:20px;" placeholder="e.g: Dhaka, Chaittagong, Sylhet">

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7" align="center" style="padding-top: 15px;">
                                        <input type="submit" value="Search" style="font-size: 20px;">
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <div style="background-color: aquamarine; width: 1200px; height: 200px;">
                        <table width="1000px" style="text-align: Left;">
                            <form action="" method="POST">
                                <tr>
                                    <td><b>Job Title</b></td>
                                    <td><b>Employer Name</b></td>
                                    <td><b>$Salary</b></td>
                                    <td><b>Location</b></td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
