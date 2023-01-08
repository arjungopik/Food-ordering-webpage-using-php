<?php
    $servername="localhost";
    $username="root";
    $pass="";
    $dbname="getfood";
    $conn = new mysqli($servername,$username,$pass,$dbname,3306);
    if($conn->connect_error){
        die("connection failed ".$conn->connect_error);
    }
    echo "connection successs";
?>