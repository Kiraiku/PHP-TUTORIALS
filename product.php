<?php

if (isset($_REQUEST["name"])) {
    //get data 
    $name = $_REQUEST["name"];
    $description = $_REQUEST["description"];
    $quantity = $_REQUEST["quantity"];
    $price = $_REQUEST["price"];

    include 'connect.php'; 

    $sql = "INSERT INTO `products`(`id`, `name`, `description`, `quantity`, `price`) VALUES (null,'$name','$description','$quantity','$price')";
    mysqli_query($con, $sql) or die(mysqli_error($con));
    setcookie('message', "The product $name has been added successfully", time()+3);

    header("location:product.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-sm-5">

        <?php if (isset($_COOKIE['message'])): ?>
          <div class="alert alert-primary">
            <?= $_COOKIE['message'] ?>
          </div>
          <?php endif; ?>

            <form action="product.php" method="POST">

                <div class="form-group">
                  <label for="">Product</label>
                  <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Quantity</label>
                  <input type="number" name="quantity" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="">Price</label>
                  <input type="currency" name="price" class="form-control" required>
                </div>

                <button class="btn btn-primary btn-block">Add Product</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>