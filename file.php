<?php
//file uploads
// Dropzone file upload library
// $status = 0;
if (isset($_FILES["photo"])) 
{
    # handle
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ["png","jpeg","gif","pdf","doc"];
    $allowed = in_array($imageFileType, $allowed_types);
    if ($allowed && move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        // echo "Uploaded";
        $status = 1;
    }
    else {
        $status = 2;
    // echo "Failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="popper.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <h2>Upload Your Photo</h2>

                <?php if($status ==1): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times</button>
                    File Uploaded Successfully
                </div>
                <?php endif; ?>

                <?php if($status ==2): ?>
                <div class="alert alert-danger  alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times</button>
                    FIle Failed To Upload
                </div>
                <?php endif; ?>

               
                <form action="file.php" method="post" class="shadow-sm p-2" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" accept="image/*" class="form-control-file border" name="photo" required>
                    </div>
                    <button class="btn btn-primary btn-block">Upload</button>


                </form>
            </div>
        </div>
    </div>

</body>

</html>