<?php 
require './connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];


$query = mysqli_query($conn,"INSERT INTO detail(name, email, gender)
    VALUES ('$name', '$email' ,'$gender')")or die("Error".mysqli_error($conn));

if($query){
    echo "<script>alert('Record added');</script>";
}else{

}
 header("location:display.php");

?>