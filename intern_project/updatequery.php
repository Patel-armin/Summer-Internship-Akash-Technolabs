<?php

if(isset($_POST['sbmt'])){

     $name = $_POST['username'];
     $email = $_POST['useremail'];
     $password = $_POST['userpassword'];


    // Checking data empty or not
    if ($name != "" && $email != "" && $password != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost", "root", "", "data_bs");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }else{

            // 3. prepare query
            $updateUser = "UPDATE `employe` SET `username`='$name',`password`='$password' WHERE `email`='$email'";

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