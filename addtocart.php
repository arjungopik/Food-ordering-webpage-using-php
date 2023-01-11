<?php
   include("connection.php");
   $ino=$_POST['productid'];
   $result = mysqli_query($conn,"select * from items where icode=$ino");
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $in = $row['iname'];
   $tno=8;
   //qty
   $result2 = mysqli_query($conn,"select * from orders where icode=$ino");
   $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
   $cout = mysqli_num_rows($result2);
   $price =$row['price'];
   $qty=$row2['qty'];   
   $qty=$qty+1;
   $price = $qty*$price;
   if($cout==0)
   {
      mysqli_query($conn,"insert into orders values('$tno','$ino','$in',1,$price)");
   }
   else
   {
      mysqli_query($conn,"update orders set qty=$qty,price=$price where icode=$ino");
   }
   header("location:index.php");
?> 