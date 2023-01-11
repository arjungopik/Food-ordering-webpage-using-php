<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/
    bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Shopping Cart Data</h2>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            $query = "SELECT * FROM cart_item";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)) {?>
                            <div class="col-md-4">
                                <form method="get" action="index.php?id=<?=$row['icode'] ?>">
                                    <img src="img/<?= $row['img'] ?>" style='height: 150px;'>
                                    <h5 class="text-center"><?= $row['name']; ?></h5>
                                    <h5 class="text-center">$<?= number_format($row['price'], 2); ?></h5>
                                    <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                    <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                    <input type="number" name="quantity" value="1" class="form-control">
                                    <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2"
                                    value="Add To Cart">
                                </form>
                            </div>
                            <?php }
                                 ?>
                        
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
