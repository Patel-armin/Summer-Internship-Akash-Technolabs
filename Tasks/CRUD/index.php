<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>Insert Your Data</h2>
    <div>
    <form action="insert.php" method="post">
    <label for="name"> Name:</label><br>
        <input type="text" id="name" name="name"  placeholder="Enter your Name"><br> 
        <label for="mail">Email:</label><br>
        <input type="text" id="Email"Name="email" placeholder="Enter your mail"><br>
        
    
        <label for="gender">Select your Gender: </label><br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male </label><br>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="Female">Female </label><br>


        <br><input type="submit">



    </form>
    </div>
    
</body>
</html>