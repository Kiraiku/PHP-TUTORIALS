<?php

if (isset($_REQUEST["id"])) {

    $id = $_REQUEST["id"];
    include 'connect.php';
    $sql = "DELETE  FROM users WHERE id = $id";
    // executing the query
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    setcookie('message', 'The user  has been deleted successfully', time()+3);
}

//redirect
header("location:read.php");