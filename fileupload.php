<?php
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
$uploadOK=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (isset($_POST["submit"]))
{
	$check=getimagesize($_FILES["fileupload"]["tmp_name"]);
	if($check != false){
		 echo "File is an image= ".$check["mime"].".";
		 $uploadOK=1;
		 move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_file);
	}
	
}
?>