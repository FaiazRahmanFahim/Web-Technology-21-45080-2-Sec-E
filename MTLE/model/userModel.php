<?php

    require_once('db.php');
    function login($userId, $password){
        $con = getConnection();
        $sql = "select * from users where userId='{$userId}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function signup($user){

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function adduser(){

    }

    function deleteUser(){

    }

    function updateUser(){
        
    }


?>