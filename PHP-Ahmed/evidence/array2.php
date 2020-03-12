<h2> Check Your Result: </h2>

<form method="post">
<input type="text" name="num" value="" placeholder="Enter your grade" />
<input type="submit" value="RESULT" name="submit" />
</form>

<?
if(isset($_POST['submit'])){
	$grade = $_POST['num'];
	switch($grade){
	case"A":
	echo "Excellent";
	break;
	case"B":
	echo "Good";
	break;
	case"C":
	echo "Fair";
	break;
	case"D":
	echo "Poor";
	break;
	case"F":
	echo "Failure";
	break;
	default:
	echo "Result not found";
	}
	
	}

?>