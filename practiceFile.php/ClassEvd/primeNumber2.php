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

if($prm==0||$prm==1){
	echo "0 or 1 is not accept";
	
	}else if ($prm==2|| $prm==3|| $prm==5|| $prm==7){
		echo " $prm is a prime Number";
		
		}else if (($prm%2)!=0 && ($prm%3)!=0 && ($prm%5)!=0 && ($prm%7)!=0){
		echo " $prm is a prime Number";
		
		}else{
			echo " $prm is NOT a prime Number";
			
			}
				}





?>
<form method="post" action="">
	<input type="text" name="num" placeholder="Enter Your Number">
    <input type="submit" name="submit" value="submit">

</form>


</body>
</html>