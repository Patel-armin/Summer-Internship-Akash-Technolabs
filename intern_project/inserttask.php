<?php

// Check Submit Button click or not
if (isset($_POST['sbmt'])) {


    // Get all Post data in to variables
    $title = $_POST['title'];
    $disc = $_POST['disc'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];

    // $mobile = $_POST['usermobile'];

    // Checking data empty or not
    if ($title != "" && $disc != "" && $sdate != "" && $edate != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "data_bs");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `task`(`title`, `discription`, `sdate`, `edate`) VALUES ('$title','$disc','$sdate','$edate')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {

?>

            <script>
                alert("Data Inserted");
                window.location.href = "task.php";
            </script>
    <?php
        } else {
            echo "Error" . mysqli_error($conn);
        }
    } else {
        echo "All field are empty....!!";
    }
} else {

    header("Location: task.php");
}



?>