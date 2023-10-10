<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $blood=$_POST['blood'];

        echo "Your Blood group is : ".$blood;
    }
?>