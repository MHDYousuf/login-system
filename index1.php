<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HOSPITAL DATABASE</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">HOSPITAL DB</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username/Email">
							<input type="password" class="form-control" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">LOG IN</button>
					</form>
				</div>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row">
				<div class="jumbotron col-sm-6 col-sm-offset-1">
					<h1>Welcome to Hospital Database</h1>
					<p>...</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a></p>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<div class="container-fluid main-login main-center">
						<form method="post" action="#">
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">First Name</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="first" id="first"  placeholder="Enter your first name"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="name" class="cols-sm-2 control-label">Last Name</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="last" id="last"  placeholder="Enter your Last Name"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="cols-sm-2 control-label">Your Email</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Username</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>
						<!--	<div class="form-group">
								<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
									</div>
								</div>-->
							</div>
							<div class="form-group ">
								<button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
							</div>
							<div class="login-register text-center">
								<a href="index.php">Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
	</html>