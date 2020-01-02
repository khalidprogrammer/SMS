<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title> 
	<!-- bootstrap theme -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap css -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/custom.css"> -->
	<!-- login css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	
	<link rel="stylesheet" href="<?=base_url()?>assets/custom/css/main.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/custom/css/util.css">
	<!-- custome css -->
	<!-- Jquery  -->
	<script src="<?=base_url()?>assets/jquery/jquery.min.js"></script>
	<!-- bootstrap min js -->
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=base_url()?>assets/custom/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?=base_url()?>User/login" method="post" id="login_form">
					<span class="login100-form-title">
						School Management System
					</span>
					<span id="message"></span>

					<div class="wrap-input100 validate-input">
						<input class="input100" id="username" type="text" name="username" placeholder="Username" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


	<!-- custom js -->
	<script type="text/javascript" src="<?php echo base_url('assets/custom/js/login.js') ?>"></script>

	<script src="<?=base_url()?>assets/custom/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>assets/custom/vendor/select2/select2.min.js"></script>
	<script src="<?=base_url()?>assets/custom/vendor/tilt/tilt.jquery.min.js"></script>
	<!-- <script src="<?=base_url()?>assets/custom/js/custom.js"></script> -->
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
</body>
</html>