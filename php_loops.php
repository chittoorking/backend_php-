<?php
//php loops
//php loops are of four types
//while loop
//do while loop
//for loop
//for each loop

#While loop
$a=1;
$c=1;
while($a<=10)
{
	echo $a,"<br>";
    $a=$a+1;
}
#do while 
do 
{
	echo $c,"<br>";
	$c++;
}while($c<=10);
echo "Printing the  table of 10 using while loop","<br>";
$b=10;
$n=1;
while($n<=10)
{
	echo "$b "." *"." $n"."=".($b*$n) ,"<br>";
	$n++;
}
while($n<=20)
{
	echo $b." *".$n." =".($b*$n) ,"<br>";
	$n++;
}
echo "Printing the table of 10 using for loop <br>";
for($x=0;$x<=100;$x+=10)
{
	echo "The number is :$x <br>";
}
//For each loop is used for iteration purpose 
//It works with arrays
#Defining an array
$age = array("Rahul"=>"20","Vikram"=>"30","Piyush"=>"40");
echo $age["Vikram"];
echo "<br>";
foreach($age as $x => $val)
 echo "$x=$val","<br>";
?>