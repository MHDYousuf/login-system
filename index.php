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
	</head>
	<body>
		<main>
			<div class="container text-center" style="background-color: #ccc">
				<div class="row" style="padding:15px">
					<?php
						if(isset($_SESSION['userid'])){
							echo '<p>You are Logged in</p>';
						}
						else{
							echo '<p >You are Logged out</p>';
						}

					?>
				</div>
			</div>
		</main>
	</body>
</html>
<?php
require "footer.php";
?>