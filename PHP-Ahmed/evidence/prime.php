<h2> Check Your Number is Prime or Not: </h2>

<form method="post">
<input type="text" name="num" value="" placeholder="Enter your number" />
<input type="submit" value="Check Prime" name="submit" />
</form>

<?
if(isset($_POST['submit'])){
	$number = $_POST['num'];
	$prime = 1;
	
	for($i=2; $i<$number; $i++){
		if($number%$i==0){
			$prime=0;
			break;
			
			}
		}
		
		if($prime==1){
			echo "The number $number is prime";
			
			}else{
				echo "The number $number is not prime";
				}
	
	}

?>