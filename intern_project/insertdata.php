<?php

// Check Submit Button click or not
if (isset($_POST['sbmt'])) {


    // Get all Post data in to variables
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    // $mobile = $_POST['usermobile'];

    // Checking data empty or not
    if ($name != "" && $email != "" && $password != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "data_bs");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `employe`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {

?>

            <script>
                alert("Data Inserted");
                window.location.href = "adduser.php";
            </script>
    <?php
        } else {
            echo "Error" . mysqli_error($conn);
        }
    } else {
        echo "All field are empty....!!";
        // header("Location: adduser.php");
    }
} else {

    header("Location: adduser.php");
}



?>