<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Register PHP AND MySQL </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 <body>
 <style>
	  .header{
		  margin-top:30px;
	  }
	</style>
<div class="header">
<h1>Register</h1>
</div>
<?php include ("error.php")?>
<form method="post" action="index.php">

<div  class="input">
<label>Username</label>
<input text="username" name="username"  value="<?php echo $username; ?>">
</div>

<div  class="input">
<label>Email</label>
<input type="email" name="email"   value="<?php echo $email; ?>">
</div>

<div  class="input">
<label>Password</label>
<input type="password" name="password_1">
</div>

<div  class="input">
<label>Confirm Password</label>
<input type="pasword_2" name="password_2">
</div>

<div class="input">
<button type="submit" class="btn" name="reg_user">Register</button>
</div>


<p>
Already registered? <a href="login.php">Sign in 
</p>
<form>
</body>
</html>

