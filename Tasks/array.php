<?php

/*
There are three types of arrays in PHP.

Indexed Arrays: Arrays with numeric indexes (keys).
Associative Arrays: Arrays with named keys.
Multidimensional arrays: Arrays of arrays

*/

// Indexed Arrays

/* First way to create array. */
$numbers = array( 1, 2, 3, 4, 5);
         
foreach( $numbers as $value ) {
   echo "Value is $value <br />";
}
echo "<br/>";
/* Second way to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $value ) {
   echo "Value is $value <br />";
}

echo "<br/>";

//Associative Arrays


/* First way to create array. */
$salaries = array("mark" => 2000, "janet" => 1000, "asma" => 500);

echo "Salary of mark is ". $salaries['mark'] . "<br />";
echo "Salary of janet is ".  $salaries['janet']. "<br />";
echo "Salary of asma is ".  $salaries['asma']. "<br />";
echo "<br/>";

/* Second way to create array. */
$salaries['mark'] = "high";
$salaries['janet'] = "medium";
$salaries['asma'] = "low";

echo "Salary of mark is ". $salaries['mark'] . "<br />";
echo "Salary of janet is ".  $salaries['janet']. "<br />";
echo "Salary of asma is ".  $salaries['asma']. "<br />";

?>