<?php
    include("connection.php");
    $sql = "select * from orders";
    $query = mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);
    
    if($count>0)
    {
        while($result=mysqli_fetch_array($query))
        {
            $icode=$result['icode'];
            $iname=$result['iname'];
            $price=$result['price'];
            $qty=$result['qty'];
            $tno=$_POST['tno'];
            $sql2="insert into cnforders values('$icode','$iname',$price,$qty,'$tno')";
            $conn->query($sql2);
        }
    }   
    $sql="delete from orders";
    $conn->query($sql);
    header("location:thankyou.php")

?>