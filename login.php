<?php include('config/
server.php') ?>
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


<?php
session_start();

if(isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}

?>


<div class="header">
  <h1>Home Page</h1>
 <?php include ("register.php") ?>
</div>

<div class="content">
<!--notification message-->
<?php if(isset($_SESSION['success'])) : ?>
<div class="error success">
 <h3>
 <?php
 echo $_SESSION['success'];
 unset($_SESSION['success']);
 ?>
 </h3>
</div>
<?php endif ?>

 <!--logged in user information -->
 <?php if(isset($_SESSION['username'])) : ?>
 <p>Welcome <strong><?php echo $_SESSION['username']; ?></p>
 <p> <a href= "index.php?logout='1'" style= "color: red;"></p>
 
 <?php endif ?>
</div>

</body>
</html>
