<?php
// Install json viewer extension
// Install fake filler extension
// superglobal variables
// $_REQUEST
if (isset($_REQUEST["email"])) {
//     var_dump($_REQUEST);
//         echo json_encode($_REQUEST);
//         echo "<hr>";
    //     // request one item
    //     echo $_REQUEST["salary"];
        // die();
    $data = json_encode($_REQUEST);
    file_put_contents("kenya.txt", $data, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap.com">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <h2>Register Here</h2>
                <form action="forms.php" method="POST" autocomplete="on">
                    <div class="form-group p-1">
                        <label for="jina">Fullname</label>
                        <input class="form-control" type="text" name="jina" placeholder="Fullnames">
                    </div>

                    <div class="form-group p-1">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>

                    <div class="form-group p-1">
                        <label for="salary">Salary</label>
                        <input class="form-control" type="number" name="salary" placeholder="Salary">
                    </div>

                    <div class="form-group p-1">
                        <label for="city">City</label>
                        <input class="form-control" type="text" name="city" placeholder="City">
                    </div>


                    <!-- select, radio, checklist, text-area -->
                    <div class="form-group p-1">
                        <label for="">Select Your Country</label>
                        <select name="country" class="form-control">
                            <option value="Kenya">Kenya</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Congo">Congo</option>
                            <option value="Mali">Mali</option>
                        </select>
                    </div>

                    <div class="p-1">
                        <p class="mb-0">Select Food</p>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="Githeri" name="foods[]">Githeri
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="Ugali" name="foods[]">Ugali
                            </label>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="Pizza" name="foods[]">Pizza
                            </label>
                        </div>
                    </div>

                    <label for="">Select Your Gender</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Male">Male
                        </label>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Female">Female
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Describe Yourself</label>
                        <textarea name="desc" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-primary d-block mx-auto mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>