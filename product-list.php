<?php

include 'connect.php';

$sql = "SELECT * FROM products";

$result = mysqli_query($con, $sql) or die(mysqli_error($con));

$rows = mysqli_fetch_all($result, 1);

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-8">

            <?php if (isset($_COOKIE['message'])): ?>
                <div class="alert alert-primary">
                    <?= $_COOKIE['message'] ?>
                </div>
                <?php endif; ?>

                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Update</th>
                            <th>Remove</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($rows as $product): ?>
                        <tr>
                            <td>
                                <?= $product["id"] ?>
                            </td>

                            <td>
                                <?= $product["name"] ?>
                            </td>


                            <td>
                                <?= $product["description"] ?>
                            </td>


                            <td>
                                <?= $product["quantity"] ?>
                            </td>


                            <td>
                                <?= $product["price"] ?>
                            </td>
                            <td><a class="btn btn-primary btn-sm"
                                    href="edit-product.php?id=<?= $product['id'] ?>">Update</a></td>
                            <td><a class="btn btn-danger btn-sm"
                                    href="remove-product.php?id=<?= $product['id'] ?>">Remove</a></td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>


                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js
"></script>
    <script>
        $(document).ready(function () { $('#example').DataTable(); });
    </script>

</body>

</html>