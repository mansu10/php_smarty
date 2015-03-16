<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html" >
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" type="text/css" href="templates/global/reset.css">
		<link rel="stylesheet" type="text/css" href="templates/login/css/style.css">

	</head>
	<body>
		<section class="wrapper">
			<form action="/php/login_chk.php" method="post">
				<div class="logo"><h5>Logo</h5></div>
				<div class="user-name">
					<label>用户名</label>
					<input type="text" name="user" class="input-lg">
				</div>
				<div class="user-pwd">
					<label>密&nbsp;&nbsp;&nbsp;码</label>
					<input type="password" name="pwd" class="input-lg">
					<!-- <p><a href="#" rel="忘记密码">忘记密码？</a></p> -->
				</div>
				<div class="remember-me">
					<input type="checkbox" name="remember" id="rempwd">
					<label for="rempwd">记住密码</label>
				</div>
				<div class="login-btn">
					<button class="login">GO</button>
				</div>
			</form>

		</section>
		<footer>
			<p>Copyright &copy; 2015.Company name All rights reserved.</p><br/>
			<p>技术支持：</p>
		</footer>
	</body>
</html>