<html>

<head>
    <title>User defined function default arguments</title>
</head>

<body>
    <?php
       function percentage($p, $c, $m, $tt1=300)
       {
        echo "p=$p, c=$c, m=$m, tt1=$tt1<br>";
        $percent=($p+$c+$m)*100/$tt1;
        echo "percentage=$percent<br>";
       }
       percentage(50,60,70);
       percentage(25,30,35,150);
    ?>
</body>
</html>
    