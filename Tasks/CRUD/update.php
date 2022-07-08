<?php 
require './connection.php';

$id = $_GET['uid'];

$fetchq = mysqli_query($conn,"select * from detail where id = ' {$id}'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($fetchq);

if($_POST){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    mysqli_query($conn, "update detail set name='{$name}',email='{$email}', gender='{$gender}' 
    where id='{$_GET['uid']}'");

    header("location:display.php");
}

?>
<html>
<body>
<form  method="POST">
    <label for="name"> Name:</label><br>
        <input type="text" id="name" name="name"  value="<?php echo "$row[name]";?>"><br> 
        <label for="mail">Email:</label><br>
        <input type="text" id="Email"Name="email" value="<?php echo "$row[email]";?>" ><br>
        
    
        <label for="gender">Select your Gender: </label><br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male </label><br>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="Female">Female </label><br>


        <br><input type="submit">



    </form>
</body>
</html>


