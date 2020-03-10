<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News Php</title>
</head>
<body>
	<?php
	$news = array(
				"News Title 1" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, vel, assumenda. Vero dolor modi necessitatibus maiores quo explicabo repudiandae esse doloribus animi ipsum laudantium minus soluta, consequuntur, magnam cum, deleniti.",

				"News Title 2" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, vel, assumenda. Vero dolor modi necessitatibus maiores quo explicabo repudiandae esse doloribus animi ipsum laudantium minus soluta, consequuntur, magnam cum, deleniti.",

				"News Title 3" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, vel, assumenda. Vero dolor modi necessitatibus maiores quo explicabo repudiandae esse doloribus animi ipsum laudantium minus soluta, consequuntur, magnam cum, deleniti.",

				"News Title 4" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, vel, assumenda. Vero dolor modi necessitatibus maiores quo explicabo repudiandae esse doloribus animi ipsum laudantium minus soluta, consequuntur, magnam cum, deleniti.",

				"News Title 5" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, vel, assumenda. Vero dolor modi necessitatibus maiores quo explicabo repudiandae esse doloribus animi ipsum laudantium minus soluta, consequuntur, magnam cum, deleniti."


	);
	foreach ($news as $title => $body) {
		echo "<h3>$title</h3>" . "$body";
	}


	?>
	
</body>
</html>
