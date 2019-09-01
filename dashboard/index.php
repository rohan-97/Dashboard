<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Dashboard</title>		
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link rel="stylesheet" media="screen" href="css/custom.css">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<script>
		<?php
			echo "var patch_list = [";
			$tmp=0;
			foreach (glob("..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."patches".DIRECTORY_SEPARATOR."*") as $key => $value) {
				if($tmp > 0){
					echo ",";
				}
				echo "{";
				echo "'filename' : '".substr($value,14)."',";
				echo "'formatted_modified_date' : '".date('d-m-Y', (filemtime($value)))."',";
				echo "'modified_date' : '".filemtime($value)."',";
				echo "'size' : '".filesize($value)."'";
				echo "}";
				// echo "<li class='collection-item'><div>".substr($value,14)."<a href='#!' class='secondary-content'><i class='material-icons black-text tooltipped' data-position='top' data-tooltip='Copy to clipboard' onclick='copyThat(this)'>content_copy</i></a></div></li>";
				$tmp = $tmp + 1;
			}
			echo "];\n";

			echo "var directories = [";
			$tmp=0;
			foreach (glob("..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."*", GLOB_ONLYDIR) as $key => $value) {
				if($tmp > 0){
					echo ",";
				}
				echo "'".substr($value,5)."'";
				$tmp = $tmp + 1;
			}
			echo "];";
		?>
	</script>
<body>
	<nav>
		<div class="nav-wrapper light-blue darken-4">
			<a href="#" class="brand-logo">Dashboard<i class="material-icons">developer_board</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="https://products-internal.protegrity.com" target="blank">Product Internals</a></li>
				<li><a href="https://vcloud.protegrity.com/cloud/org/rnd/" target="blank">vCloud</a></li>
				<li><a href="https://stad8git.protegrity.com" target="blank">Gitlab</a></li>
			</ul>
		</div>
	</nav>
	<!-- navbar -->

<div class="container">


	<ul class="collapsible popout">
		<li>
			<div class="collapsible-header"><i class="material-icons">healing</i>Patches</div>
			<div class="collapsible-body">
				<div class="">
					<span>
						<label>
							<input class="red darken-4 radiobuttons" data-html="name" name="group1" type="radio"  />
							<span>Sort By Name</span>
						</label>
					</span>
					<span>
						<label>
							<input class="red darken-4 radiobuttons" data-html="date" name="group1" type="radio" checked="checked"/>
							<span>Sort by Last Modified date</span>
						</label>
					</span>
				</div>
				<ul class="collection with-header">
						<li class="collection-header"><h4>Fetch Patches from Here...</h4></li>
						<li class="collection-item"><div>Patch 3<a href="#!" class="secondary-content"><i class="material-icons black-text tooltipped" data-position="top" data-tooltip="Copy to clipboard" onclick="copyStringToClipboard('Patch 3')">content_copy</i></a></div></li>
						<li class="collection-item"><div>Patch 3<a href="#!" class="secondary-content"><i class="material-icons black-text tooltipped" data-position="top" data-tooltip="Copy to clipboard" onclick="copyStringToClipboard('Patch 3')">content_copy</i></a></div></li>
						<li class="collection-item"><div>Patch 4<a href="#!" class="secondary-content"><i class="material-icons black-text tooltipped" data-position="top" data-tooltip="Copy to clipboard" onclick="copyStringToClipboard('Patch 4')">content_copy</i></a></div></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">list</i>Other Directories</div>
			<div class="collapsible-body">
			<ul class="collection dircontainer">
				<li class="collection-item avatar"><i class="material-icons circle">folder</i><span class="title">Title</span><p>First Line <br>Second Line</p><a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>
				<!-- <li class="collection-item avatar">
					<i class="material-icons circle green">folder</i>
					<span class="title">Title</span>
					<p>First Line <br>
						Second Line
					</p>
					<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				<li class="collection-item avatar">
					<i class="material-icons circle red">folder</i>
					<span class="title">Title</span>
					<p>First Line <br>
						Second Line
					</p>
					<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li> -->
			</ul>
			</div>
		</li>
	</ul>

</div>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/jquery-3.4.0.slim.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
