<html>
    <head>
        <title>Sum of first 100 even number</title>
    </head>
    <body>

        <?php
        $sum =0;

        for($i=1;$i<=200;$i++)
        {
           if($i % 2 == 0)
           {
            $sum += $i;
            print "<br/> $i  $sum";
           }

        } 
        print "<br/><b>First 100 even number sum is . $sum ";
        ?>
    </body>
</html>