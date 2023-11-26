<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Work Experience</title>
    </head>
    <body>
        <div style="display: flex">
            <?php
                //include_once('../../controller/seekersession.php');
                include_once("Dashboard.php"); 
            ?>
            <div style="background: aliceblue; margin-top: 60px; margin-left: 05px; width: 600px; height: 600px;">
                <div style="margin-top: 20px; margin-right: 20px;">
                    <div style="margin-top: 20px;">
                        <form action = "../../controller/upload_CV.php" method ="POST" enctype="multipart/form-data">
                            <label><b>CV</b></label>
                            <img src = "../../asset/UploadPic.png" alt = "Upload Your CV" style="max-width: 160px; max-height: 160px;"/><br>
                            <input type="file" name="cv" value="" /><br><br>
                            <input type="submit" name="submit" style="background-color: green; color: white; font-size: 16px; text-decoration: none; padding: 10px 20px; border-radius: 10px; cursor:pointer;" value="Upload-CV"><br>
                        </form><hr>   
                    </div>
                    <br>
                    <div style="margin-top: 20px;">
                        <form action = "../../controller/upload_Picture.php" method ="POST" enctype="multipart/form-data">
                            <label><b>Picture</b></label>
                            <img src = "../../asset/UploadPic.png" alt = "Upload Your Profile Picture" style="max-width: 160px; max-height: 160px;"/><br>
                            <input type="file" name="picture" value="" /><br><br>
                            <input type="submit" name="submit" style="background-color: green; color: white; font-size: 16px; text-decoration: none; padding: 10px 20px; border-radius: 10px; cursor:pointer;" value="Upload-Picture">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>