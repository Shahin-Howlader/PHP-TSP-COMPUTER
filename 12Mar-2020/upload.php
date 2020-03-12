<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if(isset($_POST['submit'])){
		//echo "<pre>";
		//print_r($_FILES);

		$name= $_FILES['homework']['name'];
		$ext = pathinfo($name, PATHINFO_EXTENSION);
		$ext = strtolower($ext);
		$allowedTypes = array("jpg","png","jpeg");


		$tmp_name= $_FILES['homework']['tmp_name'];
		$size= $_FILES['homework']['size'];
		$ok =false;
		$msg=array();

		if ($size>204800) {
			$msg[] = "Size is not allowed  more than 200KB";
			$ok =false;

		}elseif(!in_array($ext, $allowedTypes)){
			$ok = false;
			$msg[] = "File Must be jpg, png or jpeg";

		}else {
			$ok=true;
		}
			
	
		if($ok && is_uploaded_file($tmp_name))
		{
			move_uploaded_file($tmp_name, "uploads/" . $name);

			 echo "File uploaded Successfully <br>";
			 echo "<img src='uploads/$name' width=100px; height=100px> <br>";



		}else{
			 echo "Sorry File can't be uploaded";
			 print_r($msg);

		}
	


}// Isset Closing

	?>

	<form action="" enctype="multipart/form-data"
	method="post">
	 <label form="name">Name:</label><br>
	 <input type="text" name="name" value=""><br>
	 <label form="email">Email:</label><br>
	 <input type="text" name="email" value=""><br>
	 <label form="homework">Class notes:</label>
	 <input type="file" name="homework" value=""><br>
	 <input type="submit" name="submit" value="Submit Homework">
	</form>
	
</body>
</html>