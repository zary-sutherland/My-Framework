<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Login|Quwius</title>
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
				<li><a href="./Login">Login</a></li>
				<li><a href="./SignUp">Sign Up</a></li>
			</ul>
		</nav>
		<main>
		   <div class="login-box">
			<div class="login-box-body">
			<p class="login-box-msg">Be Curious - Sign In</p>
			<form action="<?php echo URL_ROOT_DIR.DS."CMS".DS."login/signIn" ?>" method="post">
			  <div class="form-group has-feedback">
				<input type="text" class="form-control" name="Email" placeholder="Email"/>
			  </div>
			  <div class="form-group has-feedback">
				<input type="password" class="form-control" name="Password" placeholder="Password"/>
			  </div>
			  <div class="row">
				<div class="col-xs-8">    
				  <div class="checkbox icheck">
					<label>
					  <input type="checkbox"> Remember Me
					</label>
				  </div>                        
				</div><!-- /.col -->
				<div class="col-xs-4">
				  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div><!-- /.col -->
			  </div>
			</form>
			<a href="./SignUp" class="text-center">Sign Up</a>
			<?php 
			use FRAMEWORKNS\Registry;
			$errors = Registry::get('errorhandler')->getErrors('login');
				foreach ($errors as $error):
					?>
				<p style="color:red">
					<?php echo $error ?>
				</p>
				<?php endforeach; ?>
			<br>
       </div><!-- /.login-box-body -->
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