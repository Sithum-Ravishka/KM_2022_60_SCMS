
<!DOCTYPE html>
<html>

<head>
	<meta charset="ISO-8859-1">
	<title>Admin Login</title>

	<!-- CSS -->
	<style>
		<?php include 'css/login.css'; ?>
	</style>

</head>

<body>



	<div class="containerLogin">

		<div class="loginContent">
			<div class="logImg">
				<img alt="" src="images/admin-login.png">
			</div>

			<div class="form-body">
				<form action="adminlogincheck.php" method="post">

					<div class="logTitle">
						<span>Admin Login</span>
					</div>
					<br> <span class="logSubTitle">Login here using your
						UserName and Password</span>
					<div class="form-group">
						<label for="exampleInputEmail1">User Name</label> <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter UserName" required="required"> <small id="emailHelp" class="form-text text-muted">Don't share
							your <span class="smMsg">User name and Password</span> with
							anyone else.
						</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label> <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
					</div>

					<br>
					<button type="submit" class="loginBtn" name="submit">LOGIN</button>
				</form>
			</div>
		</div>
	</div>



</body>

</html>