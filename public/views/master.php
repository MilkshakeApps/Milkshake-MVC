<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MilkshakeMVC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body cz-shortcut-listen="true" hola-ext-player="1">

	<nav class="navbar navbar-inverse navbar-fixed-top">

	  <div class="container">

		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">MilkshakeMVC</a>
		</div>

		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
		  <?php
		  	foreach ($model->get("menu") as $name => $link) {
			  	echo "<li><a href='$link'>$name</a></li>";
		  	}
			?>
		  </ul>
		</div>

	  </div>

	</nav>

	<div style="padding-top: 60px;">
	
	</div>

	<?php require($this->viewFile); ?>

	<footer>
		<?php
		  	foreach ($model->get("footer") as $name => $link) {
			  	echo "<li><a href='$link'>$name</a></li>";
		  	}
	  	?>
	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>