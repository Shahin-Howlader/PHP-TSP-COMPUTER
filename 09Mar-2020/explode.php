<?php

	$summary = <<<summary
	 The most up to date source for PHP documentation is the PHP manual.
	 It contins many examples and user contributed code and comments.
	 It is available on the main PHP web site
	 <a href="http://www.php.net">PHP’s</a>.
	summary;

	 $allwords=(explode(' ',strip_tags($summary)));
	 $words = sizeof(explode(' ',strip_tags($summary)));
	 echo "Total words in summary: $words";

	 echo "<pre>";
	 print_r($allwords);

?>
<hr>
<?php
 $worrr= "The most up to date source for PHP documentation is the PHP manual.";

 $allwords=sizeof(explode(' ',strip_tags($worrr)));

 echo "Total words in summary: $worrr";
 echo "<pre>";
 print_r($allwords);

?>