<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['submit'])){


$prm=$_POST['num'];

if ($prm=="A"){
		echo "Exellent";
		
		}else if ($prm=="B"){
		echo "GOOD";
		
		}else if ($prm=="C"){
		echo "FAIR";
		
		}else if ($prm=="D"){
		echo "FAILOR";
		
		}else{
			echo " Please enter Character A B C & D";
			
			}
			}

				





?>
<form method="post" action="">
	<input type="text" name="num" placeholder="Enter Your Value">
    <input type="submit" name="submit" value="submit">

</form>


</body>
</html>