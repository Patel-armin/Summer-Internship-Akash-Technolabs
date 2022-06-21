<html>
<head>
    <title>max among three num </title>
</head>
<body>
<?php
$a = 2;
$b = 3;
$c = 15;

if($a > $b){
    if($a > $c)
    {
       print "<b><br/> A is largest number</b>";
    }
    else{
        print "<b><br/> C is largest number </b>";
    }
}
else{
    if($b > $c){
        print "<b><br/>B is largest number</b>";
    }
    else{
        print "<b><br/>C is largest number</b>";
    }
}

?>
</body>
</html>