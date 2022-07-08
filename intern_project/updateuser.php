<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>
</head>

<body class="bg-danger">


    <!-- Include Header Start -->
    <?php include("include/header.php"); ?>
    <!-- Include Header End -->


    <!-- Form Start  -->

    <section class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">


                <?php

                $id = $_GET['id'];

                // 1. Connecting Project to Database
                $conn = mysqli_connect("localhost", "root", "", "data_bs");

                // 2. Checking Connectiong working or not
                if (!$conn) {
                    die("Error in Connecting DB" . mysqli_connect_error());
                } else {

                    $selectUser = "SELECT * FROM `employe` WHERE `id`='$id'";

                    $result = mysqli_query($conn, $selectUser);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <form class="card p-5" action="updatequery.php" method="POST">
                            <h2 class="text-center py-3">Update User Form</h2>
                            <!-- Name Input Start -->
                            <div class="mb-3">
                                <label for="userName" class="form-label">Name</label>
                                <input type="text" name="username" required class="form-control" id="userName" value="<?php echo $row['username']; ?>">
                            </div>
                            <!-- Name Input End -->

                            <!-- Email Input Start -->
                            <div class="mb-3">
                                <label for="userEmail" class="form-label">Email address</label>
                                <input type="email" name="useremail" class="form-control" id="userEmail" readonly    required value="<?php echo $row['email'] ?>">
                            </div>
                            <!-- Email Input End -->

                            <!-- Password Input Start -->
                            <div class="mb-3">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="text" name="userpassword" required class="form-control" id="userPassword" value="<?php echo $row['password']; ?>">
                            </div>
                            <!-- Password Input End -->

                            <button type="submit" class="btn btn-warning" name="sbmt">Update User</button>
                        </form>

                <?php
                    }
                }

                ?>
            </div>
        </div>
    </section>

    <!-- Form End -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>