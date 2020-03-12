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

		$name= $_FILES['homework']['name']);
		$tmp_name= $_FILES['homework']['tmp_name'];
		$size= $_FILES['homework']['size'];
		$ok =false;
		$msg=array();

		if ($size>204800) {
			$msg[] = "Size allowed  more than 200KB";
			$ok =false;

		}else{
			

		if(is_uploaded_file($tmp_name)){
			move_uploaded_file($tmp_name, "uploads/" . $name;


		}
	}


}

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