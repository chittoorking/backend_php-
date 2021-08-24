<?php
  $a=20;
  $b=10;
  echo $a-$b;
  echo "<br>";
  echo $b-$a;
  echo "<br>";
  $c=$a+$b;
  echo "$a"."-"."$b"."="."$a+$b";
  echo "<br>";
  echo "$a"."-"."$b"."="."$c";
  echo "<br>";
  //no string or arith,etic operations work under double quotations
  echo "$a"."-"."$b"."=".($a+$b);
  echo "<br>";
  echo $a*$b;
  echo "<br>";
  echo $a/$b;
  echo "<br>";
  echo $a%$b;
  echo "<br>";
  //percentage
  $c=100;
  echo ($a/$c)*100;
?>