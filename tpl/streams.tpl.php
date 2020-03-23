<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Streams | Quwius</title>
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
		<meta charset="utf-8">
	</head>
	<body>
		<nav>
			<a href="#"><img src="images/logo.png" alt="UWI online"></a>
			<ul>
				<li><a href="./Courses">Courses</a></li>
				<li><a href="./Streams">Streams</a></li>
				<li><a href="#">About Us</a></li>
				<?php

use FRAMEWORKNS\Registry;

		if(Registry::get('role') == 'LoggedIn'): ?>
			<li><a href="./Profile"><?php echo Registry::get('email') ?></a></li>
			<li><a href="./Logout">Logout</a></li>
		<?php else: ?>
			<li><a href="./Login">Login</a></li>
			<li><a href="./SignUp">Sign Up</a></li>
		<?php endif ?>
			</ul>
		</nav>
		<div id="streams-lead-in">
		<h1>Take specialized courses<br>
				Earn Streams Certifications</h1>
		</div>
		<header id="streams-header"></header>
		<main class="streams">
			<div class="centered">
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[0]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[0]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[0]['instructor_name'] ?></span></a>
				</section>
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[1]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[1]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[1]['instructor_name'] ?></span></a>
				</section>
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[2]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[2]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[2]['instructor_name'] ?></span></a>
				</section>
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[3]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[3]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[3]['instructor_name'] ?></span></a>
				</section>
			</div>
			<div class="centered">
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[4]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[4]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[4]['instructor_name'] ?></span></a>
				</section>
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[5]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[5]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[5]['instructor_name'] ?></span></a>
				</section>
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[6]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[6]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[6]['instructor_name'] ?></span></a>
				</section>
				<section class="streams">
				<a href="#"><?php echo '<img src="images/'.$this->streams[7]['stream_image'].'">' ?> 
				<span class="course-title padded"><?php echo $this->streams[7]['stream_name'] ?></span>
				<span class="padded"><?php echo $this->streams[7]['instructor_name'] ?></span></a>
				</section>
			</div>
			<footer>
				<nav>
					<ul>
						<li>&copy;2015 Quwius Inc.</li>
						<li><a href="#">Company</a></li>
						<li><a href="#">Connect</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
					</ul>
				</nav>
			</footer>
		</main>
	</body>
</html>