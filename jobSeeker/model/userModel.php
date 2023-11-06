<?php
    require_once('db.php');
    
    /* =================== LOGIN ========================== */

    function login($username, $password){
        $con = getConnection();
        $sql = "SELECT login.*, company.approval FROM login
                LEFT JOIN company ON login.id = company.userID
                WHERE login.username = '{$username}' AND login.password = '{$password}'";
    
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if ($user) {
            $userData = array(
                'success' => true,
                'id' => $user['id'],
                'email' => $user['email'],
                'usertype' => $user['usertype'],
                'username' => $user['username'],
                'approval' => $user['approval'] // Include the approval status
            );
            return $userData;
        } else {
            return array('success' => false);
        }
    }    
    
    /* =================== company signup ========================== */

    function empsignup($form_data){
        $conn = getConnection();
        $name = $form_data["name"];
        $username = $form_data["username"];
        $password = $form_data["password"];
        $email = $form_data["email"];       
        $type = $form_data["type"];      
        $contact = $form_data["contact"];
        $location = $form_data["location"];
        $website = $form_data["website"];
        $license = $form_data["license"];

        $sql = "INSERT INTO login (email, username, password ,usertype)
        VALUES ('$email', '$username', '$password', 'company');";
        $result=mysqli_query($conn,$sql);  

        $lastID=mysqli_insert_id($conn); //retrieving last query id to match with next query insertion

        $sql1 = "INSERT INTO company (userID,name,email,type,contact,location,website,license) VALUES ('$lastID','$name','$email', '$type', '$contact', '$location', '$website','$license')";
        $result2=mysqli_query($conn,$sql1);

        if ($result && $result2){
            return true;
        } else{
            return false;
        }
    }
    
    /* =================== admin registration ========================== */

    function adminsignup($uname,$pass,$email){
        $conn = getConnection();

        $username = $uname;
        $password = $pass;
        $email = $email;       
        
        $sql1 = "INSERT INTO login (email, username, password ,usertype)
        VALUES ('$email', '$username', '$password', 'admin');";
        $result2=mysqli_query($conn,$sql1);    
        
        if ($result2){
            return true;
        } else{
            return false;
        }
    }

    /* =================== showing name in admin_header ========================== */

    function ahNameShow($loginID){
        $conn = getConnection();
        $sql = "SELECT * FROM login WHERE id=$loginID;";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    /* ========================= seeker registration ================================ */

    function seekreg($fname,$uname,$email,$pass){
        $conn = getConnection();

        $fname = $fname;
        $password = $pass;
        $email = $email;
        $uname = $uname;
             
        $sql = "INSERT INTO login (email, username, password ,usertype)
        VALUES ('$email', '$uname', '$password', 'seeker');";
        $result=mysqli_query($conn,$sql);

        $lastID = mysqli_insert_id($conn);
        
        $sql1 = "INSERT INTO seekerinfo (userID, email, name)
        VALUES ('$lastID', '$email', '$fname');";
        $result1=mysqli_query($conn,$sql1);
        
        $sql2 = "INSERT INTO seekerappliedjobs (userID,email)
        VALUES ('$lastID','$email');";
        $result2=mysqli_query($conn, $sql2);
        
        $sql3 = "INSERT INTO seekereducation (userID,email)
        VALUES ('$lastID','$email');";
        $result3=mysqli_query($conn, $sql3);

        $sql4 = "INSERT INTO seekerskill (userID,email)
        VALUES ('$lastID','$email');";
        $result4=mysqli_query($conn, $sql4);

        $sql5 = "INSERT INTO seekerworkexperience (userID,email)
        VALUES ('$lastID','$email');";
        $result5=mysqli_query($conn, $sql5);
        
        if ($result && $result1 && $result2 && $result3 && $result4 && $result5){
            return true;
        } else{
            return false;
        }
    }

    /* ================ Check duplicate username and email in the database ============== */

    function checkuname($uname){
        $conn = getConnection();
        $sqlUserCheck = "SELECT * FROM login WHERE username = '$uname'";
            $result = mysqli_query($conn, $sqlUserCheck);

            while ($row = mysqli_fetch_assoc($result)) {
                return $row['username'];     
            }
    }

    function checkumail($email){
        $conn = getConnection();
        $sqlUserCheck = "SELECT * FROM login WHERE email = '$email'";
        $result = mysqli_query($conn, $sqlUserCheck);
        
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['email'];
        }
    }

    /* ============================ admin_emp application ===================================== */

    function removeCompany($userID) {
        $conn = getConnection();
        $sql1 = "DELETE FROM login WHERE id = $userID";
        $sql2="DELETE FROM company WHERE userID=$userID";
        mysqli_query($conn,$sql1);
        mysqli_query($conn,$sql2);
    }

    function getCompany() {
        $conn = getConnection();
        $companies = array();
        $sql = "SELECT * FROM company WHERE approval = 1;";
        $result = mysqli_query($conn, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $companies[] = $row;
        }
    
        return $companies;
    }

    /* =========================== admin approval queue ======================================== */
    
    function updateCompanyApproval($uID){
        $conn = getConnection();
        $sql1="UPDATE company SET approval=1 WHERE userID=$uID";
        mysqli_query($conn,$sql1);
    }
    
    function unapprovedCompany(){
        $conn = getConnection();
        $inqueue = array();
        $sql1 = "SELECT * FROM company WHERE approval = 0;";
        $result = mysqli_query($conn,$sql1);

        while($rows=mysqli_fetch_assoc($result)){
            $inqueue[] = $rows;
        }

        return $inqueue;
    }
?>