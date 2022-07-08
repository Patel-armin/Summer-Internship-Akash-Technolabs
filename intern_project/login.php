<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <!-- Bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>
<body>

<!-- Include Header Start -->
<?php include("include/header.php"); ?>
    <!-- Include Header End -->
    
<section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="card p-5 bg-info" action="lgnadmin.php" method="POST">
                    <h1 class="text-center py-3">ADMIN LOGIN</h1>
                    <div class="mb-3">
                        <label for="adminemail" class="form-label">Email address</label>
                        <input type="email" name="adminemail" required class="form-control" id="adminemail">
                    </div>
                    <div class="mb-3">
                        <label for="adminpwd" class="form-label">Password</label>
                        <input type="password" name="adminpwd" class="form-control" required id="adminpwd">
                    </div>
                    <button type="submit" class="btn btn-warning" name="sbmt">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>