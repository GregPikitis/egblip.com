<html>
	<head>
		<!--Credit to caligari87 on reddit for the base code-->
		<meta charset="UTF-8">
		<title>egblip</title>
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
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
				background: url("resources/background.png") no-repeat center center fixed;
				background-size: cover;
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
				background: #f9f6ff;
				border-radius: 20px;
			}

			div.iconbox {
				width:88px;
				height:96px;
				margin:15px;
				display:inline-block;
				text-align:center;
				vertical-align:middle;
				background: #ffffff;
				padding:0px;
				transition:box-shadow 0.25s;
				box-shadow:0px 1px 1px rgba(78, 62, 85, 0.88);
				border-radius: 5px;
			}

			div.iconbox:hover {
				box-shadow:0px 4px 6px rgba(78, 62, 85, 0.88);
				transition:box-shadow 0.25s;
			}

			footer {
				text-align:left;
				position:absolute;
				bottom:0;
				padding:10px;
				color: #FFE7F7;
			}

			img {
				width:64px;
				height:64px;
				padding:5px;
				padding-bottom:8px;
				background: verylightgrey;
			}
		</style>
	</head>
	<body>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-99868303-1', 'auto');
			ga('send', 'pageview' [home]);
		</script>

		<?php
		if ($_GET['run']) {
		  # This code will run if ?run=true is set.
		  shell_exec("/var/www/updatestartpage");
		  sleep(5);
		  header("Location: https://egblip.com");
		}
		?>

		<!— This link will add ?run=true to your URL, myfilename.php?run=true —>
		<p style="text-align: left; margin: 0px">
		<a href="?run=true" ;="" style="color:#FFE7F7; text-align:left; padding:10px">Refresh</a>
		</p>

		<div class="centerbox">
		
		
		
		
		
		
			<img style="width:100px; height:100px; padding:10px; padding-bottom:0px" src="resources/logo.png">
			<h1 style="font-family: 'Merriweather', serif; padding-top:0px; color:#FF89AC">egblip.com</h1>
			<b>
			<a href="https://start.egblip.com"><div class="iconbox"><img src="resources/icons/start.png"></br>Startpage</div></a>
			<a href="https://github.com/GregPikitis"><div class="iconbox"><img src="resources/icons/github.png"></br>Github</div></a>			
			<a href="
			<?php 
				$resume = glob("resources/*.pdf");
				echo($resume[0]);
			?>
			"><div class="iconbox"><img src="resources/icons/resume.png"></br>Resume</div></a>
			</br>
			<a href="https://school.egblip.com"><div class="iconbox"><img src="resources/icons/school.png"></br>School</div></a>
			<a href="https://www.linkedin.com/in/emelia-blankenship-2176a2126/"><div class="iconbox"><img src="resources/icons/linkedin.png"></br>LinkedIn</div></a>
			</b>
		</div>

		<footer>Inspired by <a style="color:inherit; text-decoration:inherit" href="https://github.com/caligari87/startpage">caligari87</a></footer>
	</body>
</html>
