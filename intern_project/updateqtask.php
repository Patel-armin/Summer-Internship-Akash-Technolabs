<?php

if(isset($_POST['sbmt'])){

     $title = $_POST['title'];
     $disc = $_POST['disc'];
     $sdate = $_POST['sdate'];
     $edate = $_POST['edate'];


    // Checking data empty or not
    if ($title != "" && $disc != "" && $sdate != "" && $edate != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "data_bs");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }else{

            // 3. prepare query
            $updateUser = "UPDATE `task` SET `title`='$title',`discription`='$disc',`edate`='$edate' WHERE 'sdate'='$sdate' ";

            if(mysqli_query($conn,$updateUser)){

                ?>
                    <script>
                        alert("Data Updated successfully");
                        window.location.href="viewuser.php";
                    </script>
                <?php

            }else{
                echo "Error in update data : ".mysqli_error($conn);
            }

        }
        
    }


}

?>