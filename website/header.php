<html>
<body>
<h3>Welcome to my home page</h3>
<?php  include('footer.php') ;?>
<h3>include asks the browser to include a file but if its not found it will show error and continue to next execution lines</h3>
<?php require('footer.php') ;?>
<h3>require method makes the file mandatory to put there  but if its not found it will show error and next lines are not executed the program will stop there itself</h3>

</body>

</html>