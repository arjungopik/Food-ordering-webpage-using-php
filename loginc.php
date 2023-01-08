<?php
    include("connection.php");
    
    $us=$_POST['email'];
    $pw=$_POST['password'];
    $sql = "select * from login where username = '$us' and password= '$pw'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $cout = mysqli_num_rows($result);
    if($cout==1)
    {
        header("location:index.php");
    }
?>