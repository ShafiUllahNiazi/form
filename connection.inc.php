<?php

$host="localhost";
$user="root";
$pwd="";
$data="financial_form";

    $mysqli=mysqli_connect($host,$user,$pwd,$data);
    if(!$mysqli)
        die("Connect Error");
?>