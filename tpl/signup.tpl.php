<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Sign Up|Quwius</title>
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
		   <div class="register-box">
			<div class="register-box-body">
			<p class="login-box-msg">Sign Up - Feed Your Curiosity</p>
        <form action="<?php echo URL_ROOT_DIR.DS."CMS".DS."signup/register" ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="FullName" placeholder="Full name" required/>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="Email" placeholder="Email" required/>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="Password" placeholder="Password" required/>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="confirmPass" placeholder="Retype password" required/>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="agree" required> I agree to the <a href="#">terms</a>
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
			</div><!-- /.col -->
		</div>
	</form>
</div><!-- /.login-box-body -->
			<?php 
			use FRAMEWORKNS\Registry;
			$errors = Registry::get('errorhandler')->getErrors('signup');
				foreach ($errors as $error):
					?>
				<p style="color:red">
					<?php echo $error ?>
				</p>
				<?php endforeach; ?>
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