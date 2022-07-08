<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Task</title>
</head>

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

<body>
    <!-- Include Header Start -->
    <?php include("include/header.php"); ?>
    <!-- Include Header End -->


    <!-- Form Start  -->

    <section class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6">
                <form class="card p-5 bg-info" action="inserttask.php" method="POST">
                    <h2 class="text-center py-3">Assign Task </h2>
                    <!-- Name Input Start -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" required class="form-control" id="title">
                    </div>
                    <!-- Name Input End -->

                    <!-- Email Input Start -->
                    <div class="mb-3">
                        <label for="disc" class="form-label">Discription</label>
                        <input type="text" name="disc" class="form-control" id="disc" required>
                    </div>
                    <!-- Email Input End -->

                    <!-- Password Input Start -->
                    <div class="mb-3">
                        <label for="sdate" class="form-label">Start Date</label>
                        <input type="date" name="sdate" required class="form-control" id="sdate">
                    </div>
                    <!-- Password Input End -->

                     <!-- Password Input Start -->
                     <div class="mb-3">
                        <label for="edate" class="form-label">End Date</label>
                        <input type="date" name="edate" required class="form-control" id="edate">
                    </div>
                    <!-- Password Input End -->


                    <button type="submit" class="btn btn-warning" name="sbmt">Assign</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Form End -->
</body>

</html>