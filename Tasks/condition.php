<?php
// types of conditional statements in php 


/*
The if statement
The if…else statement
The if…elseif….else statement
The switch…case statement
*/

//The if statement 
$t = 10;

if ($t < "20") {
  echo "Welcome to Akash Technolabs!<br/>";
}


// The if...else Statement

//TRUE

$t = 10;
if ($t < "20") {
  echo "Welcome To Akash Technolabs!<br/>";
} else {
  echo "For More Details You can reach on this akashtechnolabs.com!<br/>";
}

//When The Condition is False!
$t = 30;

if ($t < "20") {
  echo "Welcome To Akash Technolabs!<br/>";
} else {
  echo "For More Details You can reach on this akashtechnolabs.com!<br/>";
}

// The if...elseif...else Statement

$t = 30;

if ($t < "10") {
  echo "Welcome To Akash Technolabs!<br/>";
} elseif ($t < "20") {
  echo "For More Details You can reach on this Akash Technolabs.com!<br/>";
} else {
  echo "Having Fun with Akash Technolabs!<br/>";
}

//The switch Statement
$favcolor = "green";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!<br/>";
    break;
  case "blue":
    echo "Your favorite color is blue!<br/>";
    break;
  case "green":
    echo "Your favorite color is green!<br/>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!<br/>";
}

?>

