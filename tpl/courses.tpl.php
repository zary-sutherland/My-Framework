<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Quwius</title>
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
		<main>
		<h1>Courses</h1>
		<?php 
			$errors = Registry::get('errorhandler')->getErrors('courses');
				foreach ($errors as $error):
					?>
				<p style="color:red">
					<?php echo $error ?>
				</p>
				<?php endforeach;
				?>
		<ul class="course-list">
			<?php foreach($this->courses as $value): ?>
			<li><div>
				<a href="#"><?php echo '<img src="images/'.$value['course_image'].'">' ?></a>
				</div>
				<div>
				<a href="#"><span class="faculty-department"><?php echo $value['faculty_dept_name'] ?></span>	
					<span class="course-title"><?php echo $value['course_name'] ?></span>
					<span class="instructor"><?php echo $value['instructor_name'] ?></span></a>
				</div>
				<div>
					<p>Get Curious.</p>
					<?php echo '<a href="./Courses/enroll/'.$value['course_id'].'" class="startnow-button startnow-btn">' ?>
					Start Now!</a>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
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
