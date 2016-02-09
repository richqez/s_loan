<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Signin :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url() . 'assert/css/' ?>bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url() . 'assert/css/' ?>style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url() . 'assert/css/' ?>font-awesome.css" rel="stylesheet">
<script src="<?php echo base_url() . 'assert/js/' ?>jquery.min.js"> </script>
<script src="<?php echo base_url() . 'assert/js/' ?>bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href="index.html">D Loan Systems </a></h1>
		<div class="login-bottom">
			<?php if (isset($err_message)): ?>
				<div class="well">
					<h3>ข้อความแจ้งเตือน</h3>
					<p>
						<?php echo $err_message; ?>
					</p>
				</div>
			<?php endif; ?>
			<h2>เข้าสู่ระบบ</h2>
			<form action="<?php echo base_url() . 'auth/login' ?>" method="post">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="ชื่อผู้ใช้" required="" name="user_username">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="รหัสผ่าน" required="" name="user_password">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="เข้าสู่ระบบ">
					</label>
			</div>

			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2016 SheepCode.xyz  </p>	 </div>
<!---->
<!--scrolling js-->
	<script src="<?php echo base_url() . 'assert/js/' ?>jquery.nicescroll.js"></script>
	<script src="<?php echo base_url() . 'assert/js/' ?>scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
