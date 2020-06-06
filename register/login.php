<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
  	<h1>Login</h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('error.php'); ?>
  	<div class="input">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input">
  		<label>Password</label>
  		<input type="password" name="password">
	  </div>

	  <div class="input">
  		<label>Change Pssword</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
