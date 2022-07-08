<?php
session_start();
if(isset($_SESSION['email'])){

}else{
    header("Location:login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <title>Home</title>
</head>

<body>


    <!-- Include Header Start -->
    <?php include("include/header.php"); ?>
    <!-- Include Header End -->


    <section class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-11">
                <table class="table table-hover table-responsive " style="margin-left: 150px ;">
                    <!-- Table Header  -->
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php

                    // 1. Connecting Project to Database
                    $conn = mysqli_connect("localhost", "root", "", "data_bs");

                    // 2. Checking Connectiong working or not
                    if (!$conn) {
                        die("Error in Connecting DB" . mysqli_connect_error());
                    } else {


                        // 3. SELECT query for user  
                        $userSelect = "SELECT * FROM `employe`";

                        // 4. Execute query ( select query ) and store result in result    
                        $result = mysqli_query($conn, $userSelect);

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <!--  execute loop with html -->
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>

                                    <td><a href="updateuser.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Update</a> </td>

                                    <td><a href="deleteuser.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
                                </tr>

                    <?php
                            }
                        } else {

                            echo "No Data Found";
                        }
                    }


                    ?>
                </table>
            </div>
        </div>
    </section>
</body>

</html>