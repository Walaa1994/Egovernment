<!--A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>our web</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Groovy Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Font-Awesome-CSS -->
		<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<!-- Required Css -->
		<link href="<?php echo base_url();?>/assets/css/style.css" rel='stylesheet' type='text/css' />
	<!--// Required Css -->
	<!--fonts-->
	<link href="<?php echo base_url();?>/assets///fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1>Our Electricity</h1>
	<!-- Main-Content -->
	<div class="main-w3layouts-form">
		<h2>Login to your account</h2>
		<!-- main-w3layouts-form -->
		<form action="<?php echo base_url();?>index.php/login/login_validation" method="post">
			<div class="fields-w3-agileits">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="text" name="Username" required="" placeholder="Username" />
				<span class="test-danger"><?php echo form_error('Username');?></span>
			</div>
			<div class="fields-w3-agileits">
				<span class="fa fa-key" aria-hidden="true"></span>
				<input type="password" name="Password" required="" placeholder="Password" />
				<span class="test-danger"><?php echo form_error('Password');?></span>
			</div>
			<div class="remember-section-wthree">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span> <a href="http://localhost/egovernment/index.php/sign_in">	Register</a></span> 
						</label>
					</li>
					<li> <a href="#">Forgot password?</a> </li>
				</ul>
				<div class="clear"> </div>
			</div>
			<input type="submit" value="Login" />
			<?php
			echo $this->session->flashdata('error');
			?>
		</form>
		<!--// main-w3layouts-form -->
		<!-- Social icons -->
		
		<!--// Social icons -->
	</div>
	<!--// Main-Content-->
	<!-- copyright -->
	
	<!--// copyright -->
	<!--//background-->
</body>

</html>