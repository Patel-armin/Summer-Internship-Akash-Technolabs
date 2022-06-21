<html>

<?php
$num1 = 10 ;
$num2 = 5 ;
echo "<br/>Before swap num1 is ".$num1." and num2 is ".$num2;
//method 1 using temp 
$temp = $num1;
$num1 = $num2;
$num2 = $temp;

echo "<br>After swap num1 is ".$num1." and num2 is".$num2; 

// method 2 without using temp 
$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;

echo "<br>After second time swap num1 is ".$num1." and num2 is ".$num2;
?>
</html>