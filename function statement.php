<html>

<head>
    <title>Call by reference</title>
</head>

<body>
    <?php
       function swap(&$x, &$y)
       {
        $t=$x;
        $x=$y;
        $y=$t;
       }
       $a=10;$b=20;
       echo "before swap a=$a, b=$b<br>";
       swap($a,$b);
       echo "after swap a=$a, b=$b<br>";
       ?>

</body>
</html>

