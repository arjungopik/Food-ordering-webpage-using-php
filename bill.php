<?php
include("connection.php");
if(isset($_GET['icode']))
{
    $result = mysqli_query($conn,"select * from items where icode=$ino");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $result2 = mysqli_query($conn,"select * from orders where icode=$ino");
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $qty=$row2['qty'];
    $qty=$qty-1;
    
    mysqli_query($conn,"update orders set qty=$qty,price=$price where icode=$ino");

} 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIGHLAND:cart</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">

    <div class="row min-vh-100">
        <div class="col-12">
            <header class="row">
                <!-- Top Nav -->
                <div class="col-12 bg-dark py-2 d-md-block d-none">
                    <div class="row">
                        <div class="col-auto me-auto">
                            <ul class="top-nav">
                                <li>
                                    <a href="tel:9074197737"><i class="fa fa-phone-square me-2"></i>9074197737</a>
                                </li>
                                <li>
                                    <a href="mailto:highlandof@gmail.com"><i class="fa fa-envelope me-2"></i>highlandof@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <ul class="top-nav">
                                <li>
                                    <a href="login.php"><i class="fas fa-sign-in-alt me-2"></i>login</a>       
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top Nav -->

                <!-- Header -->
                <div class="col-12 bg-white pt-4">
                    <div class="row">
                        <div class="col-lg-auto">
                            <div class="site-logo text-center text-lg-left">
                                <a href="index.php">HIGHLAND RESTAURANT</a>
                            </div>
                        </div>
                        
                        
                    </div>

                    <!-- Nav -->
                    <div class="row">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                            <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="mainNav">
                                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="starters.php">STARTERS<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="maincourse.php">MAINCOURSE<span class="sr-only">(current)</span></a>
                                    </li>
                                    
                                    <li class="nav-item active">
                                        <a class="nav-link" href="juice.php">JUICE<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="desert.php">DESSERT<span class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Nav -->

                </div>
                    <!-- Header -->

                </header>
            </div>

            <div class="col-12">
                <!-- Main Content -->
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                        <h2>Current orders</h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-12 bg-white py-3 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-10 mx-auto table-responsive">
                                <form action="clear.php" method="post" class="row">
                                    <div class="col-12">
                                        <table class="table table-striped table-hover table-sm">
                                            <thead>
                                            <tr>
                                                <th>Table no.</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Amount</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $sql = "select * from cnforders order by tno";
                                                $query = mysqli_query($conn,$sql);
                                                $count=mysqli_num_rows($query);
                                                $tprice=0;
                                                if($count>0)
                                                {
                                                    
                                                    while($result=mysqli_fetch_array($query))
                                                    {
                                                        $tprice=$tprice+$result['price'];
                                                        echo "<tr>
                                                        <td>".$result['tno']."</td>
                                                        <td>".$result['iname']."</td>
                                                        <td>".$result['price']/$result['qty']."</td>
                                                        <td>".$result['qty']."</td>
                                                        <td>".$result['price']."</td>
                                                        <td><a href='cart.php?".$result['icode']."'>Delete</a></td>
                                                    </tr>";
                                                    }
                                                }
                                            ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th colspan="3" class="text-right">Total</th>
                                                <th><?php echo "$tprice"?>₹</th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="col-12 text-right">
                                        <input name="submit"  class="btn btn-outline-dark" type="submit" value="Done">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </main>
                <!-- Main Content -->
            </div>

            
        <div class="col-12 align-self-end">
                                                
                <!-- Footer -->
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
