<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Quwius - Course Unenrollment Confirmed</title>
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
		<h1>Unenrollment Confirmed</h1>
		<ul id="unenroll-confirm">
			<li>
				<p>You have been removed from this course, please click <a href="./profile">this link</a> to return to your profile page</p>
			</li>

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