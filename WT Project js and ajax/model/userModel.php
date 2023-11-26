<?php
    require_once('db.php');
    
    /* =================== LOGIN ========================== */
    function login($username, $password){
        $con = getConnection();
        
        $sql = "SELECT * FROM login WHERE username='{$username}' AND password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if ($user){
            $userData = array(
                'success' => true,
                'id' => $user['id']
            );
            return $userData;
        } else {
            return array('success' => false);
        }
    }


    /* ========================= seeker registration ================================ */

    function sekRegistration($sekdata) 
    {
        $conn = getConnection();
    
        $s1 = $sekdata['sekname'];
        $s2 = $sekdata['username'];
        $s3 = $sekdata['sekemail'];
        $s4 = $sekdata['sekpass'];
  
    
        $sql = "INSERT INTO login (username, email, password ,usertype)
        VALUES ('$s2', '$s3', '$s4', 'seeker');";
        $result = mysqli_query($conn, $sql);

        
        $lastID = mysqli_insert_id($conn);
        
        $sql1 = "INSERT INTO seekerinfo (userID, name, email)
        VALUES ('$lastID', '$s1', '$s3');";
        $result1=mysqli_query($conn,$sql1);
            
        $sql2 = "INSERT INTO seekerappliedjobs (userID, email)
        VALUES ('$lastID','$s3');";
        $result2=mysqli_query($conn, $sql2);
            
        $sql3 = "INSERT INTO seekereducation (userID, email)
        VALUES ('$lastID','$s3');";
        $result3=mysqli_query($conn, $sql3);
    
        $sql4 = "INSERT INTO seekerskill (userID, email)
        VALUES ('$lastID','$s3');";
        $result4=mysqli_query($conn, $sql4);
    
        $sql5 = "INSERT INTO seekerworkexperience (userID, email)
        VALUES ('$lastID','$s3');";
        $result5=mysqli_query($conn, $sql5);
            
        if ($result && $result1 && $result2 && $result3 && $result4 && $result5)
        {
            return true;
        } 
        else
        {
            return false;
        }
    }


    /* ========================= seeker Change Password ================================ */

    function myChangePassword($userID, $newpass){
        $conn = getConnection();
        $sql = "UPDATE login SET password = '$newpass' WHERE id = '$userID' ";
        $result = mysqli_query($conn, $sql);
        //$user = mysqli_fetch_assoc($result);
        
        return $result['password'];
    }

    /* ================ Check duplicate username and email in the database ============== */

    function checkusername($username ){
        $conn = getConnection();
        $sqlUserCheck = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($conn, $sqlUserCheck);

        while ($row = mysqli_fetch_assoc($result)) {
            return $row['username'];     
        }
    }

    function checksekemail($email){
        $conn = getConnection();
        $sqlUserCheck = "SELECT * FROM login WHERE username = '$email'";
        $result = mysqli_query($conn, $sqlUserCheck);

        while ($row = mysqli_fetch_assoc($result)) {
            return $row['email'];     
        }
    }

    /* ================ Upload Picture ============== */

    // function upload_Picture($userID, $image)
    // {
    //     $conn = getConnection();
    //     $sql = "UPDATE seekerinfo SET Picture ='{$image}' WHERE id = '{$userID}'";
    //     $result = mysqli_query($conn, $sql);
    
    //     return $result['Picture'];
    // } 
    


    function myEducationDB($userID, $degname, $year, $instname)
    {
        $conn = getConnection();
        $sql = "UPDATE seekereducation SET 
        deg_name = '$degname', yeartoyear = '$year', ins_name = '$instname' WHERE userID = '$userID' ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function myProfileDB($userID, $name, $profTitle, $gender, $age, $cgpa, $salary, $experience, 
    $website,  $aboutMe, $phone, $email, $address, $city, $google, $twitter, $facebook, $linkedin) 
    {
        $conn = getConnection();
        $sql = "UPDATE seekerinfo SET
            name = '$name',
            prof_title = '$profTitle',
            gender = '$gender',
            age = $age,
            cgpa = $cgpa,
            salary = $salary,
            experience = $experience,
            website = '$website',
            aboutMe = '$aboutMe',
            phone = '$phone',
            email = '$email',
            address = '$address',
            city = '$city',
            google = '$google',
            twitter = '$twitter',
            facebook = '$facebook',
            linkedin = '$linkedin'
            WHERE userID = '$userID' ";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    function mySkillsDB($userID, $skillname, $skillpercent)
    {
        $conn = getConnection();
        $sql = "UPDATE seekerskill SET 
        skill = '$skillname, $skillpercent' WHERE userID = '$userID' ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function myWorkDB($userID, $designation, $year1, $year2, $comp_name)
    {
        $conn = getConnection();
        $sql = "UPDATE seekerworkexperience SET 
        year = '$year1 - $year2', designation = '$designation', description = '$comp_name'  WHERE userID = '$userID' ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function myJobSearchDB($category, $type, $salary, $experience, $location) 
    {
        $conn = getConnection();
        $sql = "SELECT * FROM job WHERE 1";

        if (!empty($category)) {
            $sql .= " AND category = '$category'";
        }

        if (!empty($type)) {
            $sql .= " AND type = '$type'";
        }

        if (!empty($salary)) {
            // Assuming the salary option is formatted as 'min-max'
            preg_match('/(\d+).*?(\d+)/', $salary, $matches);
            $minSalary = $matches[1];
            $maxSalary = $matches[2];
    
            $sql .= " AND salary BETWEEN $minSalary AND $maxSalary";
        }

        if (!empty($experience)) {
            // Assuming the experience option is formatted as 'min-max'
            preg_match('/(\d+).*?(\d+)/', $experience, $matches);
            $minExperience = $matches[1];
            $maxExperience = $matches[2];
    
            $sql .= " AND experience BETWEEN $minExperience AND $maxExperience";
        }

        if (!empty($location)) {
            $sql .= " AND location = '$location'";
        }

        $result = mysqli_query($conn, $sql);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

?>






