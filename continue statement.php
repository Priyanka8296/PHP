<html>

<body>
    <?php
    //continue example
    $y=0;
    while($y<10)
    {
        $y++;
        $x=rand(1,10);  //random
        
        if($x==5) break;
        echo "random number $y : value : $x <br>";
    }
    ?>
</body>
</html>