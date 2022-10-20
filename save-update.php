<?php

if (isset($_POST["id"])) {

    $id = $_POST["id"];
    $names = $_POST["names"];
    $email = $_POST["email"];

    include 'connect.php';
    $sql = "UPDATE users SET names='$names', email='$email' WHERE id=$id ";
    // executing the query
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    setcookie('message', "The user $names has been updated successfully", time()+3);
   
}

header('location:read.php');