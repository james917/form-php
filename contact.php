<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Contact Form</title>
		<meta name="description" content="" />
		<meta name="author" content="Tudor Anghelina" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	<div style="margin-top:200px">
		<div class="container">
			<form action="submitted.php" method="post">
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="">
						</div>
			</div>

				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">First Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="inputFname" name="inputFnamel" placeholder="">
						</div>
			</div>

				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">Last Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="inputLname" name="inputLname" placeholder="">
						</div>
			</div>
				
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-default">Send Message</button>
					</div>
				</div>
			</form>
		</div>
	</div>







				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
			</body>
			</html>