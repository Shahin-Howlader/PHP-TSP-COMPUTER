<?php
	$secret = 'd033e22ae348aeb5660fc2140aec35850c4da997';
	if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
	 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
	 header('WWW-Authenticate: Basic Realm="Secret Stash"');
	 header('HTTP/1.0 401 Unauthorized');
	 print('You must provide the proper credentials!');
	 exit;
	}
?>
<h2>You are accessed</h2>