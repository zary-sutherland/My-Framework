<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Quwius</title>
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
		<meta charset="utf-8">
	</head>
	<body>
		<nav>
			<a href="/"><img src="images/logo.png" alt="Quwius"></a>
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
		<div id="lead-in">
		<h1>Feed Your Curiosity,<br>
				Take Online Courses from UWI</h1>

			<form name="course_search" method="post" action="index.php?controller=">
				<div class="wide-thick-bordered" >
				<input class="c-banner-search-input" type="text" name="formSearch" value="" placeholder="Find the right course for you">
				<button class="c-banner-search-button"></button>
				</div>
			</form>
		</div>
		<header></header>
		<main>
			<h1>Most Popular</h1>
			<?php for($i = 0; $i < sizeof($this->popular); $i++): ?>
				<?php if($i % 4 == 0): ?>
				<div class="centered">
				<?php endif ?>
				<section>
				<a href="#"><?php echo '<img src="images/'.$this->popular[$i]['course_image'].'">' ?> 
				<span class="course-title"><?php echo $this->popular[$i]['course_name']?></span>
				<span><?php echo $this->popular[$i]['instructor_name']?></span></a>
				</section>
				<?php if(($i % 4) - 3 == 0): ?>
				</div>
				<?php endif  ?>
				<?php endfor ?>
			
			<h1>Learner Recommended</h1>
			<?php for($i = 0; $i < sizeof($this->recommended); $i++): ?>
				<?php if($i % 4 == 0): ?>
				<div class="centered">
				<?php endif ?>
				<section>
				<a href="#"><?php echo '<img src="images/'.$this->recommended[$i]['course_image'].'">' ?> 
				<span class="course-title"><?php echo $this->recommended[$i]['course_name']?></span>
				<span><?php echo $this->recommended[$i]['instructor_name']?></span></a>
				</section>
				<?php if(($i % 4) - 3 == 0): ?>
				</div>
				<?php endif  ?>
				<?php endfor ?>
			<footer>
				<nav>
					<ul>
						<li>&copy;2018 Quwius Inc.</li>
						<li><a href="#">Company</a></li>
						<li><a href="#">Connect</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
					</ul>
				</nav>
			</footer>
		</main>
	</body>
</html>