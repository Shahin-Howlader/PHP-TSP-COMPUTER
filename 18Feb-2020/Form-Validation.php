<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>stripslashes: (Security)</title>
</head>
<body>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nameErr = "";
  $emailErr = "";
  $web = "";

  if($_POST["name"]==""){
    $nameErr = "Name is Required";
  }elseif ($_POST["email"]=="") {
    $emailErr = "Email is Required";
    
  }else if ($_POST["website"]=="") {
    $web = "Address is Required";
    
  }
   else{
    $name = sanitize($_POST["name"]);
     $email = sanitize($_POST["email"]);
      $website = sanitize($_POST["website"]);
  }



  $comment = sanitize($_POST["comment"]);
  $gender = sanitize($_POST["gender"]);
}

function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name"><span class="error"><?php if (isset($nameErr)) echo $nameErr; ?></span>
  <br><br>
  E-mail: <input type="text" name="email"><span class="error"><?php if (isset($emailErr)) echo $emailErr; ?></span>
  <br><br>
  Website: <input type="text" name="website"><span class="error"><?php if (isset($web)) echo $web; ?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
	
</body>
</html>