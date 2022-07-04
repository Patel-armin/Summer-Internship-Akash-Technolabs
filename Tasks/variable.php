
<html>
    <h1>Comment, Comment, Comment!</h1>
    <h2>One way of placing a comment in one line is achieved by having two forward slashes (//) preceding the comment.</h2>
    
    <?php
// This is a comment
echo 'Hello World!'; //This is another comment
?>

<h2>Another way to make comments is through a comment block which is wrapped by /* */.</h2><nbsp></nbsp>
<h2>You want to use a comment block when your comment is more than a few lines long.</h2><nbsp></nbsp>

<?php
/*
By using a comment block, you are
capable of putting comments
on multiple lines.
*/
echo 'Hello World!';
?>

<h1>Variables</h1>
<h2>A PHP variable always starts with a dollar sign ($)</h2>
<h3>You should always try to give your variables names that are as descriptive as possible.</h3><nbsp></nbsp>
<h3>Alphanumeric characters (i.e.A-Z, a-z, and 0-9) and underscores (_) are allowed, but the name cannot start with a digit</h3>

<?php
// Valid
$player_name;
// Valid
$playerName;
// Valid
$player2nd;
// Valid
$_player_name;

// Not valid - has a space
// $player name;
// Not valid - starts with a number
// $1st;
?>


<?php
// Assigning a Value to a Variable
$player_name = 'Freddy';
// We now have a variable called $player_name that contains a string value of “Freddy”.
?>

<h1>Printing Variables</h1>
<h2>We can print out a variable’s value using echo.</h2>
<?php
$player_name = 'Freddy';
echo $player_name;
?>
<h2>If you want to combine a variable with a static string, you can use a period (.) to append your strings together.</h2>

<?php
$player_name = 'Freddy';
// Prints out "Hello Freddy!"
echo 'Hello ' . $player_name . '!';
?>

</html>
