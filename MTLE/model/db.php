<?php

    $dbhost = "localhost";
    $dbid = "webtech";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){
        global $dbhost;
        global $dbid;
        global $dbpass;
        global $dbuser;

        return  $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbid);
    }
?>