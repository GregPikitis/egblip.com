<html>
	<head>
		<!--Credit to caligari87 on reddit for the base code-->
		<meta charset="UTF-8">
		<title>egblip</title>

		<style>
			:focus { outline:0; /*removes the dotted link border*/ }

			a {
				text-decoration: none;
				color: #000000;
			}

			body {
				text-align:center;
				font-family:arial, sans-serif;
				font-size:13px;
				background-color: silver;
				background-image: url("resources/background.png");
				background-repeat:repeat;
				color: #222222;
			}

			div.centerbox {
				position:fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				display:table-cell;
				text-align:center;
				vertical-align:middle;
				box-shadow:0px 4px 6px dimgrey;
				background: #ffffff;
			}

			div.iconbox {
				width:88px;
				height:96px;
				margin:15px;
				display:inline-block;
				text-align:center;
				vertical-align:middle;
				padding:0px;
				transition:box-shadow 0.25s;
				box-shadow:0px 1px 2px lightgrey;
			}

			div.iconbox:hover {
				box-shadow:0px 4px 6px darkgray;
				transition:box-shadow 0.25s;
			}

			footer {
				text-align:left;
				position:absolute;
				bottom:0;
				padding:5px;
			}

			img {
				width:64px;
				height:64px;
				background: verylightgrey;
			}
		</style>
	</head>
	<body>
		<?php
		if ($_GET['run']) {
		  # This code will run if ?run=true is set.
		  shell_exec("/var/www/updatestartpage");
		  sleep(5);
		  header("Location: index.php");
		}
		?>

		<!— This link will add ?run=true to your URL, myfilename.php?run=true —>
		<p style="text-align: left; margin: 0px">
		<a href="?run=true" ;="" style="color:#4c4c4c;text-align:left;">Refresh</a>
		</p>

		<div class="centerbox">
			<h1>egblip.com!</h1>

			<a href="https://start.egblip.com"><div class="iconbox"><img src="resources/icons/start.png"></br>Startpage</div></a>
			<a href="https://github.com/GregPikitis"><div class="iconbox"><img src="resources/icons/github.png"></br>Github</div></a>
			<a href="2016resume.pdf"><div class="iconbox"><img src="resources/icons/resume.png"></br>Resume</div></a>
			</br>
			<a href="https://school.egblip.com"><div class="iconbox"><img src="resources/icons/school.png"></br>School</div></a>
			<a href="https://www.linkedin.com/in/emelia-blankenship-2176a2126/"><div class="iconbox"><img src="resources/icons/linkedin.png"></br>LinkedIn</div></a>
		</div>

		<footer>Based off of caligari87's Startpage</footer>
	</body>
</html>
