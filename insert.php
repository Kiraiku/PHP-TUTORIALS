<?php
if (isset($_REQUEST["password"])) {
 
    //get form data 
$names = $_REQUEST["names"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
// $salt = "32874238623=/-oeee9";
$password = password_hash($password, PASSWORD_BCRYPT);

include 'connect.php';

$sql = "INSERT INTO `users`(`id`, `names`, `email`, `password`) VALUES (null,'$names','$email','$password')";

mysqli_query($con, $sql) or die(mysqli_error($con));
setcookie('message', "The user $names has been added successfully", time()+3);

header("location:insert.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-5 shadow-sm">

        <?php if (isset($_COOKIE['message'])): ?>
            <div class="alert alert-primary">
                <?= $_COOKIE['message'] ?>
            </div>
            <?php endif; ?>

            <form action="insert.php" method="POST">

            <div class="form-group">
                <label for="">Names</label>
                <input type="text" class="form-control" name="names" required>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button class="btn btn-primary btn-block">Add User</button>
            </form>
        </div>
    </div>
</div>

</body>

</html>