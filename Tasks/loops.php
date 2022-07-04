<?php

// The Different types of Loops in php

/* 
1. While
2. do...while
3. for
4. foreach
*/

//While loop
$x = 10;
while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
} 

echo "<br/>";


//Do...While loop
$y = 1;
while($y <= 5) {
  echo "The number is: $y <br>";
  $y++;
} 
echo "<br/>";



//for loop
for ($z = 0; $z <= 100; $z+=10) {
    echo "The number is: $z <br>";
  }
  echo "<br/>";



// foreach loop 

//Example 1
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
    }
    echo "<br/>";


//Example 2

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";
    }
    echo "<br/>";   
?>