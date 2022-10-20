<?php

include 'connect.php';


$sql = "SELECT * FROM users";

// executing the query
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

$rows = mysqli_fetch_all($result, 1); //associative array
// header("location:read.php");

mysqli_close($con); //close the connection

// var_dump($rows[0]);
// foreach ($rows as $user) {
//     echo $user['names'];
//     echo "<hr>";
// }

// echo json_encode($rows);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->
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
                            <th>Names</th>
                            <th>Email</th>
                            <th>Update User</th>
                            <th>Delete User</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($rows as $user): ?>
                        <tr>
                            <td>
                                <?= $user["id"] ?>
                            </td>
                            <td>
                                <?= $user["names"] ?>
                            </td>
                            <td>
                                <?= $user["email"] ?>
                            </td>
                            <td> <a class="btn btn-primary btn-sm"
                                    href="update-form.php?id=<?= $user['id'] ?>">Update</a> </td>
                            <td> <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $user['id'] ?>">Delete</a>
                            </td>
                        </tr>

                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>

        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</body>

</html>