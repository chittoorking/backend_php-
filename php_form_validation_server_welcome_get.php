<html>
<body>
<?php 
 $name =$email="";
 if ($_SERVER["REQUEST_METHOD"]=="GET")
 {
	 if (empty($_GET["name"]))
	 {
		 $name="Name is required";
	 }
	 else
	 {
		 $name=$_GET["name"];
	 }
	 if (empty($_GET["email"]))
	 {
		 $email="email is required";
	 }
	 else
	 {
		 $email=$_GET["email"];
	 }
 }
 ?>
Welcome <?php echo $name;?>
<br>
Your email address is :<?php echo $email;?><br>
</body>
</html>