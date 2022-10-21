<?php

if (isset($_POST["id"])) {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    include 'connect.php';
    $sql = "UPDATE products SET name='$name', description='$description', quantity='$quantity', price='$price'  WHERE id=$id ";
    // executing the query
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    setcookie('message', "The product $name has been updated successfully", time()+3);
   
}

header('location:product-list.php');