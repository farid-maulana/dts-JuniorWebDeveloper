<!DOCTYPE html>
<html lang="en">

<head>

	<title>MyKost</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-mykost-dark2.png" width="200px" height="30px" alt="" class="img-fluid mb-4">
						<!-- <h5 class="mb-3 f-w-400">Signin</h5> -->
						<form action="process/login_process.php" method="POST">
							<div class="form-group mb-3">
								<label class="floating-label" for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" class="form-control" id="Password" name="password" placeholder="">
							</div>
							<div class="custom-control custom-checkbox text-left mb-4 mt-2">
								<input type="checkbox" class="custom-control-input" id="customCheck1">
								<label class="custom-control-label" for="customCheck1">Save credentials.</label>
							</div>
							<button class="btn btn-block btn-primary mb-4">Signin</button>
						</form>
						<!-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p> -->
						<!-- <p class="mb-0 text-muted">Don’t have an account? <a href="register.php" class="f-w-400">Signup</a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>

</body>

</html>