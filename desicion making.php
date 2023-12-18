<?php
   $x=rand(1,100);
   echo "Random number is $x <br/>";
   if($x<25)
      echo "number less than 25<br/>";
    elseif($x<50)
      echo "number is between 25-50<br/>";
    else
      echo "number is greater or equal to 50<br/>";
?>