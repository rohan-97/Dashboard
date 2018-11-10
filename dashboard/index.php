<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web Activities</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="boot/dist/css/bootstrap.min.css">
	<script src="boot/dist/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Exo|Exo+2|Headland+One|Josefin+Sans|Merriweather" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-success">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="http://localhost/phpmyadmin/" target="_blank">Php My Admin <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<!-- navbar -->
	<div id="particles-js" >

		<script src="js/particles.js"></script>
		<div>
			
			<div class="container">
				<div class="row"   id="particles" >

					<?php
					$styles=array();
					$styles[]="success";
					$styles[]="info";
					$styles[]="warning";
					$styles[]="danger";
					$styles[]="primary";
					$styles[]="secondary";
					$styles[]="dark";
					$styles[]="light";
					

					$exclude_list=array("css","resources","particlmaster","js","HTML","ARCHIVES");

					$index=0;
					$directories=array();
					$directories=glob("C:\\xampp\\htdocs".'\\*',GLOB_ONLYDIR);
					foreach ($directories as $key => $value) {
						if(!in_array(substr($value,16), $exclude_list)){
							echo '<a  href="'.substr($value,15).'" target="_blank" class="card ';
							if ($index%8!=7)	echo"text-white";
							else 	echo"text-dark";
							echo ' bg-'.$styles[$index%8].' mb-3"  style="max-width: 20rem;margin: 20px;width: 300px;">
							<div class="card-header"><p class="h5 text-capitalize" id="joseph">'.substr($value,16).'</p></div>
							<div class="card-body">
							<img class="img-thumbnail" src="'.substr($value,15).'\\thumb\\thumbnail.jpeg">

							</div>
							</a>
							';
							$index=$index+1;
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>
	<!-- scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<script src="js/app.js"></script>

</body>
</html>
