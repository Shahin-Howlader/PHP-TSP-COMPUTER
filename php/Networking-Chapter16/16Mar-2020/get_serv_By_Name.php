<?php
 echo "HTTP's default port number is: ".getservbyname("http", "tcp");
?>

<hr>
<?php
 echo "Port 80's default service is: ".getservbyport(443, "tcp");
?>

<hr>
<?php
 // Establish a port 80 connection with www.example.com
 $http = fsockopen("www.example.com",80);
 // Send a request to the server
 $req = "GET / HTTP/1.1\r\n";
 $req .= "Host: www.example.com\r\n";
 $req .= "Connection: Close\r\n\r\n";
 fputs($http, $req);
 // Output the request results
 while(!feof($http)) {
 echo fgets($http, 1024);
 }
 // Close the connection
 fclose($http);
?>