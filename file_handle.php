<html>
<body>
<?php
  echo readfile("file.txt");
?>
<h1>This is not a good practice to just read .We need to open the file do the operations and close the file</h1>
<br><br><br>
<hr>
<h1>Below is the good way</h1>
<?php
   $myfile =fopen("file.txt","r") or die("Unable to open file!");
   echo fread($myfile,filesize("file.txt"));
   fclose($myfile);
?>
<br><br><hr>
<h3>Above methods print all lines .Below is the way to print the first line</h3>
<?php
   $myfile =fopen("file.txt","r") or die("Unable to open file!");
   echo fgets($myfile);
   fclose($myfile);
?>
<?php
   $myfile =fopen("newfile.txt","w") or die("Unable to open file!");
   $txt="John Doe\n";
   fwrite($myfile,$txt);
   fclose($myfile);
?>
<h1>To add new text without erasing past data will do it laterthis is not working</h1>
<?php
   $myfile =fopen("newfile.txt","w") or die("Unable to open file!");
   $txt="Chittoor vamsi\n";
   fputs($myfile,$txt);
   fclose($myfile);
?>
</body>
</html>