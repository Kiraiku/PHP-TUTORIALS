<?php

if (isset($_REQUEST["id"])) {

    $id = $_REQUEST["id"];
    include 'connect.php';
    $sql = "SELECT  * FROM  users WHERE id = $id";
    // executing the query
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    // mysqli_close($con);
    if (mysqli_num_rows($result) == 0) {
        header('location:read.php');
    }
    $user = mysqli_fetch_assoc($result);
    // var_dump($user);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <form action="save-update.php" method="POST">
                <input type="hidden" name="id" value="<?=$user["id"]?>">

                <div class="form-group">
                  <label>Names</label>
                  <input type="text" name="names" value="<?=$user['names']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?=$user['email']?>" class="form-control" required>
                </div>

                <button class="btn btn-primary btn-block">Update User</button>

            </form>
        </div>
    </div>
</div>

</body>

</html>