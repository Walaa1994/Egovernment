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
	<h1>وزارة الكهرباء</h1>
	<!-- Main-Content -->
	<div class="main-w3layouts-form">
		<h2>تسجيل دخول</h2>
		<!-- main-w3layouts-form -->
		<form action='<?php echo base_url();?>index.php/Sign_in/Register' method="post">
		<?php echo validation_errors();?>
			<div class="fields-w3-agileits">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="text" name="Username" required="" placeholder="اسم المستخدم" />
			</div>
		
			<div class="fields-w3-agileits">
				<span class="fa fa-message" aria-hidden="true"></span>
				<input type="email" name="Email" required="" placeholder="الايميل" />
			</div>
		
			<div class="fields-w3-agileits">
				<span class="fa fa-key" aria-hidden="true"></span>
				<input type="password" name="Password" required="" placeholder="كلمة المرور" />
			</div>
		
			<div class="remember-section-wthree">
				<ul>
					<li>
						
					</li>
					
				</ul>
				<div class="clear"> </div>
			</div>
			<input type="submit" value="Register" />
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