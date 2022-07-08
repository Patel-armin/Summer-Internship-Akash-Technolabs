<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
  <!-- ======= Header ======= -->
  <header id="header">

    <nav id="navbar" class="nav-menu navbar">
      <h2 style="color: white;"><strong>EmployeDesk</strong></h2>
      <ul>
        <li><a href="index.php" class="nav-link  active"><i class="bx bx-home"></i> <span>Home</span></a></li>

        <li>

          <?php

          if (isset($_SESSION['email'])) {
          ?>
        <li class="nav-item">
          <a href="logout.php" class="nav-link  "><i class="bx bx-server"></i> <span>Logout</span></a>
        </li>
      <?php
          } else {
      ?>
        <li class="nav-item">
          <a href="login.php" class="nav-link  "><i class="bx bx-server"></i> <span>Login</span></a>
        </li>
      <?php
          }

      ?>
      </li>

      <?php
      if (isset($_SESSION['email'])) {
      ?>

        <li><a href="adduser.php" class="nav-link  "><i class="bx bx-user"></i> <span>Add Employee</span></a></li>
        <li><a href="task.php" class="nav-link  "><i class="bx bx-user"></i><span>Assign Task</span></a></li>
        <li><a href="viewuser.php" class="nav-link  "><i class="bx bx-book-content"></i><span>View Employee</span></a></li>
        <li><a href="viewtask.php" class="nav-link  "><i class="bx bx-book-content"></i><span>View Task</span></a></li>
      <?php
      }
      ?>

      </ul>

    </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
</body>

</html>