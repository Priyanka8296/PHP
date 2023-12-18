<html>

<body>
    <?php
    //break example
    $y=0;
    while($y<10)
    {
        $y++;
        $x=rand(1,10);
        echo $x . "<br>";
        if($x==5) break;
    }
    ?>
</body>
</html>