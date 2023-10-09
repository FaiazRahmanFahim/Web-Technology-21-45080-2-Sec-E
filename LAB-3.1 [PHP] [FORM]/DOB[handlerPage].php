<?php

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $date=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];

        echo "Your Date of Birth is : ".$date."-".$month."-".$year;
   }
   
?>