<?php 

$conn = mysqli_connect("localhost","root","",'akash-internship');

if($conn){
    // echo "Connected sucessfully.";
}else{
    die("Connection failed".mysqli_connect_error());
}

?>