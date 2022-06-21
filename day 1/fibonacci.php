
<html>
    <head>
        <title>First 10 fibonacci num</title>
    </head>
    <body>
        <?php
        $i = 0;
        $j = 1;
        print "<b> Fibonacci series<br/>";
        printf("%d",$i);
        for($count = 1; $count <= 9; $count++ ){
            $k = $i + $j;
            $i = $j;
            $j = $k;
            printf(",%d",$i);
        }
        ?>
    </body>
</html>
