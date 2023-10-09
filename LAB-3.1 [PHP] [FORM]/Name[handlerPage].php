<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    echo "Your Name is : ".$name;
}
