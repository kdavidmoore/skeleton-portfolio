<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Keith Moore</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/cd-top.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="icon" href="images/favicon.ico">

</head>
<body>

	<div class="section" id="home">
		<div class="container">
			<div class="row">
				<div class="six columns splash">
					<h2>Keith Moore</h2>
					<p>I'm a full stack web developer with a focus on JavaScript, the MEAN stack, and the LAMP stack.</p>
					<a class="button button-primary" href="#portfolio">Browse Portfolio</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section" id="skills">
		<div class="container">
			<div class="header-wrapper">
				<h2>Skills</h2>
			</div>
			<div class="row">
				<div class="six columns">
					<h4>Front-end development</h4>
					<ul>
						<li>HTML, CSS, SASS, Bootstrap, Materialize</li>
						<li>JavaScript, jQuery, AngularJS</li>
					</ul>
				</div>
				<div class="six columns">
					<h4>Full-stack development</h4>
					<ul>
						<li><b>MEAN</b> stack: MongoDB, Express, AngularJS, and Node.js</li>
						<li><b>LAMP</b> stack: Linux, Apache, MySQL, and PHP</li>
					</ul>
				</div>
		  	</div>
		</div>
	</div>

	<div class="section" id="portfolio">
		<div class="container">
			<div class="header-wrapper">
				<h2>Projects</h2>
			</div>
			<div class="row">
				<div class="four columns">
					<h4>Ag Labs</h4>
					<div class="u-max-full-width">	
						<img class="u-full-width" src="images/ag.png">
					</div>
					<p>eCommerce site built using MySQL, AngularUI Router, Express, and Node.js.</p>
					<a class="button" href="https://github.com/kdavidmoore/final-project">GitHub</a>
					<a class="button" href="http://ag.kdavidmoore.com/">Demo</a>
				</div>
				<div class="four columns">
					<h4>Interactive Map</h4>
					<div class="u-max-full-width">
						<img class="u-full-width" src="images/langs.png">
					</div>
					<p>Interactive map built using DataMaps.js, AngularJS, and ngRouter.</p>
					<a class="button" href="https://github.com/kdavidmoore/backTableBankers">GitHub</a>
					<a class="button" href="http://kdavidmoore.com/languages">Demo</a>
				</div>
				<div class="four columns">
					<h4>Coffee Site</h4>
					<div class="u-max-full-width">
						<img class="u-full-width" src="images/coffee.png">
					</div>
					<p>eCommerce site built using Bootstrap and the MEAN stack.</p>
					<a class="button" href="https://github.com/kdavidmoore/coffee2-angular">GitHub</a>
					<a class="button" href="http://kdavidmoore.com/coffee">Demo</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section-end" id="contact">
		<div class="container">
			<div class="header-wrapper">
				<h2>Get in touch</h2>
			</div>
			<form action="mailer.php" method="post">
				<div class="row">
					<div class="six columns">
						<label for="nameInput">Your name</label>
						<input class="u-full-width" type="text" placeholder="Your Name" id="nameInput" name="nameInput">
					</div>
					<div class="six columns">
						<label for="emailInput">Your email</label>
						<input class="u-full-width" type="email" placeholder="someuser@mailbox.com" id="emailInput" name="emailInput">
					</div>
				</div>
				<label for="message">Message</label>
				<textarea class="u-full-width" placeholder="Well hello there" id="message" name="message"></textarea>
				<input class="button-primary" type="submit" value="Send">
			</form>
			<?php
				if (isset($_GET['sent'])){
					print "<div class='message-wrapper'>" .
						"<p class='message-text'>Message sent! I'll be in touch shortly.</p>" .
						"</div>";
				}
			?>
		</div>
	</div>

	<div class="u-full-width social-wrapper">
		<div class="row">
			<div class="six columns">
				<div class="social-items">
					<a href="https://github.com/kdavidmoore"><i class="fa fa-github fa-2x"></i> GitHub</a>
					<a href="https://linkedin.com/in/kdavidmoore"><i class="fa fa-linkedin fa-2x"></i> LinkedIn</a>
				</div>
			</div>
		</div>
	</div>

	<a href="#home" class="cd-top">Top</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
<script src="js/cd-top.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		// binds localSroll to all local links
		$.localScroll();
	});
</script>

</body>
</html>
