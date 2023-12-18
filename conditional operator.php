<html>

<head>
    <title>Conditional Operators</title>
</head>

<body>

<?php
   $a = 10;
   $b = 20;

   //if condition is true then assign a to result otherwise b
   $result = ($a > $b) ? $a : $b;

   echo "TEST1 : Value of result is $result<br/>";

   //if condition is true then assign a to result otherwise b
   $result = ($a < $b) ? $a : $b;

   echo "TEST2 : Value of result is $result<br/>";
?>

</body>
</html>
