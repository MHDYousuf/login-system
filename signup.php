<?php
require "header.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	</head>
	<body>
		<main>
			<div class="container text-center">
				<section>
					<div class="row col-sm-4 col-sm-offset-4">
						<h3>Sign Up</h3>
						<form class="form-group" action="includes/signup.inc.php" method="post">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="uid" placeholder="Username">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="mail" placeholder="Email">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="pwd" placeholder="Password">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password"class="form-control" name="pwd-repeat" placeholder="Confirm Password">
							</div>
							<button type="submit" class="btn btn-primary" name="signup-submit">SignUp</button>
						</form>
					</div>
				</section>
			</div>
		</main>
	</body>
</html>
<?php
require "footer.php";
?>