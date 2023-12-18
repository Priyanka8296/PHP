<html>

<head>
    <title>User defined function variable arguments</title>
</head>

<body>
    <?php
       function average()
       {
        $args = func_get_args();
        print_r($args);echo "<br>";
        $sum=0;
        $count=func_num_args();
        for($i=0;$i<func_num_args();$i++)
        {
            $sum+=$args[$i];
        }
        $avg=$sum/$count;
        echo "average=$avg";

       }
       average(10,20,30,40,50);
    ?>
</body>
</html>