<?php
    include("connection.php");
    $sql="delete from cnforders";
    $conn->query($sql);
    header("location:admin.php");

?>