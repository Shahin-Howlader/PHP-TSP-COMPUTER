<?php
$links = array("The Apache Web Server" =>"www.apache.org", 
				"Apress" =>"www.apress.com",
				"The Php Scripting Language"=> "www.php.net");

/*echo "Online Resourcess :<br>";
foreach($links as $title=>$links){

	echo "<a href =\"http://{$links}\">{$title}</a><br>";
}*/

foreach ($links as $title => $value) {
	echo "<a href='http://{$value}'>{$title}</a><br>";
}






?>