<?php
//php is a server side scripting language
#PHP conditional statement
$a = "Vamsi";
$b = "Chittoor";

$c = 10;
$d=30;
//if and else is used for only two conditions
if($c==10)
{
echo  ("Hi,Vamsi.How are you?");
}
else 
{
echo ("Hi,Chittoor.How are you");
}
echo "<br>";
//Multiple conditions are checked
if($d==10)
{
echo  ("Hi,Vamsi.How are you?");
}
elseif ($d==20)
{
echo ("Hi,Chittoor.How are you");
}
else
{
	echo ("Hi,welcome");
}

?>