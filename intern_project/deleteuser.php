<?php

if (isset($_GET['id'])) {

    $delete_id = $_GET['id'];

    // 1. Connecting Project to Database
    $conn = mysqli_connect("localhost", "root", "", "data_bs");

    //2. Checking Connectiong working or not
    if (!$conn) {
        die("Error in Connecting DB" . mysqli_connect_error());
    } else {

        // 3. Prepare Delete query
        $userDelete = "DELETE FROM `employe` WHERE `id`='$delete_id'";

        if (mysqli_query($conn, $userDelete)) {
?>
            <script>
                alert("Data Deleted... Successfully..");
                window.location.href = "viewuser.php";
            </script>
<?php
        } else {
            echo "Error in Delete " . mysqli_error($conn);
        }
    }
}