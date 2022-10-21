<?php

if (isset($_REQUEST["id"])) {

    $id = $_REQUEST["id"];
    include 'connect.php';
    $sql = "SELECT  * FROM  products WHERE id = $id";
    // executing the query
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    // mysqli_close($con);
    if (mysqli_num_rows($result) == 0) {
        header('location:product-list.php');
    }
    $product = mysqli_fetch_assoc($result);
    // var_dump($product);
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <form action="save-edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$product['id']?>">

                <div class="form-group">
                  <label>Product</label>
                  <input type="text" name="name" value="<?=$product['name']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Description</label>
                  <input type="text" name="description" value="<?=$product['description']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Quantity</label>
                  <input type="number" name="quantity" value="<?=$product['quantity']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Price</label>
                  <input type="currency" name="price" value="<?=$product['price']?>" class="form-control" required>
                </div>

                <button class="btn btn-primary btn-block">Update Product</button>

            </form>
        </div>
    </div>
</div>
    
</body>
</html>