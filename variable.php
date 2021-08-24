<?php
$a=10;
$b="This is a string";
//This is a single line comment
#This is also a single line comment
/*This 
is 
a
multiline 
comment*/
//Variable names are case sensitive
echo $a,$b;
echo $a;
echo $b;
echo $c="A good programmer is someone who writes code in less lines and less storsge";
$d=10;
$e=20;
$f=$d+$e;
echo $f;
//Below code reduces the memory usage---Light bit coding is important and necessary
echo $d+$f;
$A="10";
$B=10;
//Automatically converting :as we are using + symbol it treats them as numbers;from a string to an integer
echo $A+$B;
$C="10";
echo $A+$C;
//Concatination using .  :It will treat numbers as strings and join them rather than arithmetic operation
echo $A.$B;
$G=10;
echo $A.$G;
?>