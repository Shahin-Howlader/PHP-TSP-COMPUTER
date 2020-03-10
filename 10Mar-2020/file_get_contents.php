<?php
  $users = file_get_contents('file/users.txt');

  echo $users;
   

?>
<hr>

<?php
  $users = file_get_contents('file/users1.txt');

  $usersArray = explode("\n", $users);
  echo "<pre>";
  print_r($usersArray);
   

?>

<hr>

<?php
  $users = file_get_contents('file/users1.txt');

  $usersArray = explode("\n", $users);

  foreach ($usersArray as $user) {
  	list($name, $email)=explode(",", $user);
  	echo "Name: " . $name . ",". $email . "<br>";
  }


  //echo "<pre>";
  //print_r($usersArray);
   

?>