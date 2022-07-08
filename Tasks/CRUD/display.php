<?php 

require './connection.php';
 if(isset($_GET['did'])){
    mysqli_query($conn, "delete from detail where id = '{$_GET['did']}'") or die(mysqli_error($conn));
 }


$result = mysqli_query($conn, "select * from detail") or die(mysqli_error($conn)); 

echo "<table border = '1'>";
while($row = mysqli_fetch_array($result)){

    echo "<tr>";

echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
echo "<td> <a href = 'update.php?uid=$row[0]'>Update</a></td>";
echo "<td> <a href = 'display.php?did=$row[0]'>Delete</a>  </td>";

     echo "</tr>";
}
echo "</table>";

?>