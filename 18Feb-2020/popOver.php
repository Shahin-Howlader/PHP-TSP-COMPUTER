<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Popover Example</h3>
  <ul class="list-inline">
    <li><a href="#" title="Header" data-toggle="popover" data-placement="top" data-content="Content">Top</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="bottom" data-content="Content">Bottom</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="left" data-content="Content">Left</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="right" data-content="Content">Right</a></li>
  </ul>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</body>
</html>
